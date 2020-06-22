<?php 
include_once("scripts/login_register.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css"/>
    <title>proftaak - <?php echo basename(__FILE__, '.php') ?></title>

</head>
<body>

<div id="background-login">
    <form method="post" action="<?php echo basename(__FILE__, '.php').".php" ?>">
        <input type="text" placeholder="username" name="login-username" required><br>
        <input type="password" placeholder="password" name="login-password" required><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</div>

<div id="background-register">
<form method="post" action="<?php echo basename(__FILE__, '.php').".php" ?>">
        <input type="text" placeholder="username" name="register-username" required><br>
        <input type="password" placeholder="password" name="register-password" required><br><br>
        <input type="text" placeholder="firstname" name="register-firstname" required><br>
        <input type="text" placeholder="lastname" name="register-lastname" required><br>
        <input type="text" placeholder="email" name="register-email" required><br><br>

        <input type="submit" name="submit" value="submit">
    </form>
</div>

    <!-- error handeling -->
    <?php include_once("scripts/login_register.php"); ?>
    <!-- navBar -->
    <?php include_once("scripts/navigation_bar.php"); ?>

    <div class="text-center text"> 
        Contact  
    </div> 

<div class="card-deck cards">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">E-mail:</h5>
        <p class="card-text">rlrcasuals@hotmail.com</p>
    </div>
  </div>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Telefoon-nummers:</h5>
        <p class="card-text">Lars van Breugel: 06-38392383 <br> Ricardo Bettonvil: 06-37118730 <br>
        Ricardo ter Linde: 06-38470621</p>
      </div>
    </div>
  </div>
</div>

<div class="row cards">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Facebook</h5>
        <p class="card-text">Neem gerust een kijkje op ons facebook account, je kunt ons ook contacteren via dit platform.</p>
        <a href="https://www.facebook.com/rlr.casuals" target="_blank" class="btn btn-primary">Go to Facebook</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Instagram</h5>
        <p class="card-text">Neem gerust een kijkje op ons Instagram account, je kunt ons ook contacteren via dit platform.</p>
        <a href="https://www.instagram.com/r.l.r._casuals/?hl=nl" target="_blank" class="btn btn-primary">Go to Instagram</a>
      </div>
    </div>
  </div>
</div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>