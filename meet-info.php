<?php
require_once("util-db.php");
require_once("model-meet-info.php");

$pageTitle = "Meet Info";
include "view-header.php";
$meets = selectMeets();
include "view-meet-info.php";
include "view-footer.php";
?>
