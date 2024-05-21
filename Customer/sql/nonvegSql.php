<?php

function getnonVegs(){
    global $conn;
 
        $sql = "SELECT * FROM nonVegs";

    $result = mysqli_query($conn, $sql);

    $nonVegs = [];

    while($row = mysqli_fetch_assoc($result)){
        $nonVegs[] = $row;
    }

    return $nonVegs;
}

?>