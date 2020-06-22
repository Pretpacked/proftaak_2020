<?php
session_start();
//
//  $encrypted = my_simple_crypt( $password, 'e' );         Encrypting an password
//  $decrypted = my_simple_crypt( $password, 'd' );         Decrypting an password
//
//  INSERT DATA INTO MYSQL: INSERT INTO userinformation (firstname,lastname,email,username,password) values ("ff","ff","ff","ff","ff")
//

//Start up the database conversation.

$usernameError = "";
$emailError = "";
$registerSucces = "";
$loginUsernameError = "";

$servername = "localhost";
$username = "root";
$password = "root";
$database = "proftaak";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){ echo "Connection failed please contact your service provider."; die("Connection failed: " . $conn->connect_error); }

//Check if a user wants to login.
if(isset($_POST["login-username"]) && isset($_POST["login-password"])){
    $GETusername = $_POST["login-username"];
    $GETpassword = $_POST["login-password"];

    $GETpassword = my_simple_crypt( $GETpassword, 'e' );    

    //Check user given input
    if(!preg_match("/^[a-zA-Z1-9]*$/",$GETusername)){
        $loginUsernameError = "<div class='register-error'>Invalid username format.</div>";
        return;
    }
        checkAuth($GETusername, $GETpassword);

}

//Check if a user is already loged in.
if(isset($_SESSION["password"]) && isset($_SESSION["username"]) && $_SESSION["username"] == "" && $_SESSION["password"] == ""){
    checkAuth($_SESSION["password"], $_SESSION["username"]); 
}

//Check if a user wants to send an register form.
if(isset($_POST["register-firstname"]) && isset($_POST["register-lastname"]) && isset($_POST["register-email"]) && isset($_POST["register-username"]) && isset($_POST["register-password"])){
    $GETfirstname = $_POST["register-firstname"];
    $GETlastname = $_POST["register-lastname"];
    $GETemail = $_POST["register-email"];

    $GETusername = $_POST["register-username"];
    $GETpassword = $_POST["register-password"];
    
    //Check user given input
    if(!preg_match("/^[a-zA-Z ]*$/",$GETfirstname)){
        $usernameError = "<div class='register-error'>Invalid firstname format.</div>";
        $check = 0;
    }
    if(!preg_match("/^[a-zA-Z ]*$/",$GETlastname)){
        $usernameError = "<div class='register-error'>Invalid lastname format.</div>";
        $check = 0;
    }
    if(!preg_match("/^[a-zA-Z1-9 ]*$/",$GETusername)){
        $usernameError = "<div class='register-error'>Invalid username format.</div>";
        $check = 0;
    }
    if (!filter_var($GETemail, FILTER_VALIDATE_EMAIL)) {
        $emailError = "<div class='register-error'>Invalid email format.</div>";
        $check = 0;
    }
    if(!isset($check)){
        insertAuth($GETfirstname, $GETlastname, $GETemail, $GETusername, $GETpassword);
    }
}

//Checks the given user authecation with the database information.
function checkAuth($GETusername, $GETpassword){
    global $conn, $loginUsernameError;

    //Make a MySQL request for the user data.
    $userInformation = $conn->query("SELECT * FROM userinformation WHERE username='$GETusername' and password='$GETpassword'");
    $userInformation = $userInformation->fetch_assoc();

    //Check if the user given data is correct.
    if($userInformation["username"] === $GETusername && $userInformation["password"] === $GETpassword){
        $_SESSION["id"] = $userInformation["id"];
        $_SESSION["firstname"] = $userInformation["firstname"];
        $_SESSION["lastname"] = $userInformation["lastname"];
        $_SESSION["email"] = $userInformation["email"];
        $_SESSION["username"] = $userInformation["username"];
        $_SESSION["password"] = $userInformation["password"];
        //$_SESSION["passwordDecrypted"] = my_simple_crypt( $userInformation["password"], 'd' ); decrypted password
        return;
    }
    $loginUsernameError = "<div class='register-error'>Sorry... The username and/or password is wrong.</div>";
}

//Inserting user given authecation data.
function insertAuth($GETfirstname, $GETlastname, $GETemail, $GETusername, $GETpassword){
    global $conn, $usernameError, $emailError;

    //Get mail and username for a check.
    $username = $conn->query("SELECT username FROM userinformation WHERE username='$GETusername'");
    $mail = $conn->query("SELECT email FROM userinformation WHERE email='$GETemail'");

    //Check if usergiven information is already used.
    if($mail->num_rows == 0 && $username->num_rows == 0){
        echo "creating account!";
        $encryptedPassword = my_simple_crypt( $GETpassword, 'e' ); 
        $result = $conn->query("INSERT INTO userinformation (firstname, lastname, email, username, password) values ('$GETfirstname', '$GETlastname', '$GETemail', '$GETusername', '$encryptedPassword')");
    }

    //Check if mail and or username is already used and display an error.
    if($mail->num_rows == 1){
        $emailError = "<div class='register-error'>Sorry... The email has already been used.</div>";
    }
    if($username->num_rows == 1){
        $usernameError = "<div class='register-error'>Sorry... The username has already been used.</div>";
    }
}

//Logout function.
if(isset($_GET["logout"]) && $_GET["logout"] == true){
    unset($_SESSION["id"]);
    unset($_SESSION["firstname"]);
    unset($_SESSION["lastname"]);
    unset($_SESSION["email"]);
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
}

//Function for encryption and decryption.
function my_simple_crypt( $string, $action = 'e' ) {
    //Secret Salt and Hash.
    $secret_key = 'KJH23dw0234hj@$#kl53wfnFWK;wqir756@#ohjfs012-3$#';
    $secret_iv = 'sdf32rSDFl23e@#wklh24ds;loqjF21!9234@#0dfFWo$@#ier';
 
    $output = false;
    //Hash algorithm used.
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
 
    //Check if user wants to encrypt or decrypt.
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    return $output;
}
$conn->close();
?>