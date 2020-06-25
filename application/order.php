<?php 
include_once("scripts/logon_register.php");

if(!isset($_SESSION["orderList"]) or $_SESSION["orderList"] == null){
    echo "geen items om te bestellen.";
    echo "<a href='shop.php'>terug!</a>";
    unset($_SESSION["orderList"]);
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
    include_once("scripts/logon_register.php"); 
    //navBar
    include_once("scripts/navigation_bar.php"); 


    $servername = "localhost";
    $username = "root";
    $password = "root"; 
    $database = "proftaak19";

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
        echo'<label for="Straat">Straat:</label>';
        echo'<input type="text" required name="Straat" class="form-control" id="Straat">';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="HuisnummerEnToevoging">Huisnummer en toevoeging:</label>';
        echo'<input type="text" required name="HuisnummerEnToevoging" class="form-control" id="HuisnummerEnToevoging">';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="Postcode">Postcode:</label>';
        echo'<input type="text" required name="Postcode" class="form-control" id="Postcode">';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="Woonplaats">Woonplaats:</label>';
        echo'<input type="text" required name="Woonplaats" class="form-control" id="Woonplaats">';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="Land">Land:</label>';
        echo'<input type="text" required name="Land" class="form-control" id="Land">';
        echo'</div>';
        echo'<div class="form-group">';
        echo'<label for="Telefoonnummer">Telefoonnummer:</label>';
        echo'<input type="text" required name="Telefoonnummer" class="form-control" id="Telefoonnummer">';
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

        $adres = [$_POST["Straat"], $_POST["HuisnummerEnToevoging"], $_POST["Postcode"], $_POST["Woonplaats"], $_POST["Land"]];

        $sqlFirstname = $_SESSION["firstname"];
        $sqlLastname = $_SESSION["lastname"];
        $sqladres = implode(";",$adres);
        $sqlTelefoonnummer = $_POST["Telefoonnummer"];
        $sqlEmail = $_SESSION["email"];
        $sqlOrderlist = implode(";",$_SESSION["orderList"]);
        $sqlTotal = $_SESSION["total"];
        $sqlTime = date('Y/m/d h:i:s');

        $sql = "INSERT INTO bestellingen (voornaam, achternaam, adres, nummer, email, items, prijs, tijd) VALUES ('$sqlFirstname', '$sqlLastname', '$sqladres', '$sqlTelefoonnummer', '$sqlEmail', '$sqlOrderlist', '$sqlTotal', '$sqlTime')";
        $conn->query($sql);


        $array_count = array_count_values($_SESSION["orderList"]);

        for($x = 0; $x <= count($_SESSION["orderList"]) -1; $x++){
            if(!isset($orderParamater)){
                $orderParamater = ' where id="'.$_SESSION["orderList"][$x]. '"';
            }else{
                $orderParamater = $orderParamater . ' or id="'.$_SESSION["orderList"][$x].'"';
            }
        }

        $sql = "SELECT * FROM items". $orderParamater;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $orderItems[] = $row;
            }
        }

        $sql = "SELECT id FROM bestellingen where voornaam='$sqlFirstname' and achternaam='$sqlLastname' and adres='$sqladres' and nummer='$sqlTelefoonnummer' and email='$sqlEmail' and items='$sqlOrderlist'and prijs='$sqlTotal' and tijd='$sqlTime'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='container'><div class='row'><div class='col-sm-12 order-confirm text-center'>R.L.R Casuals NL - Informatie over bestelling ".$row['id']." [".$sqlTime."]<br>";
                echo "Klantnummer: ".$_SESSION["id"]."<br>Ordernummer: ".$row['id']." <br><br>Beste ".$sqlFirstname."<br><br>Bedankt voor je bestelling bij R.L.R Casuals.</div></div></div>";
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