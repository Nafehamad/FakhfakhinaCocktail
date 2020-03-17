<?php
if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["phone"])&&isset($_POST["persons"])&&isset($_POST["date"])&&isset($_POST["time"])) {
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];
$persons=$_POST["persons"];
$time=$_POST["time"];


$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
if ($conn->connect_error) {
echo "Error!!";
}
else{
$sql="INSERT INTO reservation VALUES ('".$name."','".$phone."','".$email."','".$date."','".$time."','".$persons."')";
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Done') </script>";
header("location: reservation.html");
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}









