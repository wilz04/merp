<?php
namespace Merp\Geo\Models;

use Phalcon\Mvc\Model;

class GeoCantonsdetailList extends Model {

	public static function getFieldset(): Array {
		return [["label" => "Identificador", "name" => "_id", "type" => "number"], ["label" => "C&oacute;digo", "name" => "_cantonid", "type" => "number"], ["label" => "Cant&oacute;n", "name" => "_cantonname", "type" => "text"], ["label" => "&Aacute;rea (km&#178;)", "name" => "_cantonarea", "type" => "text"], ["label" => "IDS", "name" => "_ids", "type" => "text"], ["label" => "A&ntilde;o", "name" => "_age", "type" => "number"]];
	}


	public static function getName(): string {
		$key = end(explode('\\', self::class));
		$val = str_replace("List\\", "", $key.'\\');
		if ($val == $key.'\\') {
			return $key;
		}

		return $val;
	}

	public static function getHeadset(): Array {
		$value = [];
		foreach (self::getFieldset() as $field) {
			$value[$field["name"]] = $field["label"];
		}

		return $value;
	}

	public static function getRowFormat(): string {
		$format = "{ \"data\": \"%s\" }";
		$value = [];
		foreach (self::getFieldset() as $field) {
			$value[] = sprintf($format, $field["name"]);
		}

		return sprintf("[%s]", implode(", ", $value));
	}

	public static function getSerializedFieldset(): string {
		$format = "{ \"label\": \"%s:\", \"name\": \"%s\", \"type\": \"%s\" }";
		$value = [];
		foreach (self::getFieldset() as $field) {
			$value[] = sprintf($format, $field["label"], $field["name"], $field["type"]);
		}

		return sprintf("[%s]", implode(", ", $value));
	}

}
?>