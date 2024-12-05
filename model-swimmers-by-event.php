<?php
function selectSwimmersByEvent($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.swimmer_id, swimmer_name, swimmer_age, swimmer_gender FROM swimmer s join event e on e.event_id = s.event_id WHERE s.swimmer_id=?");
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
