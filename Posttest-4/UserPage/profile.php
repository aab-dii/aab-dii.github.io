<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css">
    <title>Profile</title>
</head>
<body>
    <nav class="container-navbar">
        <div class="nav-items">
            <div class="nav-upper">
                <div class="navbar-content">
                    <a id="home" href="hasil.php">Home</a>
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
        <div class="container">
            <h2>Profile</h2>
            <div class="profile">
                <div class="form profile">
                    <div class="header">
                        <h4>Username</h4>
                    </div>
                    <h4>:</h4>
                    <div class="data">
                        <p><?= $username ?></p>
                    </div>
                </div>
                <div class="form profile">
                    <div class="header">
                        <h4>Email</h4>
                    </div>
                    <h4>:</h4>
                    <div class="data">
                        <p><?=  $email ?></p>
                    </div>
                </div>
                <div class="form profile">
                    <div class="header">
                        <h4>Password</h4>
                    </div>
                    <h4>:</h4>
                    <div class="data">
                        <p><?= $password ?></p>
                    </div>
                </div>
                <div class="form profile">
                    <div class="header">
                        <h4>Nomor Hp</h4>
                    </div>
                    <h4>:</h4>
                    <div class="data">
                        <p><?= $number ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>