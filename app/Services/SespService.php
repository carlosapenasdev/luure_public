<?php


namespace App\Services;

use App\Services\BouService;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;
use Facebook\WebDriver\Firefox\FirefoxProfile;
use Facebook\WebDriver\Firefox\FirefoxDriver;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverAlert;
use Facebook\WebDriver\WebDriverBy;
use Alert;
use Lang;

class SespService
{
	const urlSesp = "https://www.intranet.sesp.parana/sespintranet/moduloValidacao.do?";
	
	public static function getUser()
	{
		$user = auth()->user();
		$user = explode('@', $user->email);
		
		return is_array($user) ? $user[0] : $user;

	}

	protected static function login(Request $request)
	{
		$driver = WebDriverService::driver();

		$driver->get(self::urlSesp.'action=index');

		$driver->findElement(WebDriverBy::id("chave"))->sendKeys($request->user);
		$driver->findElement(WebDriverBy::id("senha"))->sendKeys($request->pass);
		$driver->findElement(WebDriverBy::id("btValidar"))->click();
		
		if (sizeof($driver->findElements(WebDriverBy::xpath("//*[text()[contains(.,'INCORRETOS')]]"))) > 0)
			self::error($driver, 'user_pass');
		elseif (sizeof($driver->findElements(WebDriverBy::xpath("//*[text()[contains(.,'Você não possui')]]"))) > 0)
			self::error($driver, 'sem_acesso');
		
		return $driver;
	}
	
	protected static function error($driver, $error, $values = [])
	{
		$codigo =  Lang::get('sesp.error_code.'.$error);
		$msg 	=  Lang::get('sesp.error_message.'.$codigo, $values);

		$driver->quit();

		throw new \Exception($msg, $codigo);
	}

}
