<?php
require_once("util-db.php");
require_once("model-swimmers-with-meets.php");

$pageTitle = "Swimmers @ Meets";
include "view-header.php";
$swimmers = selectSwimmersWithMeets();
include "view-swimmers-with-meets.php";
include "view-footer.php";
?>
