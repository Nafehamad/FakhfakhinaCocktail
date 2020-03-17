<?php


$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
$rows= $result->num_rows;
if($conn->connect_error) {
    echo ("<script>alert('Connection Error!!')</script>");}

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Employees</title>
        <link rel="icon" href="img/titleimg.png">

    </head>
    <body  style="background-image:url(img/ba.png); background-size: 100%" >
    <br>
    <br>




    <div class="container" >
        <div class="row">


            <div class="col-md-12">

                <br>
                <br>
                <br>
                <br>
                <h1 align="center" style="color: #19692c"> Your Employee</h1>


                <table id="mytable" class="table" border="1 "  align="center">


                    <th BGCOLOR="#ffb6c1">Employee Name</th>
                    <th BGCOLOR="#ffb6c1">Identity</th>
                    <th BGCOLOR="#ffb6c1">Phone Number</th>
                    <th BGCOLOR="#ffb6c1">Address</th>
                    <th BGCOLOR="#ffb6c1">Salary</th>


                    <tbody>

                    <tr>
                        <?php
                        while( $row = mysqli_fetch_assoc($result)):
                        $x=$row['Identity_'];
                         ?>


                        <td > <?php echo $row['Name']; ?> </td >
                        <td > <?php echo $row['Identity_']; ?> </td >

                        <td > <?php echo $row['Phone']; ?></td >
                        <td > <?php echo $row['Address']; ?></td >
                        <td > <?php echo $row['Salary']; ?></td >
                        <td > <form method="post" action="deleteEmp.php"  ><input name="<?$x?>"style="background: none; "  value="Delete" type="submit"></form> </td >




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























