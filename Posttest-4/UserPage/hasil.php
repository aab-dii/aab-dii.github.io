<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo "Username: $username <br>Password: $password";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 2</title>
    <link rel="stylesheet" href="style/hasil.css">
</head>
<body>
    <nav class="container-navbar">
        <div class="nav-items">
            <div class="nav-upper">
                <div class="navbar-content">
                    <a id="home" href="#">Home</a>
                    <a class="me" href="../about.html">About Me</a>
                    <a class="profile" href=""><img src="../img/profile.png" alt=""><h4> <?= $username ?></h4></a>
                </div>
            </div>
            <div class="nav-lower">
                <img class="logo" src="../img/pngegg.png">
                <div class="search-box">
                    <svg class="unf-icon" viewBox="0 0 24 24" width="24" height="24" fill="var(--NN500, #8D96AA)" style="display:inline-block;vertical-align:middle;flex:0 0 24px"><path d="M20.53 19.46l-4.4-4.4a7.33 7.33 0 10-1.07 1.06l4.41 4.41a.77.77 0 001.06 0 .77.77 0 000-1.07zm-15.78-9a5.75 5.75 0 115.75 5.75 5.76 5.76 0 01-5.75-5.72v-.03z"></path></svg>
                    <form action="">
                        <div class="input">
                            <input type="text" name="search" placeholder="Cari di Toko Kamera">
                        </div>
                    </form>
                </div>
                <img id="cart" src="../img/cart.png" alt="">
            </div>
        </div>
    </nav>

    <section>
        <div class="container-content">
            <div class="section-content1">
                <div class="main-content1">
                    <h2 class="judul">Produk Terbaru !!!</h2>
                    <div class="wrap-content1">
                        <a href="../../product.html" class="content1-items1"><img class="img-content1" src="../img/kamera.jpg" alt="">
                        <h4 class="product">Canon</h4><br>
                        <h4 class="harga1">Rp 5.000.000</h4>
                        <a href="../product.html" class="content1-items1"><img class="img-content1" src="../img/kamera.jpg" alt="">
                        <h4 class="product">Canon</h4><br>
                        <h4 class="harga1">Rp 5.000.000</h4>
                        <a href="../product.html" class="content1-items1"><img class="img-content1" src="../img/kamera.jpg" alt="">
                        <h4 class="product">Canon</h4><br>
                        <h4 class="harga1">Rp 5.000.000</h4>
                    </a>
                    </div>
                </div>
            </div>
            <div class="section-content2">
                <div class="main1-content2">
                    <h2 class="judul1">Produk Pilihan Kami !!!</h2>
                    <div class="box1"></div>

                    <div class="wrap1-content2">
                        <a href="../product.html" class="content-items2">
                            <img class="img-content2" src="../img/kamera.jpg" alt="">
                            <h4 class="product">Canon</h4><br>
                            <h4 class="harga2">Rp 5.000.000</h4>
                        </a>
                        <a href="../product.html" 
                        class="content-items2">
                        <img class="img-content2" src="../img/kamera.jpg" alt="">
                        <h4 class="product">Canon</h4><br>
                        <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                        <a href="../product.html" class="content-items2">
                            <img class="img-content2" src="../img/kamera.jpg" alt="">
                                <h4 class="product">Canon</h4><br>
                                <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                        <a href="../product.html" class="content-items2">
                            <img class="img-content2" src="../img/kamera.jpg" alt="">
                            <h4 class="product">Canon</h4><br>
                            <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                        <a href="../product.html" class="content-items2">
                            <img class="img-content2" src="../img/kamera.jpg" alt="">
                            <h4 class="product">Canon</h4><br>
                            <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                    </div>
                    
                </div> 
                <div class="main2-content2">
                    <h2 class="judul">Produk Pilihan Kami !!!</h2>
                    <div class="wrap2-content2">
                        <a href="../product.html" class="content-items2">
                            <img class="img-content2" src="../img/kamera.jpg" alt="">
                            <h4 class="product">Canon</h4><br>
                            <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                        <a href="../product.html" class="content-items2">
                            <img class="img-content2" src="../img/kamera.jpg" alt="">
                            <h4 class="product">Canon</h4><br>
                            <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                        <a href="../product.html" 
                        class="content-items2">
                        <img class="img-content2" src="../img/kamera.jpg" alt="">
                        <h4 class="product">Canon</h4><br>
                        <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                        <a href="../product.html" class="content-items2">
                        <img class="img-content2" src="../img/kamera.jpg" alt="">
                        <h4 class="product">Canon</h4><br>
                        <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                        <a href="../product.html" class="content-items2">
                            <img class="img-content2" src="../img/kamera.jpg" alt="">
                            <h4 class="product">Canon</h4><br>
                            <h4 class="harga2">Rp 5.000.000</h4>
                            </a>
                    </div>
                    <div class="box2"></div>
                </div>
            </div>
        </div> 
        <div class="section-content3">
            <div class="main-content3">
                <a href="" class="more"><p>More</p></a>
            </div> 

        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="content-footer">
                <div class="footer-header">
                    <h4>Ikuti Saya</h4>
                </div>
                <div class="footer-items">
                    <a href="https://www.instagram.com/abdi.kazu/" class="sosmed"><img src="../img/ig.png" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=100065862683504" class="sosmed"><img src="../img/fb.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../script.js"></script>
</body>
</html>