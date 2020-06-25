<?php 
include_once("scripts/login_register.php");

if(!isset($_SESSION["planList"]) or $_SESSION["planList"] == null){
    echo "geen items om te bestellen.";
    echo "<a href='shop.php'>terug!</a>";
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
        <input type="text" placeholder="studie" name="register-studie" required><br>
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
    if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){echo"<div class='col-sm-12 text-center'><h2 id='order-h1-text'>U moet eerst zijn ingelogged voor dat U verder kunt gaan!</h2></div>"; 
    echo"<div class='col-sm-12 text-center'>";
        echo '<button class="btn btn-outline-success my-2 my-sm-0 login" onclick="login()">Login</button>'; 
        echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick="register()">Register</button>';
    echo"";}
    else
    {


    if(isset($_SESSION["planList"])){
        $array_count = array_count_values($_SESSION["planList"]);
    }
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_GET["id"])){
        $key = array_search($_GET["id"], $_SESSION["planList"]);
        unset($_SESSION["planList"][$key]);
        $_SESSION["planList"] = array_values($_SESSION["planList"]);
        $array_count = array_count_values($_SESSION["planList"]);
        if($_SESSION["planList"] == null){
            unset($_SESSION["planList"]);
            header("Location:plannen.php");
        }
    }

    if(isset($_SESSION["planList"]) or !empty($array_count)){
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

        
        echo '<p class="agenda"> Agenda </p>';
        echo '<div class="container">';  
        echo '<table class="table ">'; 
        echo '<thead>'; 
        echo '<tr>'; 
        echo '<th></th>'; 
        echo '<th>Vak</th>'; 
        echo '<th>tijdstip</th>'; 
        echo '<th>Remove</th>';
        echo '</tr>'; 
        echo '</thead>'; 
        $t = 0;

        for($i = 0; $i <= count($planItems) - 1;$i++){
            echo '<tr>';
            echo '<td class="planning-container"><img class="planning-img"src='.$planItems[$i]["productImg"].'></td>';
            echo '<td>'.$planItems[$i]["vakken"].'</td>';
            echo '<td>'.$planItems[$i]["tijdstip"].'</td>';
            echo '<td onclick="planRemoveAdd('.$planItems[$i]["id"].')">x</td>';
            echo '</tr>';
        }

        echo '<div class="col-sm-12"><a href="order.php" id="singlebutton" class="btn btn-primary float-right">plan in</a><br><br>';
        
        
    }else{

    }
}
    ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>