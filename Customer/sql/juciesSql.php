<?php
function getjucies(){
    global $conn;
 
        $sql = "SELECT * FROM jucies";

    $result = mysqli_query($conn, $sql);

    $jucies = [];

    while($row = mysqli_fetch_assoc($result)){
        $jucies[] = $row;
    }

    return $jucies;
}

?>