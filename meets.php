<?php
require_once("util-db.php");
require_once("model-meets.php");

$pageTitle = "24-25 Meet Schedule";
include "view-header.php";
$swimmers = selectMeets();
include "view-meets.php";
include "view-footer.php";
?>
