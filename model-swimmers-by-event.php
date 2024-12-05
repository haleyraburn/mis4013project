<?php
function selectSwimmersByEvent($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT swimmer_id, swimmer_name FROM swimmer");
        $stmt->bind_param("i", $sid);
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
