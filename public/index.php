<?php
use Phalcon\Db\Adapter\Pdo\Mysql as MysqlConnection;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Application\Exception;
use Phalcon\Mvc\Model\Manager as ModelsManager;
use Phalcon\Mvc\Model\Metadata\Memory;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Mvc\View\Engine\Volt;

define("PUBLIC_PATH", "/merp");
define("PUBLIC_TITLE", "Merp");
define("PUBLIC_HOMELINK_LABEL", "Inicio");
define("PUBLIC_HELPLINK_LABEL", "Ayuda");
define("PUBLIC_HELPLINK_URL", "https://ishtar-tech.org/doc/app_slices.pdf");

define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_SCHEME", "merp");

define("MAILING_ENABLED", false);
define("REMINDER_PASSWORD_MAX", 4294967295);


$injector = new FactoryDefault();

$injector->set("db", function () {
	return new MysqlConnection([
		"host" => DB_HOST,
		"username" => DB_USERNAME,
		"password" => DB_PASSWORD,
		"dbname" => DB_SCHEME,
	]);
});

// Set a models manager
$injector->set("modelsManager", new ModelsManager());

// Use the memory meta-data adapter or other
$injector->set("modelsMetadata", new Memory());

/* Begin of Phactory-generated functions section */
function setGeoAction(Router $router): void {
	$router->add("/geolocationslist/open", [
		"module" => "geo",
		"controller" => "GeoLocationsList",
		"action" => "open",
	]);

	$router->add("/geolocationslist/list", [
		"module" => "geo",
		"controller" => "GeoLocationsList",
		"action" => "list",
	]);

	$router->add("/geolocationslist/new", [
		"module" => "geo",
		"controller" => "GeoLocationsList",
		"action" => "new",
	]);

	$router->add("/geolocationslist/get", [
		"module" => "geo",
		"controller" => "GeoLocationsList",
		"action" => "get",
	]);

	$router->add("/geolocationslist/put", [
		"module" => "geo",
		"controller" => "GeoLocationsList",
		"action" => "put",
	]);

	$router->add("/geolocationslist/rem", [
		"module" => "geo",
		"controller" => "GeoLocationsList",
		"action" => "rem",
	]);

	$router->add("/geodependences/open", [
		"module" => "geo",
		"controller" => "GeoDependences",
		"action" => "open",
	]);

	$router->add("/geodependences/list", [
		"module" => "geo",
		"controller" => "GeoDependences",
		"action" => "list",
	]);

	$router->add("/geodependences/new", [
		"module" => "geo",
		"controller" => "GeoDependences",
		"action" => "new",
	]);

	$router->add("/geodependences/get", [
		"module" => "geo",
		"controller" => "GeoDependences",
		"action" => "get",
	]);

	$router->add("/geodependences/put", [
		"module" => "geo",
		"controller" => "GeoDependences",
		"action" => "put",
	]);

	$router->add("/geodependences/rem", [
		"module" => "geo",
		"controller" => "GeoDependences",
		"action" => "rem",
	]);

	$router->add("/geoenrollmentmodes/open", [
		"module" => "geo",
		"controller" => "GeoEnrollmentmodes",
		"action" => "open",
	]);

	$router->add("/geoenrollmentmodes/list", [
		"module" => "geo",
		"controller" => "GeoEnrollmentmodes",
		"action" => "list",
	]);

	$router->add("/geoenrollmentmodes/new", [
		"module" => "geo",
		"controller" => "GeoEnrollmentmodes",
		"action" => "new",
	]);

	$router->add("/geoenrollmentmodes/get", [
		"module" => "geo",
		"controller" => "GeoEnrollmentmodes",
		"action" => "get",
	]);

	$router->add("/geoenrollmentmodes/put", [
		"module" => "geo",
		"controller" => "GeoEnrollmentmodes",
		"action" => "put",
	]);

	$router->add("/geoenrollmentmodes/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollmentmodes",
		"action" => "rem",
	]);

	$router->add("/geotypologies/open", [
		"module" => "geo",
		"controller" => "GeoTypologies",
		"action" => "open",
	]);

	$router->add("/geotypologies/list", [
		"module" => "geo",
		"controller" => "GeoTypologies",
		"action" => "list",
	]);

	$router->add("/geotypologies/new", [
		"module" => "geo",
		"controller" => "GeoTypologies",
		"action" => "new",
	]);

	$router->add("/geotypologies/get", [
		"module" => "geo",
		"controller" => "GeoTypologies",
		"action" => "get",
	]);

	$router->add("/geotypologies/put", [
		"module" => "geo",
		"controller" => "GeoTypologies",
		"action" => "put",
	]);

	$router->add("/geotypologies/rem", [
		"module" => "geo",
		"controller" => "GeoTypologies",
		"action" => "rem",
	]);

	$router->add("/geoschoolsenum/open", [
		"module" => "geo",
		"controller" => "GeoSchoolsEnum",
		"action" => "open",
	]);

	$router->add("/geoschoolsenum/list", [
		"module" => "geo",
		"controller" => "GeoSchoolsEnum",
		"action" => "list",
	]);

	$router->add("/geoschoolsenum/new", [
		"module" => "geo",
		"controller" => "GeoSchoolsEnum",
		"action" => "new",
	]);

	$router->add("/geoschoolsenum/get", [
		"module" => "geo",
		"controller" => "GeoSchoolsEnum",
		"action" => "get",
	]);

	$router->add("/geoschoolsenum/put", [
		"module" => "geo",
		"controller" => "GeoSchoolsEnum",
		"action" => "put",
	]);

	$router->add("/geoschoolsenum/rem", [
		"module" => "geo",
		"controller" => "GeoSchoolsEnum",
		"action" => "rem",
	]);

	$router->add("/geocantonsenum/open", [
		"module" => "geo",
		"controller" => "GeoCantonsEnum",
		"action" => "open",
	]);

	$router->add("/geocantonsenum/list", [
		"module" => "geo",
		"controller" => "GeoCantonsEnum",
		"action" => "list",
	]);

	$router->add("/geocantonsenum/new", [
		"module" => "geo",
		"controller" => "GeoCantonsEnum",
		"action" => "new",
	]);

	$router->add("/geocantonsenum/get", [
		"module" => "geo",
		"controller" => "GeoCantonsEnum",
		"action" => "get",
	]);

	$router->add("/geocantonsenum/put", [
		"module" => "geo",
		"controller" => "GeoCantonsEnum",
		"action" => "put",
	]);

	$router->add("/geocantonsenum/rem", [
		"module" => "geo",
		"controller" => "GeoCantonsEnum",
		"action" => "rem",
	]);

	$router->add("/geodistrictsenum/open", [
		"module" => "geo",
		"controller" => "GeoDistrictsEnum",
		"action" => "open",
	]);

	$router->add("/geodistrictsenum/list", [
		"module" => "geo",
		"controller" => "GeoDistrictsEnum",
		"action" => "list",
	]);

	$router->add("/geodistrictsenum/new", [
		"module" => "geo",
		"controller" => "GeoDistrictsEnum",
		"action" => "new",
	]);

	$router->add("/geodistrictsenum/get", [
		"module" => "geo",
		"controller" => "GeoDistrictsEnum",
		"action" => "get",
	]);

	$router->add("/geodistrictsenum/put", [
		"module" => "geo",
		"controller" => "GeoDistrictsEnum",
		"action" => "put",
	]);

	$router->add("/geodistrictsenum/rem", [
		"module" => "geo",
		"controller" => "GeoDistrictsEnum",
		"action" => "rem",
	]);

	$router->add("/geocantonsdetail/open", [
		"module" => "geo",
		"controller" => "GeoCantonsdetail",
		"action" => "open",
	]);

	$router->add("/geocantonsdetail/list", [
		"module" => "geo",
		"controller" => "GeoCantonsdetail",
		"action" => "list",
	]);

	$router->add("/geocantonsdetail/new", [
		"module" => "geo",
		"controller" => "GeoCantonsdetail",
		"action" => "new",
	]);

	$router->add("/geocantonsdetail/get", [
		"module" => "geo",
		"controller" => "GeoCantonsdetail",
		"action" => "get",
	]);

	$router->add("/geocantonsdetail/put", [
		"module" => "geo",
		"controller" => "GeoCantonsdetail",
		"action" => "put",
	]);

	$router->add("/geocantonsdetail/rem", [
		"module" => "geo",
		"controller" => "GeoCantonsdetail",
		"action" => "rem",
	]);

	$router->add("/geodistrictsdetail/open", [
		"module" => "geo",
		"controller" => "GeoDistrictsdetail",
		"action" => "open",
	]);

	$router->add("/geodistrictsdetail/list", [
		"module" => "geo",
		"controller" => "GeoDistrictsdetail",
		"action" => "list",
	]);

	$router->add("/geodistrictsdetail/new", [
		"module" => "geo",
		"controller" => "GeoDistrictsdetail",
		"action" => "new",
	]);

	$router->add("/geodistrictsdetail/get", [
		"module" => "geo",
		"controller" => "GeoDistrictsdetail",
		"action" => "get",
	]);

	$router->add("/geodistrictsdetail/put", [
		"module" => "geo",
		"controller" => "GeoDistrictsdetail",
		"action" => "put",
	]);

	$router->add("/geodistrictsdetail/rem", [
		"module" => "geo",
		"controller" => "GeoDistrictsdetail",
		"action" => "rem",
	]);

	$router->add("/georegionals/open", [
		"module" => "geo",
		"controller" => "GeoRegionals",
		"action" => "open",
	]);

	$router->add("/georegionals/list", [
		"module" => "geo",
		"controller" => "GeoRegionals",
		"action" => "list",
	]);

	$router->add("/georegionals/new", [
		"module" => "geo",
		"controller" => "GeoRegionals",
		"action" => "new",
	]);

	$router->add("/georegionals/get", [
		"module" => "geo",
		"controller" => "GeoRegionals",
		"action" => "get",
	]);

	$router->add("/georegionals/put", [
		"module" => "geo",
		"controller" => "GeoRegionals",
		"action" => "put",
	]);

	$router->add("/georegionals/rem", [
		"module" => "geo",
		"controller" => "GeoRegionals",
		"action" => "rem",
	]);

	$router->add("/geoschools/open", [
		"module" => "geo",
		"controller" => "GeoSchools",
		"action" => "open",
	]);

	$router->add("/geoschools/list", [
		"module" => "geo",
		"controller" => "GeoSchools",
		"action" => "list",
	]);

	$router->add("/geoschools/new", [
		"module" => "geo",
		"controller" => "GeoSchools",
		"action" => "new",
	]);

	$router->add("/geoschools/get", [
		"module" => "geo",
		"controller" => "GeoSchools",
		"action" => "get",
	]);

	$router->add("/geoschools/put", [
		"module" => "geo",
		"controller" => "GeoSchools",
		"action" => "put",
	]);

	$router->add("/geoschools/rem", [
		"module" => "geo",
		"controller" => "GeoSchools",
		"action" => "rem",
	]);

	$router->add("/geoenrollments/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments",
		"action" => "open",
	]);

	$router->add("/geoenrollments/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments",
		"action" => "list",
	]);

	$router->add("/geoenrollments/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments",
		"action" => "new",
	]);

	$router->add("/geoenrollments/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments",
		"action" => "get",
	]);

	$router->add("/geoenrollments/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments",
		"action" => "put",
	]);

	$router->add("/geoenrollments/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments",
		"action" => "rem",
	]);

	$router->add("/geoenrollments1/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments1",
		"action" => "open",
	]);

	$router->add("/geoenrollments1/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments1",
		"action" => "list",
	]);

	$router->add("/geoenrollments1/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments1",
		"action" => "new",
	]);

	$router->add("/geoenrollments1/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments1",
		"action" => "get",
	]);

	$router->add("/geoenrollments1/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments1",
		"action" => "put",
	]);

	$router->add("/geoenrollments1/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments1",
		"action" => "rem",
	]);

	$router->add("/geoenrollments2/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments2",
		"action" => "open",
	]);

	$router->add("/geoenrollments2/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments2",
		"action" => "list",
	]);

	$router->add("/geoenrollments2/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments2",
		"action" => "new",
	]);

	$router->add("/geoenrollments2/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments2",
		"action" => "get",
	]);

	$router->add("/geoenrollments2/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments2",
		"action" => "put",
	]);

	$router->add("/geoenrollments2/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments2",
		"action" => "rem",
	]);

	$router->add("/geoenrollments3/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments3",
		"action" => "open",
	]);

	$router->add("/geoenrollments3/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments3",
		"action" => "list",
	]);

	$router->add("/geoenrollments3/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments3",
		"action" => "new",
	]);

	$router->add("/geoenrollments3/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments3",
		"action" => "get",
	]);

	$router->add("/geoenrollments3/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments3",
		"action" => "put",
	]);

	$router->add("/geoenrollments3/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments3",
		"action" => "rem",
	]);

	$router->add("/geoenrollments4/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments4",
		"action" => "open",
	]);

	$router->add("/geoenrollments4/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments4",
		"action" => "list",
	]);

	$router->add("/geoenrollments4/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments4",
		"action" => "new",
	]);

	$router->add("/geoenrollments4/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments4",
		"action" => "get",
	]);

	$router->add("/geoenrollments4/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments4",
		"action" => "put",
	]);

	$router->add("/geoenrollments4/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments4",
		"action" => "rem",
	]);

	$router->add("/geoenrollments5/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments5",
		"action" => "open",
	]);

	$router->add("/geoenrollments5/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments5",
		"action" => "list",
	]);

	$router->add("/geoenrollments5/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments5",
		"action" => "new",
	]);

	$router->add("/geoenrollments5/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments5",
		"action" => "get",
	]);

	$router->add("/geoenrollments5/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments5",
		"action" => "put",
	]);

	$router->add("/geoenrollments5/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments5",
		"action" => "rem",
	]);

	$router->add("/geoenrollments6/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments6",
		"action" => "open",
	]);

	$router->add("/geoenrollments6/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments6",
		"action" => "list",
	]);

	$router->add("/geoenrollments6/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments6",
		"action" => "new",
	]);

	$router->add("/geoenrollments6/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments6",
		"action" => "get",
	]);

	$router->add("/geoenrollments6/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments6",
		"action" => "put",
	]);

	$router->add("/geoenrollments6/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments6",
		"action" => "rem",
	]);

	$router->add("/geoenrollments7/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments7",
		"action" => "open",
	]);

	$router->add("/geoenrollments7/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments7",
		"action" => "list",
	]);

	$router->add("/geoenrollments7/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments7",
		"action" => "new",
	]);

	$router->add("/geoenrollments7/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments7",
		"action" => "get",
	]);

	$router->add("/geoenrollments7/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments7",
		"action" => "put",
	]);

	$router->add("/geoenrollments7/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments7",
		"action" => "rem",
	]);

	$router->add("/geoenrollments8/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments8",
		"action" => "open",
	]);

	$router->add("/geoenrollments8/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments8",
		"action" => "list",
	]);

	$router->add("/geoenrollments8/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments8",
		"action" => "new",
	]);

	$router->add("/geoenrollments8/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments8",
		"action" => "get",
	]);

	$router->add("/geoenrollments8/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments8",
		"action" => "put",
	]);

	$router->add("/geoenrollments8/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments8",
		"action" => "rem",
	]);

	$router->add("/geoenrollments9/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments9",
		"action" => "open",
	]);

	$router->add("/geoenrollments9/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments9",
		"action" => "list",
	]);

	$router->add("/geoenrollments9/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments9",
		"action" => "new",
	]);

	$router->add("/geoenrollments9/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments9",
		"action" => "get",
	]);

	$router->add("/geoenrollments9/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments9",
		"action" => "put",
	]);

	$router->add("/geoenrollments9/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments9",
		"action" => "rem",
	]);

	$router->add("/geoenrollments10/open", [
		"module" => "geo",
		"controller" => "GeoEnrollments10",
		"action" => "open",
	]);

	$router->add("/geoenrollments10/list", [
		"module" => "geo",
		"controller" => "GeoEnrollments10",
		"action" => "list",
	]);

	$router->add("/geoenrollments10/new", [
		"module" => "geo",
		"controller" => "GeoEnrollments10",
		"action" => "new",
	]);

	$router->add("/geoenrollments10/get", [
		"module" => "geo",
		"controller" => "GeoEnrollments10",
		"action" => "get",
	]);

	$router->add("/geoenrollments10/put", [
		"module" => "geo",
		"controller" => "GeoEnrollments10",
		"action" => "put",
	]);

	$router->add("/geoenrollments10/rem", [
		"module" => "geo",
		"controller" => "GeoEnrollments10",
		"action" => "rem",
	]);
}

