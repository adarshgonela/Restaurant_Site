<?php

function getnonVegStarters(){
    global $conn;
 
        $sql = "SELECT * FROM nonvegstarters";

    $result = mysqli_query($conn, $sql);

    $nonVegStarters = [];

    while($row = mysqli_fetch_assoc($result)){
        $nonVegStarters[] = $row;
    }

    return $nonVegStarters;
}

?>