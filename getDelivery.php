<?php


$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
$sql = "SELECT distinct client.name, client.email, client.phone, client.address ,custorder.prod , custorder.count , custorder.price
FROM client , custorder where client.phone = custorder.phone";
$result = $conn->query($sql);
$rows= $result->num_rows;
if($conn->connect_error) {
    echo ("<script>alert('Connection Error!!')</script>");}

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Delivery Orders</title>
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
                <h1 align="center " style="color:#19692c"> The Delivery Orders</h1>


                <table id="mytable" class="table" border="1 "  align="center">


                    <th BGCOLOR="#ffb6c1">Done?</th>
                    <th BGCOLOR="#ffb6c1">Customer Name</th>
                    <th BGCOLOR="#ffb6c1">Phone Number</th>
                    <th BGCOLOR="#ffb6c1">Email</th>
                    <th BGCOLOR="#ffb6c1">Address</th>
                    <th BGCOLOR="#ffb6c1">Product</th>
                    <th BGCOLOR="#ffb6c1">count</th>
                    <th BGCOLOR="#ffb6c1">Price</th>

                    </thead>
                    <tbody>

                    <tr>
                        <?php

                        while( $row = mysqli_fetch_assoc($result)):
                        $x=$row['phone'];

                        ?>

                      <td > <form method="post" action="DeleteOrder.php"  ><input name="<?$x?>"style="background: none; "  value="Done" type="submit"></form> </td >
                        <td > <?php echo $row['name']; ?> </td >

                        <td > <?php echo $row['phone']; ?></td >

                        <td > <?php echo $row['email']; ?> </td >
                        <td > <?php echo $row['address']; ?> </td >

                        <td > <?php echo $row['prod']; ?></td >
                        <td > <?php echo $row['count']; ?> </td >
                        <td ><?php echo $row['price']; ?></td >



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

