function getGeoRegister(): array {
	return [
		"className" => \Merp\Geo\Geo::class,
		"path" => "../system/geo/Geo.php",
	];
}

function setCatalogAction(Router $router): void {
	$router->add("/catalogcategories/open", [
		"module" => "catalog",
		"controller" => "CatalogCategories",
		"action" => "open",
	]);

	$router->add("/catalogcategories/list", [
		"module" => "catalog",
		"controller" => "CatalogCategories",
		"action" => "list",
	]);

	$router->add("/catalogcategories/new", [
		"module" => "catalog",
		"controller" => "CatalogCategories",
		"action" => "new",
	]);

	$router->add("/catalogcategories/get", [
		"module" => "catalog",
		"controller" => "CatalogCategories",
		"action" => "get",
	]);

	$router->add("/catalogcategories/put", [
		"module" => "catalog",
		"controller" => "CatalogCategories",
		"action" => "put",
	]);

	$router->add("/catalogcategories/rem", [
		"module" => "catalog",
		"controller" => "CatalogCategories",
		"action" => "rem",
	]);

	$router->add("/catalogproducts/open", [
		"module" => "catalog",
		"controller" => "CatalogProducts",
		"action" => "open",
	]);

	$router->add("/catalogproducts/list", [
		"module" => "catalog",
		"controller" => "CatalogProducts",
		"action" => "list",
	]);

	$router->add("/catalogproducts/new", [
		"module" => "catalog",
		"controller" => "CatalogProducts",
		"action" => "new",
	]);

	$router->add("/catalogproducts/get", [
		"module" => "catalog",
		"controller" => "CatalogProducts",
		"action" => "get",
	]);

	$router->add("/catalogproducts/put", [
		"module" => "catalog",
		"controller" => "CatalogProducts",
		"action" => "put",
	]);

	$router->add("/catalogproducts/rem", [
		"module" => "catalog",
		"controller" => "CatalogProducts",
		"action" => "rem",
	]);
}

