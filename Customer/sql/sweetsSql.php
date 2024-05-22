<?php
include('../conn.php');
function getSweets()
{
    global $conn;
    $sql="SELECT * FROM sweets";
    $result= mysqli_query($conn,$sql);
    $sweets=[];
    while($row=mysqli_fetch_assoc($result)){
        $sweets[]=$row;
    }

    return $sweets;
}
?>