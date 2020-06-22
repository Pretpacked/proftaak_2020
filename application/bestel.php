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
    $database = "proftaak";

    $conn = new mysqli($servername, $username, $password, $database);

    if(isset($_SESSION["orderList"])){
        $array_count = array_count_values($_SESSION["orderList"]);
    }
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_GET["id"])){
        $key = array_search($_GET["id"], $_SESSION["orderList"]);
        unset($_SESSION["orderList"][$key]);
        $_SESSION["orderList"] = array_values($_SESSION["orderList"]);
        $array_count = array_count_values($_SESSION["orderList"]);
        if($_SESSION["orderList"] == null){
            unset($_SESSION["orderList"]);
            header("Location:shop.php");
        }
    }

    if(isset($_SESSION["orderList"]) or !empty($array_count)){
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

        

        echo '<div class="container">';  
        echo '<table class="table table-hover">'; 
        echo '<thead>'; 
        echo '<tr>'; 
        echo '<th></th>'; 
        echo '<th>Productnaam</th>'; 
        echo '<th>Merk</th>'; 
        echo '<th>Type</th>';
        echo '<th>Prijs</th>';
        echo '<th>Remove</th>';
        echo '</tr>'; 
        echo '</thead>'; 
        $t = 0;

        for($i = 0; $i <= count($orderItems) - 1;$i++){
            echo '<tr>';
            echo '<td class="bestel-container"><img class="bestel-img"src='.$orderItems[$i]["productImg"].'></td>';
            echo '<td>'.$orderItems[$i]["productnaam"].'</td>';
            echo '<td>'.$orderItems[$i]["merken"].'</td>';
            echo '<td>'.$orderItems[$i]["sex"].'/'.$orderItems[$i]["kleding"].'</td>';
            echo '<td>€'.$orderItems[$i]["prijs"].',00 x'.$array_count[$orderItems[$i]["id"]];
            echo '<td onclick="bestelRemoveAdd('.$orderItems[$i]["id"].')">x</td>';
            echo '</tr>';
            $t = $t + ($orderItems[$i]["prijs"] * $array_count[$orderItems[$i]["id"]]);
        }
        $btw = $t/100*21;
        $total = $btw+$t;
        echo '<tr>';
        echo '<tr class="orderMenuPrice">';
        echo '  <th></th>';
        echo '  <th></th>';
        echo '  <th></th>';
        echo '  <th>Price</th>';
        echo '  <th>€'.$t.'</th>';
        echo '  <th></th>';
        echo '</tr>';
        echo '<tr>';
        echo '  <th></th>';
        echo '  <th></th>';
        echo '  <th></th>';
        echo '  <th>Btw (21%)</th>';
        echo '  <th>€'.$btw.'</th>';
        echo '  <th></th>';
        echo '</tr>';
        echo '<tr>';
        echo '  <th></th>';
        echo '  <th></th>';
        echo '  <th></th>';
        echo '  <th>Total price</th>';
        echo '  <th>€'.$total.'</th>';
        echo '  <th></th>';
        echo '</tr>';
        echo '<tbody>'; 
        echo '</tbody>'; 
        echo '</table>';
        echo '<div class="row">';
        echo '<div class="col-sm-12"><a href="order.php" id="singlebutton" class="btn btn-primary float-right">Bestel</a><br><br><a href="shop.php?clear=true" id="singlebutton" class="btn btn-primary float-right">Bestel lijst leegmaken</a></div>';
        echo '</div>'; 
        echo '</div>'; 

        $_SESSION["total"] = $total;

        

    }else{

    }

    ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>