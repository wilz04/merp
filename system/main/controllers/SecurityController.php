<?php
namespace Merp\Main\Controllers;

use Merp\Main\Models\ReportingMenu as Menu;
use Merp\Main\Models\SecurityUsers as User;
use Merp\Main\Models\SysSettings as Settings;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Controller;

class SecurityController extends Controller {

	private Request $request;
	private Response $response;

	public function initialize() {
		// Create a request and response instance
		$this->request = new Request();
		$this->response = new Response();
	}

	public function authenticateAction(): Response {
		// $this->view->setVar("title", PUBLIC_TITLE);
		// $this->view->setVar("e", $_GET["e"]?: "200");
		$this->response->setContent($this->view->getRender("security", "authenticate"));
		return $this->response;
	}

	public function getMenubar(string $uid, string $tok): string {
		$ul = "<ul%s>%s</ul>\n";
		$li = "<li>%s</li>\n";
		$a = "<a href=\"%s\" onclick=\"%s\" target=\"_blank\">%s</a>\n";
		$hoaction = "return merp.main.views.Menu.onHomeClick();";
		$miaction = "return merp.main.views.Menu.onItemClick(this, {id: '_%s'});";
		$noaction = "return false;";
		
		$content = sprintf($li, sprintf($a, "#", $hoaction, PUBLIC_HOMELINK_LABEL));
		$dataset = Menu::findAndSort();
		foreach ($dataset as $container => $menu) {
			$items = "";
			foreach ($menu as $item) {
				$items.= sprintf($li, sprintf($a, $item->_href, sprintf($miaction, str_replace("/", "_", $item->_href)), $item->_label));
			}

			$content.= sprintf($li, sprintf($a, "#", $noaction, $container).sprintf($ul, "", $items));
		}

		$content.= sprintf($li, sprintf($a, PUBLIC_HELPLINK_URL, "", PUBLIC_HELPLINK_LABEL));
		return sprintf($ul, " data-uid=\"".$uid."\" data-tok=\"".$tok."\"", $content);
	}

	public function autorizationAction(): Response {
		$this->view->disable();
		$content = "";

		$token = base64_encode($this->request->getPost("_password"));
		$user = User::findFirst([
			"conditions" => "_email = :_email: and _password = :_password: and _status = :_status:",
			"bind" => [
				"_email" => $this->request->getPost("_email"),
				"_password" => md5($this->request->getPost("_password")),
				"_status" => 1
			]
		]);

		if ($user !== NULL) {
			// OK
			// header("Location: dashboard");
			// return;
			$this->response->setStatusCode(200, "OK");
			$content = $this->getMenubar($user->_id, $token);
		} else {
			// ERROR
			// header("Location: ".PUBLIC_PATH."/?e=401");
			$this->response->setStatusCode(401, "Unauthorized");
			$content = "<!--  -->";
		}
		
		// Set the content of the response
		$this->response->setContent($content);

		// Return the response
		return $this->response;
	}

	public function remindAction(): Response {
		$this->view->disable();

		$email = $this->request->getPost("_email");
		$user = User::findFirst([
			"conditions" => "_email = :_email: and _status = :_status:",
			"bind" => [
				"_email" => $email,
				"_status" => 1
			]
		]);

		$password = dechex(rand(0, REMINDER_PASSWORD_MAX));
		$user->_password = md5($password);

		$ok = false;
		try {
			$headers = sprintf("MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\nFrom: %s\r\nX-Mailer: PHP/%s", Settings::getReminderFrom(), phpversion());
			$message = sprintf(Settings::getReminderMessage(), $user->_1stname, $password);
			if (MAILING_ENABLED) {
				$ok = mail($email, Settings::getReminderSubject(), $message, $headers);
			} else {
				$ok = true;
			}

			if ($ok) {
				$ok = $user->save();
			}
		} catch (\Exception $e) {
			header("Warning: ".$e->getMessage());
		}

		if ($ok === false) {
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