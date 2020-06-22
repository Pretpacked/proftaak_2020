<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "proftaak";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){ echo "Connection failed please contact your service provider."; die("Connection failed: " . $conn->connect_error); }

getItems(false, false, false, false);

function getItems($productSearch, $productMinPrice, $productMaxPrice){
    global $conn;
    $databaseParamaters = "";
    $databaseParamaterCount = 0;

    //Check for filters and if so add the filters to the database request.
    //Check if user is searching for item.
    if($productSearch != false){
        if($databaseParamaterCount == 0){
            $databaseParamaters = "where productnaam == $productSearch";
            $databaseParamaterCount++;
        }
    }
    //Check if user has min price.
    if($productMinPrice != false){
        if($databaseParamaterCount == 0){
            $databaseParamaters = "where prijs <= $productSearch";
            $databaseParamaterCount++;
        }else{
            $databaseParamaters = $databaseParamaters . " and prijs <= ".$productMinPrice;
            $databaseParamaterCount++;
        }
    }
        //Check if user has mmax in price.
    if($productMaxPrice != false){
        if($databaseParamaterCount == 0){
            $databaseParamaters = "where prijs >= $productSearch";
            $databaseParamaterCount++;
        }else{
            $databaseParamaters = $databaseParamaters . " and prijs >= ".$productMinPrice;
            $databaseParamaterCount++;
        }
    }

    //Give limit to request.
    if($databaseParamaterCount == false){
        $databaseParamaters = "where limit 0,25";
    }else{
        $databaseParamaters = $databaseParamaters . " and limit 0,25";
    }

    //Show database request
    echo  "SELECT * FROM items ".$databaseParamaters;

    //$userInformation = $conn->query("SELECT * FROM items ");
    //$userInformation = $userInformation->fetch_assoc();
}

?>