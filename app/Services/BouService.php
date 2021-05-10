<?php


namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Services\SespService;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;
use Facebook\WebDriver\Firefox\FirefoxProfile;
use Facebook\WebDriver\Firefox\FirefoxDriver;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverAlert;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\Exception\StaleElementReferenceException;
use Grimzy\LaravelMysqlSpatial\Types\Point;

use App\Models\Management\Cidade;
use App\Models\Management\Ambiente;
use App\Models\Management\NaturezaCrime;
use Alert;
use Lang;

class BouService extends SespService
{
	const urlBou = "http://www.bounificadointranet.sesp.parana/bounificadosespintranet_jb51/consultarBo.do?";

	public static function getBou(Request $request)
	{
		try
		{
			$driver 	= self::login($request);
			$driver 	= self::openModulo($driver);
			$driver 	= self::search($driver, $request);
			$response 	= self::read($driver, $request);
			$driver->quit();
			return $response;

		}
		catch (\Throwable $th)
		{
			throw $th;
		}
	}

	private static function openModulo($driver)
	{
		$driver->get(parent::urlSesp.'action=entrarSistema&codSistema=2');
		
		$alert = $driver->wait()->until(
			WebDriverExpectedCondition::alertIsPresent()
		)->accept();

		$driver->wait()->until(
			WebDriverExpectedCondition::presenceOfElementLocated(WebDriverBy::id('oCMenu__86'))
		);

		return $driver;
	}

	private static function search($driver, $request)
	{
		$bou 		= explode('/', $request->bou);
		$ano 		= $bou[0];
		$protocolo 	= $bou[1];
		
		$driver->get(self::urlBou.'action=view&codBoletim='.$protocolo.'&anoBoletim='.$ano);

		$selector 	= '.msg_erro';
		$erro 		= $driver->findElements(WebDriverBy::cssSelector($selector));
		
		if (sizeof($erro) > 0)
			parent::error($driver, 'bou_not_found', ['bou' => $request->bou]);
		
		return $driver;
	}

	private static function read($driver, $request)
	{
		$rawData 				= self::lerInputs($driver);
		$ambiente 				= self::lerAmbiente($driver);
		$natureza 				= self::lerNatureza($driver);
		$rawData['descritivo'] 	= self::lerDescricao($driver);

		if(!empty($ambiente))
			$rawData['ambiente_id'] = $ambiente->id;

		if(!empty($natureza))
			$rawData['natureza_id'] = $natureza->id;

		
		$rawData['bou'] = $request->bou;

		$response = self::getBouData($rawData);

		return $response;
	}

	private static function lerInputs($driver)
	{
		$inputs = $driver->findElements(WebDriverBy::tagName('input'));
		
		$rawData = [];

		foreach ($inputs as $input)
		{
			try {
				$name 	= $input->getAttribute('name');
				$value 	= $input->getAttribute('value');

				if(!empty($name))
					$rawData[$name] = $value;
			}
			catch(StaleElementReferenceException $th)
			{

			}
		}

		return $rawData;
	}

	private static function lerAmbiente($driver)
	{
		$ambiente 		= null;
		$xpathBase 		= "//*[text()[contains(.,'Tipo Ambiente')]]";
		$xpathPai 		= "/parent::*/parent::*/tr[position()=2]";
		$xpathCodigo	= "/td[position()=1]";

		if (sizeof($driver->findElements(WebDriverBy::xpath($xpathBase))) > 0)
		{
			if (sizeof($driver->findElements(WebDriverBy::xpath($xpathBase.$xpathPai.$xpathCodigo))) > 0)
			{
				$ambienteEl 	= $driver->findElement(WebDriverBy::xpath($xpathBase.$xpathPai.$xpathCodigo));
				$ambienteCod 	= $ambienteEl->getText();
				$ambienteCod 	= explode('-', $ambienteCod);

				$codigo 		= '000.'.(strlen($ambienteCod[0]) < 2 ? '0'.$ambienteCod[0] : $ambienteCod[0]);
				$codigo 		.= '.'.(strlen($ambienteCod[1]) < 2 ? '0'.$ambienteCod[1] : $ambienteCod[1]);

				$ambiente 		= Ambiente::getByCodigo($codigo);
				
			}
		}

		return $ambiente;
	}

	private static function lerNatureza($driver)
	{
		$natureza 		= null;
		$xpathBase 		= "//*[text()[contains(.,'NATUREZA CONSTATADA')]]";
		$xpathTds 		= "/parent::*/parent::*/parent::*/tr[position()=2]/td[position()=1]/table/tbody/tr";
		$xpathCodigo	= "/td[position()=1]";

		if (sizeof($driver->findElements(WebDriverBy::xpath($xpathBase))) > 0)
		{
			if (sizeof($driver->findElements(WebDriverBy::xpath($xpathBase.$xpathTds))) > 0)
			{
				$naturezas 	= $driver->findElements(WebDriverBy::xpath($xpathBase.$xpathTds));
				foreach ($naturezas as $natureza)
				{
					$elemento = $natureza->findElement(WebDriverBy::xpath($xpathBase.$xpathTds.$xpathCodigo));

					$natCod 	= $elemento->getText();
					$natCod 	= explode('-', $natCod);

					$codigo 		= str_pad($natCod[0] , 3 , '0' , STR_PAD_LEFT);
					$codigo 		.= '.'.$natCod[1];
					$codigo 		.= '.'.str_pad($natCod[0] , 3 , '0' ,  STR_PAD_RIGHT);

					$natureza 		= NaturezaCrime::getByCodigo($codigo);
				}
			}
		}

		return $natureza;
	}

	private static function lerDescricao($driver)
	{
		if (sizeof($driver->findElements(WebDriverBy::name('descricaoSumaria'))) > 0)
			return $driver->findElement(WebDriverBy::name('descricaoSumaria'))->getText();
		
		return '';
	}

	private static function getBouData($rawData)
	{
		$cidade = Cidade::getByCodigoIbge($rawData['codMunicipio']);

		$response = [
			'bou' 			=> $rawData['bou'],
			'ambiente_id' 	=> $rawData['ambiente_id'],
			'cidade_id' 	=> $cidade->id,
			'bairro' 		=> $rawData['bairro'],
			'rua' 			=> $rawData['endereco'],
			'numero' 		=> $rawData['numero'],
			'geolocalizacao'=> new Point($rawData['coordenadaXGeo'], $rawData['coordenadaYGeo']),
			'confianca_geo' => $rawData['percentualConfiancaGeo'],
			'descritivo' 	=> $rawData['descritivo'],
		];

		if((isset($rawData['dataInicialFato']) && !empty($rawData['dataInicialFato'])) && (isset($rawData['horaInicialFato']) && !empty($rawData['horaInicialFato'])))
		{
			$datahora 				=  getByDataHora($rawData['dataInicialFato'], $rawData['horaInicialFato']);
			$response['datahora']	= $datahora;
		}

		return $response;
	}

}
