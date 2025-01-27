<?php
namespace Merp\Security\Models;

use Phalcon\Mvc\Model;

class SecurityUsers extends Model {

	public static function getFieldset(): Array {
		return [["label" => "Identificador", "name" => "_id", "type" => "number"], ["label" => "Nombre", "name" => "_1stname", "type" => "text"], ["label" => "Segundo nombre", "name" => "_2ndname", "type" => "text"], ["label" => "Apellido", "name" => "_3rdname", "type" => "text"], ["label" => "Segundo apellido", "name" => "_4thname", "type" => "text"], ["label" => "e-Mail", "name" => "_email", "type" => "text"], ["label" => "Tel&eacute;fono", "name" => "_phone", "type" => "number"], ["label" => "Foto", "name" => "_photo", "type" => "text"]];
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