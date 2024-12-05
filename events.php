<?php
require_once("util-db.php");
require_once("model-events.php");

$pageTitle = "Event List";
include "view-header.php";
$events = selectEvents();
include "view-events.php";
include "view-footer.php";
?>
