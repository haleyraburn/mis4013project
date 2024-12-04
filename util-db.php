<?php
function get_db_connection(){
    $conn = new mysqli('138.197.17.168', 'misoucr3_projuser', 'Bn?V)_jF~3p]', 'misoucr3_mis4013project');
    
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
