<?php
namespace Merp\Geo\Controllers;

use Merp\Geo\Models\GeoEnrollments4List as _GET;
use Merp\Geo\Models\GeoEnrollments4List as _SET;

use Phactory\Auth\SecurityUsers as Authorization;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Controller;

class GeoEnrollments4Controller extends Controller {

	private Request $request;
	private Response $response;

	public function initialize() {
		// Create a request and response instance
		$this->request = new Request();
		$this->response = new Response();
	}

	private function getViewState(): _SET {
		$model = new _SET();
		$id = $this->getViewStateValue("_id");
		if ($id != NULL) {
			$model = _SET::findFirst([
				"conditions" => "_id = :_id:",
				"bind" => ["_id" => $id]
			]);
		}

		$model->_id = $this->getViewStateValue("_id");
		$model->_regional = $this->getViewStateValue("_regional");
		$model->_circuit = $this->getViewStateValue("_circuit");
		$model->_budgetcode = $this->getViewStateValue("_budgetcode");
		$model->_name = $this->getViewStateValue("_name");
		$model->_town = $this->getViewStateValue("_town");
		$model->_dependence = $this->getViewStateValue("_dependence");
		$model->_zone = $this->getViewStateValue("_zone");
		$model->_phone = $this->getViewStateValue("_phone");
		$model->_cnvmts = $this->getViewStateValue("_cnvmts");
		return $model;
	}
	
	private function getDataset(): Object {
		$request = new Request();
		return _GET::find(["conditions" => "_age = :_age:", "bind" => ["_age" => $request->getHeader("Age")]]);
	}
	
	private function dropdown(): void {}

	private function getListId(): string {
		return sprintf("_%s_list", strtolower(_GET::getName()));
	}

	private function getViewStateValue(string $key): ?string {
		$value = $this->request->getPost($key);
		return !empty($value)? $value: NULL;
	}

	private function getToolbarRights(): string {
		$ctrl = strtolower(_GET::getName());
		$from = $this->request->getHeader("From");
		return sprintf(
			"{\"new\": %b, \"put\": %b, \"rem\": %b}",
			is_callable([$this, "GETACTION"]) && Authorization::allow($ctrl, "new", $from),
			is_callable([$this, "PUTACTION"]) && Authorization::allow($ctrl, "put", $from),
			is_callable([$this, "REMACTION"]) && Authorization::allow($ctrl, "rem", $from)
		);
	}

	public function openAction(): Response {
		if (!Authorization::allow(strtolower(_GET::getName()), "open", $this->request->getHeader("From"))) {
			$this->response->setStatusCode(401, "Unauthorized");
			return $this->response;
		}

		$this->view->disable();

		$content = sprintf(
			"{ \"id\": \"%s\", \"src\": \"%s\", \"fieldset\": %s, \"rowformat\": %s, \"headset\": [\"%s\"], \"rights\": %s }",
			$this->getListId(),
			strtolower(_GET::getName()),
			(is_callable([$this, "PUTACTION"])? _SET::getSerializedFieldset(): _GET::getSerializedFieldset()),
			_GET::getRowFormat(),
			implode("\", \"", _GET::getHeadset()),
			$this->getToolbarRights(),
		);

		$this->response->setContent($content);
		$this->response->setContentType("application/json");
		return $this->response;
	}

	public function listAction(): Response {
		if (!Authorization::allow(strtolower(_GET::getName()), "list", $this->request->getHeader("From"))) {
			$this->response->setStatusCode(401, "Unauthorized");
			return $this->response;
		}

		$this->view->disable();

		$dataset = $this->getDataset();
		$headset = _GET::getHeadset();
		$body = [];
		foreach ($dataset as $data) {
			$row = [];
			$j = 0;
			foreach ($headset as $i => $head) {
				$row[] = sprintf("\"%s\": \"%s\"", $j++, str_replace("\"", "\\\"", $data->$i));
			}

			$body[] = sprintf("{ %s }", implode(", ", $row));
		}

		$content = sprintf("{ \"data\": [%s] }", implode(", ", $body));
		$this->response->setContent($content);
		$this->response->setContentType("application/json");
		return $this->response;
	}





}
?>