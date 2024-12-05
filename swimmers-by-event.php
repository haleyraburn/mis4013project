<?php
require_once("util-db.php");
require_once("model-swimmers-by-event.php");

$pageTitle = "Swimmers in this Event";
include "view-header.php";
$swimmers = selectSwimmersbyEvent($_GET['sid']);
include "view-swimmers-by-event.php";
include "view-footer.php";
?>
