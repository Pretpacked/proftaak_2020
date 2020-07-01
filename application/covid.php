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
        <input type="text" placeholder="studie" name="register-studie" required><br>
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

    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "proftaak";

    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo"<div class='container'";
    echo"<div class='row'>";
    if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){echo"<div class='col-sm-12 text-center'><h2 id='order-h1-text'>U moet eerst zijn ingelogged voor dat U verder kunt gaan!</h2></div>"; 
    echo"<div class='col-sm-12 text-center'>";
        echo '<button class="btn btn-outline-success my-2 my-sm-0 login" onclick="login()">Login</button>'; 
        echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick="register()">Register</button>';
    echo"";}
    else{ ?>

    <div class="text-center studieText"> 
        Covid-19 regels
    </div>

    <h2 class="text-center covidText">
    De examens gaan dit jaar wat anders dan verwacht, zo moet je verplicht de 1,5 meter hanteren bij ons op school en moet je bij binnenkomst je handen desinfecteren.
    Voor de examens die gemaakt moeten worden zijn speciale lokalen vrij gehouden, bij deze examens mogen maar maximaal 20 leerling deelnemen.
    </h2>

    <h5 class="text-center linkText"> 
    <a href="https://www.rijksoverheid.nl/onderwerpen/coronavirus-covid-19"> Als u alle actuele informatie van Covid-19 wilt lezen klik dan hier. </a>

    </h5>


    <?php } ?>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>