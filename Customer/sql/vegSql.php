<?php
function getvegs(){
    global $conn;
 
        $sql = "SELECT * FROM vegs";

    $result = mysqli_query($conn, $sql);

    $vegs = [];

    while($row = mysqli_fetch_assoc($result)){
        $vegs[] = $row;
    }

    return $vegs;
}

?>