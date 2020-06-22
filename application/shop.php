<?php 
include_once("scripts/login_register.php");

if(isset($_GET["clear"])){
    unset($_SESSION["orderList"]);
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

    //Start connection item database and retrive items

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "proftaak";

    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tijden";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
        ?><script> var items = <?php echo json_encode($items );?>; </script><?php
    }
    
    $conn->close();
    ?>

<div class="filtermenu">
    <ul id="myMenu"> 
        <p class="text-center categorieKleding">Categorie</p>
        <a><p id="heren" onclick="filterUpdate(this.id, false)" class="text-center product">heren</p></a>
        <a><p id="heren.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Heren x</p></a>
        <a><p id="dames" onclick="filterUpdate(this.id, false)" class="text-center product">dames</p></a>
        <a><p id="dames.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">dames x</p></a>
        <hr>

        <input class="form-control mr-sm-2 search" type="text" id="mySearch" onkeyup="myFunction()" placeholder="Kleding" aria-label="Search">

        <li><a><p id="shirts" onclick="filterUpdate(this.id, false)" class="text-center product">Shirts</p></a></li>
        <li><a><p id="shirts.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Shirts x</p></a></li>
        <li><a><p id="polo's" onclick="filterUpdate(this.id, false)" class="text-center product">polo's</p></a></li>
        <li><a><p id="polo's.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">polo's x</p></a></li>
        <li><a><p id="truien" onclick="filterUpdate(this.id, false)" class="text-center product">Truien</p></a></li>
        <li><a><p id="truien.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Truien x</p></a></li>
        <li><a><p id="vesten" onclick="filterUpdate(this.id, false)" class="text-center product">Vesten</p></a></li>
        <li><a><p id="vesten.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Vesten x</p></a></li>
        <li><a><p id="schoenen" onclick="filterUpdate(this.id, false)" class="text-center product">Schoenen</p></a></li>
        <li><a><p id="schoenen.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Schoenen x</p></a></li>
        <li><a><p id="broeken" onclick="filterUpdate(this.id, false)" class="text-center product">Broeken</p></a></li>
        <li><a><p id="broeken.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Broeken x</p></a></li>
    </ul> 
    <ul id="myMenu2"> 
        <hr>
        <input class="form-control mr-sm-2 search" type="text" id="mySearch2" onkeyup="myFunction2()" placeholder="Merken" aria-label="Search">

        <li><a><p id="fredPerry" onclick="filterUpdate(this.id, false)" class="text-center product">Fred perry</p></a></li>
        <li><a><p id="fredPerry.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Fred perry x</p></a></li>
        <li><a><p id="lyleAndScott" onclick="filterUpdate(this.id, false)" class="text-center product">Lyle And Scott</p></a></li>
        <li><a><p id="lyleAndScott.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Lyle And scott x</p></a></li>
        <li><a><p id="stoneIsland" onclick="filterUpdate(this.id, false)" class="text-center product">Stone Island</p></a></li>
        <li><a><p id="stoneIsland.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Stone island x</p></a></li>
        <li><a><p id="lacoste" onclick="filterUpdate(this.id, false)" class="text-center product">Lacoste</p></a></li>
        <li><a><p id="lacoste.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Lacoste x</p></a></li>
        <li><a><p id="adidas" onclick="filterUpdate(this.id, false)" class="text-center product">Adidas</p></a></li>
        <li><a><p id="adidas.hidden" onclick="filterUpdate(this.id, true)"class="text-center product product-hidden hide">Adidas x</p></a></li>
    </ul> 
</div>

    <div id="productsList-container">
        <div class="row" id="productsList"></div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>