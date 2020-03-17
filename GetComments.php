<?php


$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);
$rows= $result->num_rows;
if($conn->connect_error) {
    echo ("<script>alert('Connection Error!!')</script>");}

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Comments</title>
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
                <h1 align="center" style="color: #19692c"> Custemor's Comments</h1>


                <table id="mytable" class="table" border="1 "  align="center">


                    <th BGCOLOR="#ffb6c1">Customer Name</th>
                    <th BGCOLOR="#ffb6c1">Email</th>
                    <th BGCOLOR="#ffb6c1">Comment</th>

                    <tbody>

                    <tr>
                        <?php
                        while( $row = mysqli_fetch_assoc($result)): ?>

                        <td > <?php echo $row['Name']; ?> </td >
                        <td > <?php echo $row['Email']; ?> </td >

                        <td > <?php echo $row['Message']; ?></td >


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























