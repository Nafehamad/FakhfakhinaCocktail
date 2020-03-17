
<?php
session_start();


    $UserN=$_POST["user"];
    $Password=md5($_POST["pass"]);
    $conn = new mysqli('localhost', 'root', '', 'fakhfakhina');

    if($conn->connect_error){
        echo"<script>alert('Connection Error!!');
</script>";}

    else if(isset($UserN)&&isset($Password)) {
        $sql = "SELECT * FROM account WHERE userName='$UserN' and Password='$Password'";

        $result=mysqli_query($conn,$sql);


        if (mysqli_fetch_assoc($result)) {

            $_SESSION['loginn'] = $UserN; // Initializing Session
            if ($UserN == 'Najwa Dwaikat') {

                header("location: manager.php");}
                else{

                    header("location: login.html");

                }
                // Redirecting To Other Page
            } else {
            $_SESSION['usernn']=1;
                header("location: employee
                
                .php");

            }


        } else {
            echo "<script>alert('Username or Password invalid! TRY AGAIN');
                      window.open('login.html');
                     </script>";
        }
















