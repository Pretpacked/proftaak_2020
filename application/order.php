<?php 
include_once("scripts/login_register.php");

if(!isset($_SESSION["planList"]) or $_SESSION["planList"] == null){
    echo "geen items om te bestellen.";
    echo "<a href='plannen.php'>terug!</a>";
    unset($_SESSION["planList"]);
    exit();
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

    <?php 
    //error handeling
    include_once("scripts/login_register.php"); 
    //navBar
    include_once("scripts/navigation_bar.php"); 


    $servername = "localhost";
    $username = "root";
    $password = "root"; 
    $database = "proftaak";

    $conn = new mysqli($servername, $username, $password, $database);

    echo"<div class='container'";
    echo"<div class='row'>";
    if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){echo"<div class='col-sm-12 text-center'><h2 id='order-h1-text'>U moet eerst zijn ingelogged voor dat U kunt bestellem.</h2></div>"; }
    echo"<div class='col-sm-12 text-center'>";
    if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){ echo '<button class="btn btn-outline-success my-2 my-sm-0 login" onclick="login()">Login</button>'; }
    if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){ echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick="register()">Register</button>';}
    echo"";

    if(isset($_SESSION["password"]) && isset($_SESSION["username"]) && !isset($_GET["order_submit"])){
        echo"<div class='col-sm-12>'";
        echo'<div class="container">';
        echo'<form action="order.php?order_submit=true" method="post">';
        echo'<div class="form-group">';
        echo'<label for="Voornaam">Voornaam:</label>';
        if(isset($_SESSION["firstname"])){
            echo'<input disabled type="text" name="Voornaam" required value="'.$_SESSION["firstname"].'" class="form-control" id="Voornaam">';
        }else{
            echo'<input type="text" required name="Voornaam" class="form-control" id="Voornaam">';
        }
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="Achternaam">Achternaam:</label>';
        if(isset($_SESSION["lastname"])){
            echo'<input disabled required type="text" name="Achternaam" value="'.$_SESSION["lastname"].'" class="form-control" id="Achternaam">';
        }else{
            echo'<input type="text" required name="Achternaam" class="form-control" id="Achternaam">';
        }
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="E-mailadres">E-mailadres:</label>';
        if(isset($_SESSION["email"])){
            echo'<input disabled type="text" value="'.$_SESSION["email"].'" name="E-mailadres" required class="form-control" id="E-mailadres">';
        }else{
            echo'<input type="text" class="form-control" name="E-mailadres" required id="E-mailadres">';
        }
        echo'</div>';
        echo'<input type="submit">';
        echo'</form>';
        echo'</div>';
        echo"</div>";
    }
    if(isset($_SESSION["password"]) && isset($_SESSION["username"]) && isset($_GET["order_submit"])){
        
        $sqlFirstname = $_SESSION["firstname"];
        $sqlLastname = $_SESSION["lastname"];
        $sqlEmail = $_SESSION["email"];
        $sqlplanList = implode(";",$_SESSION["planList"]);
        $sqlTime = date('Y/m/d h:i:s');

        $sql = "INSERT INTO rooster (voornaam, achternaam,  email, tijden, tijd) VALUES ('$sqlFirstname', '$sqlLastname', '$sqlEmail', '$sqlplanList', '$sqlTime')";
        $conn->query($sql);


        $array_count = array_count_values($_SESSION["planList"]);

        for($x = 0; $x <= count($_SESSION["planList"]) -1; $x++){
            if(!isset($planParamater)){
                $planParamater = ' where id="'.$_SESSION["planList"][$x]. '"';
            }else{
                $planParamater = $planParamater . ' or id="'.$_SESSION["planList"][$x].'"';
            }
        }

        $sql = "SELECT * FROM tijden". $planParamater;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $planItems[] = $row;
            }
        }

        $sql = "SELECT id FROM rooster where voornaam='$sqlFirstname' and achternaam='$sqlLastname' and email='$sqlEmail' and tijden='$sqlplanList' and  tijd='$sqlTime'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='container'><div class='row'><div class='col-sm-12 order-confirm text-center'>";
                echo " <br><br>Beste ".$sqlFirstname."<br><br>Bedankt voor het inplannen van je examen, tot dan!.</div></div></div>";
            }
        }       
    }
    echo "</div></div>";

    ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>