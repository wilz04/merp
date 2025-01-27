<?php
header("Content-Type: text/javascript");

// https://nuget.info/packages/Twitter.Bootstrap/2.0.3
include_once("lib/bootstrap/Scripts/bootstrap.min.js");
// https://getbootstrap.com/2.0.3/javascript.html
include_once("lib/bootstrap/Scripts/bootstrap-collapse.js");
// https://datatables.net/download/index#v1.13.4
include_once("lib/datatables/datatables.min.js");
// https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js
include_once("lib/datatables/dataTables.select.min.js");
// https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js
include_once("lib/datatables/dataTables.buttons.min.js");

include_once("merp.js");
?>

$(document).ready(merp.main.views.Dashboard.init);
