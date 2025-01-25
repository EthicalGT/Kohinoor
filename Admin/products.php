<?php
session_start();
error_reporting(0);
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>
    <link rel="stylesheet" href="style 1.css">
</head>
<body>
    
    <section>
        <header>
            <div class="circle"></div>
            
            <a href="#" class="logo">Kohi<span>noor</span></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="bracelet.php">Products</a></li>
                <?php
                if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
            }
            ?>
                <li><a href="cart2.php">Cart(<?php echo $count; ?>)</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p>Login</p>
            
        </header>        
    </section>
    <!--About Page-->

    <div class="about">
        <div class="box">
            <div class="card">
                <img src="img/earring.png">
            </div>
            <div class="card">
                <img src="img/bracelet.png">
            </div>
            <div class="card">
                <img src="img/necklace.png">
            </div>
            <div class="card">
                <img src="img/ring.png">
            </div>
            <div class="card">
                <img src="img/nosering.png">
            </div>
        </div>
        <hr>

        <div class="Clothes">
            <h1>Products</h1>
            <p>----New Stock----</p>
            <div class="clothes_box">
                <?php
                $sql=mysqli_query($conn,"select * from products where pid='1'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="cart.php" method="POST">
                <div class="clothes_card">
                    <img src="'.$img.'">
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$pname.'" readonly></h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Add to Cart</button>
                </form>
                </div>';
            }
                ?>
                <?php
                $sql=mysqli_query($conn,"select * from products where pid='2'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="cart.php" method="POST">
                <div class="clothes_card">
                    <img src="'.$img.'">
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$pname.'" readonly></h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Add to Cart</button>
                </form>
                </div>';
            }
            ?>
                <?php
                $sql=mysqli_query($conn,"select * from products where pid='3'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="cart.php" method="POST">
                <div class="clothes_card">
                    <img src="'.$img.'">
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$pname.'" readonly></h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Add to Cart</button>
                </form>
                </div>';
            }
            ?>
              <?php
              $sql=mysqli_query($conn,"select * from products where pid='4'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="cart.php" method="POST">
                <div class="clothes_card">
                    <img src="'.$img.'">
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$pname.'" readonly></h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                        It has roots in a piece of classical Latin literature from 45 BC, 
                        making it over 2000 years old.
                    <input type="hidden" name="price" value="'.$r[price].'" readonly><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Add to Cart</button>
                </form>
                </div>';
            }
            
            
              else{
echo"";
                }
            ?>
                
            </div>
        </div>
        </div>
    </div>
    </body>
    </html>