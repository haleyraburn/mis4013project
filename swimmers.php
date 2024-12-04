<?php
require_once("util-db.php");
require_once("model-swimmers.php");

$pageTitle = "Roster";
include "view-header.php";
$swimmers = selectSwimmers();
include "view-swimmers.php";
include "view-footer.php";
?>
