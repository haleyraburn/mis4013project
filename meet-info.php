<?php
$pageTitle = "Meet Info";
include "view-header.php";
$meets = selectMeets();
include "view-meet-info.php";
include "view-footer.php";
?>
