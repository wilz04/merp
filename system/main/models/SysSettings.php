<?php
namespace Merp\Main\Models;

use Phalcon\Mvc\Model;

class SysSettings extends Model {

	private static string $mapWidth;
	private static string $mapHeight;
	private static string $mapSource;
	private static string $infoTo;
	private static string $infoSubject;
	private static string $infoSummary;
	private static string $reminderFrom;
	private static string $reminderSubject;
	private static string $reminderMessage;

	private static function init(): void {
		$fieldset = SysSettings::find();
		foreach ($fieldset as $field) {
			switch ($field->_key) {
				case "MAP_WIDTH":
					self::$mapWidth = $field->_value;
					break;
				case "MAP_HEIGHT":
					self::$mapHeight = $field->_value;
					break;
				case "MAP_SRC":
					self::$mapSource = $field->_value;
					break;
				case "INFO_TO":
					self::$infoTo = $field->_value;
					break;
				case "INFO_SUBJECT":
					self::$infoSubject = $field->_value;
					break;
				case "INFO_SUMMARY":
					self::$infoSummary = $field->_value;
					break;
				case "REMINDER_FROM":
					self::$reminderFrom = $field->_value;
					break;
				case "REMINDER_SUBJECT":
					self::$reminderSubject = $field->_value;
					break;
				case "REMINDER_MESSAGE":
					self::$reminderMessage = $field->_value;
					break;
			}
	 	}
	}

	public static function getMapWidth(): string {
		if (empty(self::$mapWidth)) {
			self::init();
		}

		return self::$mapWidth;
	}

	public static function getMapHeight(): string {
		if (empty(self::$mapHeight)) {
			self::init();
		}

		return self::$mapHeight;
	}

	public static function getMapSource(): string {
		if (empty(self::$mapSource)) {
			self::init();
		}

		return self::$mapSource;
	}

	public static function getInfoTo(): string {
		if (empty(self::$infoTo)) {
			self::init();
		}

		return self::$infoTo;
	}

	public static function getInfoSubject(): string {
		if (empty(self::$infoSubject)) {
			self::init();
		}

		return self::$infoSubject;
	}

	public static function getInfoSummary(): string {
		if (empty(self::$infoSummary)) {
			self::init();
		}

		return self::$infoSummary;
	}

	public static function getReminderFrom(): string {
		if (empty(self::$reminderFrom)) {
			self::init();
		}

		return self::$reminderFrom;
	}

	public static function getReminderSubject(): string {
		if (empty(self::$reminderSubject)) {
			self::init();
		}

		return self::$reminderSubject;
	}

	public static function getReminderMessage(): string {
		if (empty(self::$reminderMessage)) {
			self::init();
		}

		return self::$reminderMessage;
	}

}
?>