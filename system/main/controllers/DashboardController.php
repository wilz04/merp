<?php
namespace Merp\Main\Controllers;

use Merp\Main\Models\SysSettings as Settings;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Controller;

class DashboardController extends Controller {

	private Request $request;
	private Response $response;

	public function initialize() {
		// Create a request and response instance
		$this->request = new Request();
		$this->response = new Response();
	}

	private function getViewStateValue(string $key): ?string {
		$value = $this->request->getPost($key);
		return (!empty($value) && $value != "-1")? $value: NULL;
	}

	public function layoutAction(): Response {
		// $this->view->setVar("title", PUBLIC_TITLE);
		$this->response->setContent($this->view->getRender("dashboard", "layout"));
		return $this->response;
	}

	public function welcomeAction(): Response {
		$this->view->setVar("MAP_WIDTH", Settings::getMapWidth());
		$this->view->setVar("MAP_HEIGHT", Settings::getMapHeight());
		$this->view->setVar("MAP_SRC", Settings::getMapSource());

		$this->response->setContent($this->view->getRender("dashboard", "welcome"));
		return $this->response;
	}

}
?>