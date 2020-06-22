<?php 
include_once("scripts/logon_register.php");
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
    <?php include_once("scripts/logon_register.php"); ?>
    <!-- navBar -->
    <?php include_once("scripts/navigation_bar.php"); ?>    

    <div class="text-center text"> 
        About  
    </div> 

    <p class="text-center aboutText">Welkom op onze webshop, we zijn Ricardo Bettonvil, Lars van breugel en Ricardo ter Linde.<br>
    We zijn in mei 2019 begonnen met deze webshop, het idee kwam voort uit een shoolopdracht.<br>
    De webshop is nu zo uitgebreid dat we voortaan kunnen pronken met de mooiste merken.<br>
    Wat begon met onze eigen kledinglijn is uitgegroeid tot aan de grootste en mooiste merken,<br>
    Neem bijvoorbeeld: Adidas, Stone island, Lyle en Scott en zo maar door.
    </p>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>