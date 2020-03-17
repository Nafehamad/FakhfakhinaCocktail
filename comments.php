<?php
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["Message"];
if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["Message"])) {

    $conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
    if ($conn->connect_error) {
        echo "Error!!";
    }
    else{


        $sql="INSERT INTO comments VALUES ('".$name."','".$email."','".$message."')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Done') </script>";
            header("location: about.html");
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

}










