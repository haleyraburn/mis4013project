<?php
function selectSwimmersByMeet($swid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.swimmer_id, swimmer_name, swimmer_age, swimmer_gender FROM swimmer s join meet m on m.meet_id = s.meet_id WHERE s.meet_id=?");
        $stmt->bind_param("i", $swid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectSwimmerForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT swimmer_id, swimmer_name FROM swimmer ORDER BY swimmer_name");
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
