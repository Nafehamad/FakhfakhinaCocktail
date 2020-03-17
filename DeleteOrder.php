<?php
include 'getDelivery.php';


$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');



if ($conn->connect_error) {
    echo "Error!!";
}
else {
    $sql = "delete from  custorder WHERE phone='$x'";
    $sq="delete from  client  WHERE phone='$x'";
    echo $sql;
    $result = $conn->query($sql);
    $result = $conn->query($sq);

    header('location:getDelivery.php');

}
//check fields