function getCatalogRegister(): array {
	return [
		"className" => \Merp\Catalog\Catalog::class,
		"path" => "../system/catalog/Catalog.php",
	];
}

function setMatrixAction(Router $router): void {
	$router->add("/matrixindicators/open", [
		"module" => "matrix",
		"controller" => "MatrixIndicators",
		"action" => "open",
	]);

	$router->add("/matrixindicators/list", [
		"module" => "matrix",
		"controller" => "MatrixIndicators",
		"action" => "list",
	]);

	$router->add("/matrixindicators/new", [
		"module" => "matrix",
		"controller" => "MatrixIndicators",
		"action" => "new",
	]);

	$router->add("/matrixindicators/get", [
		"module" => "matrix",
		"controller" => "MatrixIndicators",
		"action" => "get",
	]);

	$router->add("/matrixindicators/put", [
		"module" => "matrix",
		"controller" => "MatrixIndicators",
		"action" => "put",
	]);

	$router->add("/matrixindicators/rem", [
		"module" => "matrix",
		"controller" => "MatrixIndicators",
		"action" => "rem",
	]);
}

function getMatrixRegister(): array {
	return [
		"className" => \Merp\Matrix\Matrix::class,
		"path" => "../system/matrix/Matrix.php",
	];
}

function setInfoAction(Router $router): void {
	$router->add("/inforequests/open", [
		"module" => "info",
		"controller" => "InfoRequests",
		"action" => "open",
	]);

	$router->add("/inforequests/list", [
		"module" => "info",
		"controller" => "InfoRequests",
		"action" => "list",
	]);

	$router->add("/inforequests/new", [
		"module" => "info",
		"controller" => "InfoRequests",
		"action" => "new",
	]);

	$router->add("/inforequests/get", [
		"module" => "info",
		"controller" => "InfoRequests",
		"action" => "get",
	]);

	$router->add("/inforequests/put", [
		"module" => "info",
		"controller" => "InfoRequests",
		"action" => "put",
	]);

	$router->add("/inforequests/rem", [
		"module" => "info",
		"controller" => "InfoRequests",
		"action" => "rem",
	]);
}

