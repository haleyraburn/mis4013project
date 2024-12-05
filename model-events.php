<?php
function selectEvents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT event_id, event_name FROM event");
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
