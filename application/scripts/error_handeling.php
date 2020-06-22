<?php
 if($usernameError != "" || $emailError != "" || $registerSucces != "" || $loginUsernameError != "") { echo '<div class="error-database">';}
   
        if($usernameError != ""){
            echo $usernameError;
        }
        if($emailError != ""){
            echo $emailError;
        }
        if($registerSucces != ""){
            echo $registerSucces;
        }
        if($loginUsernameError != ""){
            echo $loginUsernameError;
        }

    if($usernameError != "" || $emailError != "" || $registerSucces != "" || $loginUsernameError != "") { echo '</div>';}
?>