function getInfoRegister(): array {
	return [
		"className" => \Merp\Info\Info::class,
		"path" => "../system/info/Info.php",
	];
}

function setSecurityAction(Router $router): void {
	$router->add("/securityprofiles/open", [
		"module" => "security",
		"controller" => "SecurityProfiles",
		"action" => "open",
	]);

	$router->add("/securityprofiles/list", [
		"module" => "security",
		"controller" => "SecurityProfiles",
		"action" => "list",
	]);

	$router->add("/securityprofiles/new", [
		"module" => "security",
		"controller" => "SecurityProfiles",
		"action" => "new",
	]);

	$router->add("/securityprofiles/get", [
		"module" => "security",
		"controller" => "SecurityProfiles",
		"action" => "get",
	]);

	$router->add("/securityprofiles/put", [
		"module" => "security",
		"controller" => "SecurityProfiles",
		"action" => "put",
	]);

	$router->add("/securityprofiles/rem", [
		"module" => "security",
		"controller" => "SecurityProfiles",
		"action" => "rem",
	]);

	$router->add("/securityusers/open", [
		"module" => "security",
		"controller" => "SecurityUsers",
		"action" => "open",
	]);

	$router->add("/securityusers/list", [
		"module" => "security",
		"controller" => "SecurityUsers",
		"action" => "list",
	]);

	$router->add("/securityusers/new", [
		"module" => "security",
		"controller" => "SecurityUsers",
		"action" => "new",
	]);

	$router->add("/securityusers/get", [
		"module" => "security",
		"controller" => "SecurityUsers",
		"action" => "get",
	]);

	$router->add("/securityusers/put", [
		"module" => "security",
		"controller" => "SecurityUsers",
		"action" => "put",
	]);

	$router->add("/securityusers/rem", [
		"module" => "security",
		"controller" => "SecurityUsers",
		"action" => "rem",
	]);
}

