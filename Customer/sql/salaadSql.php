<?php
function getsalaads(){
    global $conn;
 
        $sql = "SELECT * FROM salaads";

    $result = mysqli_query($conn, $sql);

    $salaads = [];

    while($row = mysqli_fetch_assoc($result)){
        $salaads[] = $row;
    }

    return $salaads;
}

?>