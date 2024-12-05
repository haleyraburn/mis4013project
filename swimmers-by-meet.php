require_once("util-db.php");
require_once("model-swimmers-by-meet.php");

$pageTitle = "Swimmers competing in this Meet";
include "view-header.php";
$swimmers = selectSwimmersbyMeet($_GET['sid']);
include "view-swimmers-by-meet.php";
include "view-footer.php";
?>