function getSecurityRegister(): array {
	return [
		"className" => \Merp\Security\Security::class,
		"path" => "../system/security/Security.php",
	];
}

function setSysAction(Router $router): void {
	$router->add("/syssettings/open", [
		"module" => "sys",
		"controller" => "SysSettings",
		"action" => "open",
	]);

	$router->add("/syssettings/list", [
		"module" => "sys",
		"controller" => "SysSettings",
		"action" => "list",
	]);

	$router->add("/syssettings/new", [
		"module" => "sys",
		"controller" => "SysSettings",
		"action" => "new",
	]);

	$router->add("/syssettings/get", [
		"module" => "sys",
		"controller" => "SysSettings",
		"action" => "get",
	]);

	$router->add("/syssettings/put", [
		"module" => "sys",
		"controller" => "SysSettings",
		"action" => "put",
	]);

	$router->add("/syssettings/rem", [
		"module" => "sys",
		"controller" => "SysSettings",
		"action" => "rem",
	]);
}

function getSysRegister(): array {
	return [
		"className" => \Merp\Sys\Sys::class,
		"path" => "../system/sys/Sys.php",
	];
}
/* End of Phactory-generated functions section */

function setCustomAction(Router $router): void {
	$router->add("/dashboard", [
		"module"     => "main",
		"controller" => "dashboard",
		"action"     => "layout",
	]);

	$router->add("/catalogue", [
		"module"     => "main",
		"controller" => "catalogue",
		"action"     => "list",
	]);

	$router->add("/contact/form", [
		"module"     => "main",
		"controller" => "contact",
		"action"     => "form",
	]);

	$router->add("/contact/mail", [
		"module"     => "main",
		"controller" => "contact",
		"action"     => "mail",
	]);

	$router->add("/signin", [
		"module"     => "main",
		"controller" => "security",
		"action"     => "autorization",
	]);

	$router->add("/remind", [
		"module"     => "main",
		"controller" => "security",
		"action"     => "remind",
	]);

	$router->add("/signup/new", [
		"module"     => "main",
		"controller" => "signup",
		"action"     => "new",
	]);

	$router->add("/signup/put", [
		"module"     => "main",
		"controller" => "signup",
		"action"     => "put",
	]);

	$router->add("/", [
		"module"     => "main",
		"controller" => "security",
		"action"     => "authenticate",
	]);

	$router->add("/home", [
		"module"     => "main",
		"controller" => "dashboard",
		"action"     => "welcome",
	]);

	$router->add("/menu", [
		"module"     => "main",
		"controller" => "dashboard",
		"action"     => "menu",
	]);

	$router->add("/usermanual", [
		"module"     => "main",
		"controller" => "help",
		"action"     => "manual",
	]);
}

