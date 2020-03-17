<?php
/**
 * Created by PhpStorm.
 * User: Najwa
 * Date: 4/20/2019
 * Time: 8:59 PM
 */



if(isset($_POST["employeeN"])&&isset($_POST["ident"])&&isset($_POST["Salary"])&&isset($_POST["phone"])&&isset($_POST["Address"])){
    $employeeName=$_POST["employeeN"];
    $ide=$_POST["ident"];
    $salary=$_POST["Salary"];
    $phone=$_POST["phone"];
    $Address=$_POST["Address"];
    $conn = new mysqli('localhost', 'root', '', 'fakhfakhina');

   // $conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
    if ($conn->connect_error) {
        echo "<script>alert('Connection Failed!')</script>";
    }
    else{
        $sql="INSERT INTO account(userName,Password) VALUES ('".$employeeName."','".$ide."')";
        $sql2="INSERT INTO employee VALUES ('".$employeeName."','".$ide."','".$Address."','".$phone."','".$salary."')";
        if ($conn->query($sql) === TRUE&&$conn->query($sql2)==TRUE) {
            header("location: manager.php");
            echo "<script>alert('Done')</script>";

        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


}

?>