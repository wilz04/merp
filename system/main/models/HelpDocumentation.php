<?php
namespace Merp\Main\Models;

class HelpDocumentation {

	public static function find(): Array {
		$actions_all = "registrar, editar y eliminar";
		$actions_open_list = "";

		return [
			[
				"_module" => "Localizaci\\'on",
				"_controllers" => [
					["_id" => "geocantonsdetail", "_name" => "Detalle de cantones", "_pluralnoun" => "detalles de cantones", "_shortnoun" => "detalle", "_pluralshortnoun" => "detalles", "_unique" => "un cant\\'on y un a\\~no", "_word_a" => "un", "_word_A" => "Un", "_word_new" => "nuevo", "_word_the" => "el", "_word_pluralthe" => "el o los", "_word_selected" => "seleccionado", "_word_pluralselected" => "seleccionados", "_word_stored" => "registrado", "_ageclustered" => true, "_actions" => $actions_all], //+
					["_id" => "geodistrictsdetail", "_name" => "Detalle de distritos", "_pluralnoun" => "detalles de distritos", "_shortnoun" => "detalle", "_pluralshortnoun" => "detalles", "_unique" => "un distrito y un a\\~no", "_word_a" => "un", "_word_A" => "Un", "_word_new" => "nuevo", "_word_the" => "el", "_word_pluralthe" => "el o los", "_word_selected" => "seleccionado", "_word_pluralselected" => "seleccionados", "_word_stored" => "registrado", "_ageclustered" => true, "_actions" => $actions_all], //+
					// ["_id" => "geolocations", "_name" => "Localidades", "_actions" => ACTIONS_ALL],
					["_id" => "georegionals", "_name" => "Direcciones Regionales", "_pluralnoun" => "direcciones regionales", "_shortnoun" => "direcci\\'on", "_pluralshortnoun" => "direcciones", "_unique" => "una direcci\\'on regional", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => false, "_actions" => $actions_all], //+
					["_id" => "geoschools", "_name" => "Centros Educativos", "_pluralnoun" => "centros educativos", "_shortnoun" => "centro", "_pluralshortnoun" => "centros", "_unique" => "un centro y un pueblo", "_word_a" => "un", "_word_A" => "Un", "_word_new" => "nuevo", "_word_the" => "el", "_word_pluralthe" => "el o los", "_word_selected" => "seleccionado", "_word_pluralselected" => "seleccionados", "_word_stored" => "registrado", "_ageclustered" => true, "_actions" => $actions_all], //+
					["_id" => "geoenrollments", "_name" => "Matr\\'icula", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "un centro, una modalidad y un a\\~no", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_all], //+
					["_id" => "geoenrollmentmodes", "_name" => "Modalidades", "_pluralnoun" => "modalidades", "_shortnoun" => "modalidad", "_pluralshortnoun" => "modalidades", "_unique" => "un identificador y una descripci\\'on", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_all], //+
					["_id" => "geotypologies", "_name" => "Tipolog\\'ias", "_pluralnoun" => "tipolog\\'ias", "_shortnoun" => "tipolog\\'ia", "_pluralshortnoun" => "tipolog\\'ias", "_unique" => "una descripci\\'on", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_all] //+
				]
			], [
				"_module" => "N\\'omina de centros educativos",
				"_controllers" => [
					["_id" => "geoenrollments1", "_name" => "Preescolar independiente", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments2", "_name" => "I y II ciclos", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments3", "_name" => "Colegios", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments4", "_name" => "CNV MTS", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments5", "_name" => "C.E.E.", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments6", "_name" => "CAIPAD", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments7", "_name" => "Escuelas nocturnas", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments8", "_name" => "IPEC", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments9", "_name" => "CINDEA", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list], //+
					["_id" => "geoenrollments10", "_name" => "CONED", "_pluralnoun" => "matr\\'iculas", "_shortnoun" => "matr\\'icula", "_pluralshortnoun" => "matr\\'iculas", "_unique" => "", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => true, "_actions" => $actions_open_list] //+
				]
			], [
				"_module" => "Cat\\'alogo",
				"_controllers" => [
					["_id" => "catalogcategories", "_name" => "Categor\\'ias", "_pluralnoun" => "categor\\'ias", "_shortnoun" => "categor\\'ia", "_pluralshortnoun" => "categor\\'ias", "_unique" => "un cant\\'on y un a\\~no", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => false, "_actions" => $actions_all], //+
					["_id" => "catalogproducts", "_name" => "Productos", "_pluralnoun" => "productos", "_shortnoun" => "producto", "_pluralshortnoun" => "productos", "_unique" => "un cant\\'on y un a\\~no", "_word_a" => "un", "_word_A" => "Un", "_word_new" => "nuevo", "_word_the" => "el", "_word_pluralthe" => "el o los", "_word_selected" => "seleccionado", "_word_pluralselected" => "seleccionados", "_word_stored" => "registrado", "_ageclustered" => false, "_actions" => $actions_all] //+
				]
			], [
				"_module" => "Mensajer\\'ia",
				"_controllers" => [
					["_id" => "inforequests", "_name" => "Solicitudes", "_pluralnoun" => "solicitudes", "_shortnoun" => "solicitud", "_pluralshortnoun" => "solicitudes", "_unique" => "un cant\\'on y un a\\~no", "_word_a" => "una", "_word_A" => "Una", "_word_new" => "nueva", "_word_the" => "la", "_word_pluralthe" => "la o las", "_word_selected" => "seleccionada", "_word_pluralselected" => "seleccionadas", "_word_stored" => "registrada", "_ageclustered" => false, "_actions" => "adjuntar el acuse de recibido"] //+
				]
			]
		];
	}

}
?>