function getMainRegister(): array {
	return [
		"className" => \Merp\Main\Main::class,
		"path" => "../system/main/Main.php",
	];
}

$injector->set("router", function () {
	$router = new Router();
	$router->setDefaultModule("main");

	setCustomAction($router);
	setGeoAction($router);
	setCatalogAction($router);
	setMatrixAction($router);
	setInfoAction($router);
	setSecurityAction($router);
	setSysAction($router);

	return $router;
});

$injector->setShared(
	'voltService',
	function (ViewBaseInterface $view) {
		$volt = new Volt($view, $this);
		$volt->setOptions([
			'always'    => true,
			'extension' => '.php',
			'separator' => '_',
			'stat'      => true,
			'path'      => 'tmp/',
			'prefix'    => '',
		]);
		
		return $volt;
	}
);

$application = new Application($injector);

$application->registerModules([
	"main" => getMainRegister(),
	"geo" => getGeoRegister(),
	"catalog" => getCatalogRegister(),
	"matrix" => getMatrixRegister(),
	"info" => getInfoRegister(),
	"security" => getSecurityRegister(),
	"sys" => getSysRegister()
]);

try {
	$response = $application->handle(
		str_replace(PUBLIC_PATH, "", $_SERVER["REQUEST_URI"])
	);

	$response->send();
} catch (Exception $e) {
	http_response_code(500);
	header("Warning: ".$e->getMessage());
	die(PHP_EOL);
}
?>