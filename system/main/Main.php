<?php
namespace Merp\Main;

use Phalcon\Autoload\Loader;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;

class Main implements ModuleDefinitionInterface {

	public function registerAutoloaders(DiInterface $container = null): void {
		$loader = new Loader();
		$loader->setNamespaces([
			"Merp\Main\Controllers" => "../system/main/controllers/",
			"Merp\Main\Models" => "../system/main/models/"
		]);
		
		$loader->register();
	}

	public function registerServices(DiInterface $container): void {
		// Dispatcher
		$container->set("dispatcher", function () {
			$dispatcher = new Dispatcher();
			$dispatcher->setDefaultNamespace("Merp\Main\Controllers");
			return $dispatcher;
		});

		// View
		$container->set("view", function () {
			$view = new View();
			$view->setViewsDir("../system/main/views/");
			$view->registerEngines([
				".volt" => 'voltService',
			]);

			return $view;
		});
	}

}
?>