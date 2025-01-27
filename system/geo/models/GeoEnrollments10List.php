<?php
namespace Merp\Geo\Models;

use Phalcon\Mvc\Model;

class GeoEnrollments10List extends Model {

	public static function getFieldset(): Array {
		return [["label" => "ID", "name" => "_id", "type" => "number"], ["label" => "Regional", "name" => "_regional", "type" => "text"], ["label" => "Circuito", "name" => "_circuit", "type" => "text"], ["label" => "C&oacute;digo", "name" => "_budgetcode", "type" => "text"], ["label" => "Instituci&oacute;n", "name" => "_name", "type" => "text"], ["label" => "Poblado", "name" => "_town", "type" => "text"], ["label" => "Dependencia", "name" => "_dependence", "type" => "text"], ["label" => "Zona", "name" => "_zone", "type" => "text"], ["label" => "Tel&eacute;fono", "name" => "_phone", "type" => "tel"], ["label" => "Matrícula", "name" => "_coned", "type" => "number"]];
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