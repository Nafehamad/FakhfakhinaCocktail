<?php
include 'edit-deleteEmployee.php';


$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');



if ($conn->connect_error) {
    echo "Error!!";
}
else {
    $sql = "delete from employee WHERE Identity_ ='$x'";
    echo $sql;
    $result = $conn->query($sql);

    header('location:edit-deleteEmployee.php');

}