<?php
include('../conn.php');
function getrotis(){
    global $conn;
    $sql="SELECT * FROM roti";
    $result= mysqli_query($conn,$sql);
    $rotis=[];
    while($row=mysqli_fetch_assoc($result)){
        $rotis[]=$row;
    }

    return $rotis;
}
?>