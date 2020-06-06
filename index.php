<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Game Matematika</title>
    <link rel="stylesheet" href="game.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="wrap">
		<header id="header" class="alt" >
            <center>
			<h1>GAME MATH</h1>
            <p>Belajar Matematika Lebih Menyenangkan <i class="fa fa-smile"></i>
            </center>
        </header>
    <div id="main" class="alt">
        <br>
        <div class="row">
        <div class="col-12 d-flex justify-content-center text-center">
            <?php
                if (isset($_SESSION["email"])) {
            ?>
            <div class="form-group">
                <label><h5>Hallo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!</h5><label>
                </div>
                <div class="w3-container w3-center w3-animate-left">
                <button type="submit" class="btn btn-primary"><a href="soal.php">Main lagi</a></button>
                </div>
                <label><h5>Bukan Anda? <a href="ulang.php"> Klik disini</h5></a><label>
            <?php
            } else {
            ?>
            <form action="soal.php" method="POST">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="name" class="form-control" placeholder="Masukkan Nama" require>
                </div>
                <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" require>
                </div>
                <div class="w3-container w3-center w3-animate-left">
                <button type="submit" name="mulai" class="btn btn-primary">Mulai Main</button>
                </div>
            </form>
            <?php

                }
            ?>
        </div>
        </div>
        <br>
    </div>
        <footer id="footer" class="alt">
            <center>
            <br>&copy Copyright2020.All Right Reserved
            <br>More Information <a href="https://instagram.com/wwnnh_">@wwnnh_</a>
            <br>Win Applications
            </center>          
        </footer>
    </div>
</body>
</html>