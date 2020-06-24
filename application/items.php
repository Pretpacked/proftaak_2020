<?php 
include_once("scripts/login_register.php");
if(!isset($_SESSION["planList"]) and isset($_GET["opslaan"])){
    $_SESSION["planList"] = [];

}
if(isset($_GET["opslaan"]) and isset($_GET["opslaan"])){
    array_push($_SESSION["planList"], $_GET["id"]);

}
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
        <form method="post" action="<?php echo basename(__FILE__, '.php').".php?id=".$_GET["id"] ?>">
            <input type="text" placeholder="username" name="login-username" required><br>
            <input type="password" placeholder="password" name="login-password" required><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

    <div id="background-register">
    <form method="post" action="<?php echo basename(__FILE__, '.php') ?>">
        <input type="text" placeholder="username" name="register-username" required><br>
        <input type="password" placeholder="password" name="register-password" required><br><br>
        <input type="text" placeholder="firstname" name="register-firstname" required><br>
        <input type="text" placeholder="lastname" name="register-lastname" required><br>
        <input type="text" placeholder="email" name="register-email" required><br><br>

        <input type="submit" name="submit" value="submit">
        </form>
    </div>

    <?php 
    //error handeling
    include_once("scripts/login_register.php"); 
    //navBar
    include_once("scripts/navigation_bar.php"); 

    //Start connection item database and retrive items

    if(isset($_GET["id"])){
        $servername = "localhost";
        $username = "root";
        $password = "root"; 
        $database = "proftaak";

        $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = $conn->query("SELECT * FROM tijden where id=".$_GET["id"]);
        $result = $sql->fetch_assoc();

        if($result == NULL){
            echo"planItem could not be found!";
        }

    //    echo"<div id='item-image-background' style='background-image: url(".$result["productImg"].")'></div>";

        echo"<div class='container item-container'>";
        echo    "<div class='row'>";
        echo        "<div class='col-lg-4 col-sm-12'>";
        echo            "<div id='item-image' style='background-image: url(".$result["productImg"].")'></div>";
        echo        "</div>";
        echo        "<div class='col-lg-8 col-sm-12'>";
        echo            "<div id='item-title'>".$result["tijdstip"] ."</div>";
        echo            "<div id='item-description'>" . $result["Beschrijving"] ."</div>";
        echo        "</div>";
        echo        "<div class='col-lg-12 col-sm-12'>";
        echo            "<a href='items.php?id=".$_GET['id']."&opslaan=true' class='items-button btn btn-primary float-right'>Opslaan</a></div>";
        echo        "</div>";
        echo    "</div>";
        echo"</div>";
        
        $conn->close();
    }else{
        echo "no ID";
    }
    
    ?>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>