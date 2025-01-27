<?php
namespace Merp\Main\Models;

use Phalcon\Mvc\Model;

class ReportingMenu extends Model {

	public static function findAndSort(): Array {
		$tree = [];
		$menu = ReportingMenu::find([
			"conditions" => "_action = :_action:",
			"bind" => [
				"_action" => 'open'
			]
		]);

		foreach ($menu as $item) {
			if (!isset($tree[$item->_container])) {
				$tree[$item->_container] = [];
			}

			$tree[$item->_container][] = $item;
		}

		return $tree;
	}

}
?>