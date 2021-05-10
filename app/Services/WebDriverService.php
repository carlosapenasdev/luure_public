<?php


namespace App\Services;

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

class WebDriverService
{

	public static function driver()
	{
		try
		{
			$host 			= config('webdriver.url');

			$capabilities 	= DesiredCapabilities::firefox();

			$profile 		= $capabilities->getCapability(FirefoxDriver::PROFILE);

			$profile->setPreference("network.proxy.type", 0);

			$capabilities->setCapability('acceptInsecureCerts', true);
			$capabilities->setCapability(FirefoxDriver::PROFILE, $profile);
			
			if(!\App::environment('local'))
				$capabilities->setCapability('moz:firefoxOptions', ['args' => ['-headless']]);

			$driver = RemoteWebDriver::create($host, $capabilities);
			
			return $driver;

		}
		catch (\Throwable $th)
		{
			throw $th;
		}
	}

}
