<?php
namespace Merp\Main\Controllers;

use Merp\Main\Models\InfoRequests as InfoRequest;
use Merp\Main\Models\SecurityUsers as User;
use Merp\Main\Models\SysSettings as Settings;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Controller;

class ContactController extends Controller {

	private Request $request;
	private Response $response;

	public function initialize() {
		// Create a request and response instance
		$this->request = new Request();
		$this->response = new Response();
	}

	private function getViewState(): InfoRequest {
		$info = new InfoRequest();
		$info->_fullname = $this->getViewStateValue("_fullname");
		$info->_nid = $this->getViewStateValue("_nid");
		$info->_advisor = $this->getViewStateValue("_advisor");
		$info->_legalid = $this->getViewStateValue("_legalid");
		$info->_address = $this->getViewStateValue("_address");
		$info->_location = $this->getViewStateValue("_location");
		$info->_phone1 = $this->getViewStateValue("_phone1");
		$info->_phone2 = $this->getViewStateValue("_phone2");
		$info->_signs = $this->getViewStateValue("_signs");
		$info->_email = $this->getViewStateValue("_email");
		$info->_department = $this->getViewStateValue("_department");
		$info->_subject = $this->getViewStateValue("_subject");
		$info->_notifyme = $this->getViewStateValue("_notifyme");
		$info->_pickup = $this->getViewStateValue("_pickup");
		$info->_date = date("Y-m-d");
		$info->_applicant = $this->getViewStateValue("_applicant");

		$info->_mailto = Settings::getInfoTo();
		$info->_mailsubject = Settings::getInfoSubject();
		$info->_mailsummary = Settings::getInfoSummary();
		$info->_mailheaders = sprintf("MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\nFrom: %s\r\nX-Mailer: PHP/%s", $info->_email, phpversion());
		$info->_mailsent = 0;
		return $info;
	}

	private function getViewStateValue(string $key): ?string {
		$value = $this->request->getPost($key);
		return (!empty($value) && $value != "-1")? $value: NULL;
	}

	public function formAction(): Response {
		$from = $this->request->getHeader("From");
		if (empty($from)) {
			$this->view->disable();
			$this->response->setStatusCode(401, "Unauthorized");
			$this->response->send();
			return $this->response;
		}

		$authinfo = explode(":", $from);
		$user = User::findFirst([
			"conditions" => "_id = :_id:",
			"bind" => ["_id" => $authinfo[0]]
		]);

		$this->view->setVar("_fullname", preg_replace("/\s+/", " ", trim(sprintf("%s %s %s %s", $user->_1stname, $user->_2ndname, $user->_3rdname, $user->_4thname))));
		$this->view->setVar("_phone", $user->_phone);
		$this->view->setVar("_email", $user->_email);
		$this->view->setVar("_today", date("Y-m-d"));
		$this->response->setStatusCode(200, "OK");
		$this->response->setContent($this->view->getRender("contact", "form"));
		return $this->response;
	}

	public function mailAction(): Response {
		$mail = $this->getViewState();

		$this->view->setVar("_summary", $mail->_mailsummary);
		$this->view->setVar("_fullname", $mail->_fullname);
		$this->view->setVar("_nid", $mail->_nid);
		$this->view->setVar("_advisor", $mail->_advisor);
		$this->view->setVar("_legalid", $mail->_legalid);
		$this->view->setVar("_address", $mail->_address);
		$this->view->setVar("_location", $mail->_location);
		$this->view->setVar("_phone1", $mail->_phone1);
		$this->view->setVar("_phone2", $mail->_phone2);
		$this->view->setVar("_signs", $mail->_signs);
		$this->view->setVar("_email", $mail->_email);
		$this->view->setVar("_department", $mail->_department);
		$this->view->setVar("_subject", $mail->_subject);
		$this->view->setVar("_notifyme", $mail->_notifyme);
		$this->view->setVar("_pickup", $mail->_pickup);
		$this->view->setVar("_date", $mail->_date);
		$this->view->setVar("_applicant", $mail->_applicant);

		$ok = false;
		try {
			if (MAILING_ENABLED) {
				$mail->_mailsent = (mail($mail->_mailto, $mail->_mailsubject, $this->view->getRender("contact", "mail"), $mail->_mailheaders)? 1: 0);
			} else {
				$mail->_mailsent = 1;
			}

			$ok = $mail->save();
		} catch (\Exception $e) {
			header("Warning: ".$e->getMessage());
		}

		if ($ok === false) {
			$this->response->setStatusCode(400, "Bad Request");
		} else if ($mail->_mailsent === 0) {
			$this->response->setStatusCode(503, "Service Unavailable");
		} else {
			$this->response->setStatusCode(200, "OK");
		}

		$this->response->setContent("{}");
		$this->response->setContentType("application/json");
		return $this->response;
	}

}
?>