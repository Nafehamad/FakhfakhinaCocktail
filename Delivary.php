<?php

$conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
$nam=$_POST["name"];
$pho=$_POST["phone"];
$address=$_POST["address"];
$ema=$_POST["email"];

$q="Insert into client values('".$nam."','".$ema."','".$pho."','".$address."')";
$res=$conn->query($q);
if(isset($_POST["phone"])) {

    $name3=$_POST["phone"];
    $fa = $_POST["F"];
    $name5="";

    foreach ($fa as $fn) {

        if ($fn == "f") {
            $name = "Fakhfakhina Extra";
            $name1 = $_POST["a"];
            $price=$name1*15.00;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO  custorder  VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        else if ($fn == "f1") {
            $name = "Fakhfakhina With Honey";
            $name1 = $_POST["b"];
            $price=$name1*15.00;

            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f2") {
            $name = "Fakhfakhina";
            $name1 = $_POST["c"];
            $price=$name1*10.00;

            $conn = new mysqli('localhost', 'root', '', 'fakhfakhina');
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f3") {
            $name = "Orange Juice";
            $name1 = $_POST["d"];
            $price=10*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f4") {
            $name = "Apple Juice";
            $name1 = $_POST["e"];
            $price=10*$name1;

            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO order VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f5") {
            $name = "Carrot Juice";
            $name1 = $_POST["f"];
            $price=10*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f6") {
            $name = "Lemon Juice";
            $name1 = $_POST["g"];
            $price=10*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO order VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f7") {
            $name = "Lemon Juice and Mint";
            $name1 = $_POST["h"];
            $price=10*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f8") {
            $name = "Fakhfakhina Egyptian Cocktail";
            $name1 = $_POST["i"];
            $price=17*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f9") {
            $name = "Strawberry With Milk";
            $name1 = $_POST["j"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f10") {
            $name = "Banana With Milk and Strawberry";
            $name1 = $_POST["k"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f11") {
            $name = "Banana With Milk";
            $name1 = $_POST["l"];
            $price=10*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f12") {
            $name = "Strawberry Juice";
            $name1 = $_POST["m"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f13") {
            $name = "Kiwi Juice";
            $name1 = $_POST["n"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f14") {
            $name = "Graefruit Juice";
            $name1 = $_POST["o"];
            $price=10*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f15") {
            $name = "Milk Shake Galaxy";
            $name1 = $_POST["p"];
            $price=14*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f16") {
            $name = "Milk Shake Oreo";
            $name1 = $_POST["q"];
            $price=14*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f17") {
            $name = "Ice Cream Extra";
            $name1 = $_POST["r"];
            $price=15*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f18") {
            $name = "Kunder ";
            $name1 = $_POST["s"];
            $price=12*$name1;

            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f19") {
            $name = "Galaxy";
            $name1 = $_POST["t"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f20") {
            $name = "Snickers";
            $name1 = $_POST["v"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f21") {
            $name = "Flake";
            $name1 = $_POST["w"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f22") {
            $name = "Nutella";
            $name1 = $_POST["x"];
            $price=12*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f23") {
            $name = "Cheese Cake";
            $name1 = $_POST["y"];
            $price=10*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    echo "ok";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }

        else if ($fn == "f25") {
            $name = "Arabic Coffee";
            $name1 = $_POST["aa"];
            $price=5*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f26") {
            $name = "Americano";
            $name1 = $_POST["bb"];
            $price=7*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f27") {
            $name = "Espresso";
            $name1 = $_POST["cc"];
            $price=7*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f28") {
            $name = "Tea";
            $name1 = $_POST["dd"];
            $price=5*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f29") {
            $name = "Nescafe";
            $name1 = $_POST["ee"];
            $price=7*$name1;
            if ($conn->connect_error) {
                echo "f";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }
        else if ($fn == "f18") {
            $name = "Cappuccino";
            $name1 = $_POST["gg"];
            $price=7*$name1;
            if ($conn->connect_error) {
                echo "fuck";
            } else {
                $sql = "INSERT INTO custorder VALUES ('".$name3."','" . $name . "','" . $name1 . "','" . $price . "')";
                if ($conn->query($sql) === TRUE) {
                    header('location:yourOrder.html');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

        }

    }

}


?>