<?php
namespace Merp\Main\Controllers;

use Merp\Main\Models\CatalogCategories as Category;
use Merp\Main\Models\CatalogProducts as Product;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Controller;

class CatalogueController extends Controller {

	private Request $request;
	private Response $response;

	public function initialize() {
		// Create a request and response instance
		$this->request = new Request();
		$this->response = new Response();
	}

	public function getMenu(Object $categories, Object $products, ?Object $item): string {
		$ul = "<ul>%s</ul>\n";
		$li = "<li>%s</li>\n";
		$span = "<span>%s</span>\n";
		$a = "<a href=\"%s\" target=\"_blank\">%s</a>\n";
		
		$title = "";
		if ($item != NULL) {
			$title = sprintf($span, $item->_title);
		}
		
		$items = "";
		foreach ($products as $data) {
			if ($data->_category == $item->_id) {
				$items.= sprintf($li, sprintf($a, $data->_href, $data->_title));
			}
		}

		foreach ($categories as $data) {
			if ($data->_category == $item->_id) {
				$items.= $this->getMenu($categories, $products, $data);
			}
		}

		if (!empty($items)) {
			$items = sprintf($ul, $items);
		}

		return $title.$items;
	}

	public function listAction(): Response {
		$this->view->disable();
		$categories = Category::find();
		$products = Product::find();

		$main = Category::find(["conditions" => "_category is null"]);
		$content = "";
		foreach ($main as $data) {
			$content.= $this->getMenu($categories, $products, $data);
		}

		$this->response->setContent($content);
		return $this->response;
	}

}
?>