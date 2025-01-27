<?php
namespace Merp\Info\Models;

use Phalcon\Mvc\Model;

class InfoRequestsList extends Model {

	public static function getFieldset(): Array {
		return [["label" => "Identificador", "name" => "_id", "type" => "number"], ["label" => "Identificaci&oacute;n del solicitante", "name" => "_applicant", "type" => "text"], ["label" => "Informaci&oacute;n de la solicitud", "name" => "_description", "type" => "text"], ["label" => "Informaci&oacute;n relevante", "name" => "_detail", "type" => "text"], ["label" => "Receptor", "name" => "_mailto", "type" => "text"], ["label" => "Enviado", "name" => "_mailsent", "type" => "text"], ["label" => "Acuse de recibido", "name" => "_recvackn", "type" => "text"]];
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