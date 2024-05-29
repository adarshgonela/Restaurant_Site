<?php
<<<<<<< HEAD
include('../conn.php');
function getSweets();
{
=======
function getSweets(){
>>>>>>> 739e38b0fae93793d1a084e895eecd22476eac00
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