<?php
require_once("util-db.php");
require_once("model-swimmers.php");

$pageTitle = "Roster";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertSwimmer($_POST['sName'], $_POST['sAge'], $_POST['sGender'])) {
        echo '<div class="alert alert-success" role="alert">Swimmer added.</div>';
        } else {
        } echo '<div class="alert alert-danger" role="alert">Error adding swimmer.</div>';
        break;
    }
  }
$swimmers = selectSwimmers();
include "view-swimmers.php";
include "view-footer.php";
?>
