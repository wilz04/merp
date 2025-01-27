<?php
/**
 * @alias SecurityUsers.class
 * @author WilC <wilz04@gmail.com>
 * @since 2023
 * @version 7.4.1
 */

namespace Phactory\Auth;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Resultset\Simple as Resultset;


class SecurityUsers extends Model {

	public int $_allow;
	
	public static function allow(string $controllerid, string $actionid, string $authinfo): bool {
		$array = explode(":", $authinfo);
		$query = sprintf("call security_Methods_enforce('%s', '%s', '%s', '%s');", $controllerid, $actionid, $array[0], md5(base64_decode($array[1])));
		$model = new SecurityUsers();
		$value = new Resultset(null, $model, $model->getReadConnection()->query($query));
		return $value[0]->_allow === 1;
	}
	
}
?>