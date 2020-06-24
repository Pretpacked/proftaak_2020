<?php 
include_once("scripts/login_register.php");

if(isset($_GET["clear"])){
    unset($_SESSION["planList"]);
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
    <h3 id="planKeuze">Kies een vak en plan de tijd in wanneer jij je examen wilt doen.</h3>

<div class="filtermenu">
    <ul id="myMenu"> 
        <p class="text-center vakken">Vakken</p>


        <input class="form-control mr-sm-2 search" type="text" id="mySearch" onkeyup="myFunction()" placeholder="Vakken" aria-label="Search">

        <li><a><p id="Nederlands" onclick="filterUpdate(this.id, false)" class="text-center planItem">Nederlands</p></a></li>
        <li><a><p id="Nederlands.hidden" onclick="filterUpdate(this.id, true)"class="text-center planItem planItem-hidden hide">Nederlands x</p></a></li>
        <li><a><p id="Engels" onclick="filterUpdate(this.id, false)" class="text-center planItem">Engels</p></a></li>
        <li><a><p id="Engels.hidden" onclick="filterUpdate(this.id, true)"class="text-center planItem planItem-hidden hide">Engels x</p></a></li>
        <li><a><p id="Rekenen" onclick="filterUpdate(this.id, false)" class="text-center planItem">Rekenen</p></a></li>
        <li><a><p id="Rekenen.hidden" onclick="filterUpdate(this.id, true)"class="text-center planItem planItem-hidden hide">Rekenen x</p></a></li>
      
    </ul> 

</div>

    <div id="planningsList-container">
        <div class="row" id="planningsList"></div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>