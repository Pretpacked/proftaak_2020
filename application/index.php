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
    <title>proftaak - home</title>

</head>
<body>

<!-- login functie -->
<div id="background-login">
    <form method="post" action="<?php echo basename(__FILE__, '.php').".php" ?>">
        <input type="text" placeholder="username" name="login-username" required><br>
        <input type="password" placeholder="password" name="login-password" required><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</div>

<!-- register functie -->
<div id="background-register">
<form method="post" action="<?php echo basename(__FILE__, '.php').".php" ?>">
        <input type="text" placeholder="studie" name="register-username" required><br>
        <input type="password" placeholder="password" name="register-password" required><br><br>
        <input type="text" placeholder="username" name="register-studie" required><br>
        <input type="text" placeholder="firstname" name="register-firstname" required><br>
        <input type="text" placeholder="lastname" name="register-lastname" required><br>
        <input type="text" placeholder="email" name="register-email" required><br><br>

        <input type="submit" name="submit" value="submit">
    </form>
</div>
    <!-- error handeling -->
<?php include_once("scripts/login_register.php"); ?>
    <!-- navBar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">LRRN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <div class="form-inline my-2 my-lg-0">
            <?php 
                if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){ echo '<button class="btn btn-outline-success my-2 my-sm-0 login" onclick="login()">Login</button>'; }
                if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){ echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick="register()">Register</button>';}

                /*if(isset($_SESSION["password"]) && isset($_SESSION["username"])){ echo '<a class="btn btn-outline-success my-2 my-sm-0" href="settings.php">settings</a>'; }*/
                if(isset($_SESSION["password"]) && isset($_SESSION["username"])){ echo '<a class="btn btn-outline-success my-2 my-sm-0" href="index.php?logout=true">logout</a>'; }
            ?>
        </div>
    </div>
</nav>

        <?php 
         if(isset($_SESSION["password"]) && isset($_SESSION["username"]))
         {
             header('location: plannen.php');
         }

        ?>

    </div>
</div>

<div class="text">
    <p class="font-weight-light">Login of registreer om verder te gaan!</p>
</div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
    
</body>
</html>