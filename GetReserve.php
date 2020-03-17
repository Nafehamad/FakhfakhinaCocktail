<?php


$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
$sql = "SELECT * FROM reservation";
$result = $conn->query($sql);
$rows= $result->num_rows;
if($conn->connect_error) {
    echo ("<script>alert('Connection Error!!')</script>");}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservation Orders</title>
    <link rel="icon" href="img/titleimg.png">

</head>
<body  style="background-image:url(img/ba.png); background-size: 100%" >

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <br>
            <br>
            <br>
            <br>
            <br>

            <br>
            <br>
                <h1 align="center " style="color:#19692c"> The Reservation Orders</h1>


                <table id="mytable" class="table" border="1 "  align="center">


                    <th BGCOLOR="#ffb6c1">Done?</th>
                    <th BGCOLOR="#ffb6c1">Customer Name</th>
                    <th BGCOLOR="#ffb6c1">Phone Number</th>
                    <th BGCOLOR="#ffb6c1">Email</th>
                    <th BGCOLOR="#ffb6c1">Reservation Date</th>
                    <th BGCOLOR="#ffb6c1">Reservation Time</th>
                    <th BGCOLOR="#ffb6c1">Number of Customers</th>
                    </thead>
                    <tbody>

                    <tr>
                        <?php

                        while( $row = mysqli_fetch_assoc($result)):
                         $x=$row['Phone'];


                        ?>


                        <td > <form method="post" action="Delete.php"  ><input name="<?$x?>"style="background: none; "  value="Done" type="submit"></form> </td >
                        <td > <?php echo $row['Name']; ?> </td >

                        <td > <?php echo $row['Phone']; ?></td >

                        <td > <?php echo $row['Email']; ?> </td >
                        <td > <?php echo $row['ReDate']; ?></td >
                        <td > <?php echo $row['ReTime']; ?> </td >
                        <td ><?php echo $row['visitorCount']; ?></td >


                    </tr >

                    <?php endwhile ?>

                    </tbody>

                </table>

                <div class="form-group " align="center">
                </div>


            </div>
        </div>
    </div>
</body>
</html>
<?php



 

   



















