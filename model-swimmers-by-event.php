<?php
function selectSwimmersByEvent($sname) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT swimmer_name FROM swimmer");
        $stmt->bind_param("s", $sname);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
