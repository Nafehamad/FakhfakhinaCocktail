<?php
include 'GetReserve.php';


    $conn = new mysqli('localhost', 'root', '', 'fakhfakhina');



    if ($conn->connect_error) {
        echo "Error!!";
    }
    else {
        $sql = "delete from reservation WHERE Phone='$x'";
        echo $sql;
        $result = $conn->query($sql);

        header('location:GetReserve.php');

}
//check fields














