<?php
namespace Merp\Info\Models;

use Phalcon\Mvc\Model;

class InfoRequests extends Model {

	public static function getFieldset(): Array {
		return [["label" => "Identificador", "name" => "_id", "type" => "number"], ["label" => "Fecha de recepci&oacute;n", "name" => "_recvdate", "type" => "date"], ["label" => "Unidad receptora", "name" => "_recvunit", "type" => "text"], ["label" => "Nombre del funcionario", "name" => "_recvreceptor", "type" => "text"], ["label" => "Notificado a", "name" => "_recvnotified", "type" => "text"]];
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