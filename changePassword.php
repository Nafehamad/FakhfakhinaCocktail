<?php

if(isset($_POST["UName"])&&isset($_POST["newPass"])&&isset($_POST["confirmPass"])) {
    $UserName=$_POST["UName"];
    $newPassword=md5($_POST["newPass"]);
    $confirmPass=md5($_POST["confirmPass"]);
    $conn = new mysqli('localhost', 'root', '', 'fakhfakhina');


    if ($conn->connect_error) {
        echo "Error!!";
    }
    else {
        $sql = "SELECT Password FROM account WHERE userName='$UserName'";
        $result = $conn->query($sql);

        if (!$result) {
            echo "The username you entered does not exist";
        }
        else if ($newPassword = $confirmPass) {


            $sql2 = "UPDATE account SET Password='$newPassword' where userName='$UserName'";
            $result2 = $conn->query($sql2);}

        }

        if ($sql2) {

            echo "<script>alert('Congratulations You have successfully changed your password');
                      window.open('login.html');
                      
                     </script>";

        } else {
            echo "Passwords do not match";
        }



}
//check fields














