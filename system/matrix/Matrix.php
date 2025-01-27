<?php
namespace Merp\Matrix;

use Phalcon\Autoload\Loader;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;

class Matrix implements ModuleDefinitionInterface {

	private function getName(): string {
		return "Merp\Matrix";
	}

	private function getRelativeUrl(): string {
		return "../system/matrix";
	}

	public function registerAutoloaders(DiInterface $container = null): void {
		$loader = new Loader();
		$loader->setNamespaces([
			$this->getName()."\Controllers" => $this->getRelativeUrl()."/controllers/",
			$this->getName()."\Models" => $this->getRelativeUrl()."/models/",
			"Phactory\Auth" => "../system/auth/",
		]);

		$loader->register();
	}

	public function registerServices(DiInterface $container): void {
		// Dispatcher
		$name = $this->getName();
		$container->set("dispatcher", function () use($name) {
			$dispatcher = new Dispatcher();
			$dispatcher->setDefaultNamespace($name."\Controllers");
			return $dispatcher;
		});

		// View
		$relurl = $this->getRelativeUrl();
		$container->set("view", function () use($relurl) {
			$view = new View();
			$view->setViewsDir($relurl."/views/");
			$view->registerEngines([
				".volt" => 'voltService',
			]);

			return $view;
		});
	}

}
?>