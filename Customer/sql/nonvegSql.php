
<?php
include('../conn.php');
function getnonVegs(){
    global $conn;
 
        $sql = "SELECT * FROM nonvegs";

    $result = mysqli_query($conn, $sql);

    $nonvegs = [];

    while($row = mysqli_fetch_assoc($result)){
        $nonvegs[] = $row;
    }

    return $nonvegs;
}

?>