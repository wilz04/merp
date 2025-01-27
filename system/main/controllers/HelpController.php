<?php
namespace Merp\Main\Controllers;

use Merp\Main\Models\HelpDocumentation as Documentation;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Controller;

class HelpController extends Controller {

	private Request $request;
	private Response $response;

	public function initialize() {
		// Create a request and response instance
		$this->request = new Request();
		$this->response = new Response();
	}

	public function manualAction(): Response {
		$this->view->setVar("cruds",  Documentation::find());
		$this->response->setStatusCode(200, "OK");
		$this->response->setContent($this->view->getRender("help", "manual"));
		$this->response->setContentType("text/plain");
		return $this->response;
	}

}
?>