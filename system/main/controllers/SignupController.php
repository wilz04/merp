<?php
namespace Merp\Main\Controllers;

use Merp\Main\Models\SecurityUsers as User;
use Merp\Main\Models\SecurityProfiles as Profile;
use Merp\Main\Models\SecurityUserprofiles as ProfilesByUser;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Controller;

class SignupController extends Controller {

	private Request $request;
	private Response $response;

	public function initialize() {
		// Create a request and response instance
		$this->request = new Request();
		$this->response = new Response();
	}

	public function newAction(): Response {
		$profiles = Profile::find([
			"conditions" => "_reserved = :_reserved:",
			"bind" => [
				"_reserved" => 0
			]
		]);

		$this->view->setVar("profiles", $profiles);
		$this->response->setContent($this->view->getRender("signup", "new"));
		return $this->response;
	}

	private function getViewStateValue(string $key): ?string {
		$request = new Request();
		$value = $request->getPost($key);
		return (!empty($value) && $value != "-1")? $value: NULL;
	}

	public function putAction(): Response {
		$this->view->disable();

		$user = new User();
		$user->_1stname = $this->getViewStateValue("_1stname");
		$user->_2ndname = $this->getViewStateValue("_2ndname");
		$user->_3rdname = $this->getViewStateValue("_3rdname");
		$user->_4thname = $this->getViewStateValue("_4thname");
		$user->_email = $this->getViewStateValue("_email");
		$user->_password = md5($this->getViewStateValue("_password"));
		$user->_phone = $this->getViewStateValue("_phone");
		$user->_reserved = $this->getViewStateValue("_reserved");

		$ok = false;
		try {
			$ok = $user->save();
		} catch (\Exception $e) {
			header("Warning: ".$e->getMessage());
		}

		if ($ok === false) {
			$this->response->setStatusCode(409, "Conflict");
			$this->response->setContent("{}");
			return $this->response;
		}

		$profile = new ProfilesByUser();
		$profile->_user = $user->getConnection()->lastInsertId();
		$profile->_profile = $this->getViewStateValue("_profile");

		$ok = false;
		try {
			$ok = $profile->save();
		} catch (\Exception $e) {
			header("Warning: ".$e->getMessage());
		}

		if ($ok === false) {
			$this->response->setStatusCode(201, "Created");
		} else {
			$this->response->setStatusCode(200, "OK");
		}

		$this->response->setContent("{}");

		// Return the response
		return $this->response;
	}

}
?>