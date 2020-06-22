<?php 
include_once("scripts/logon_register.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css"/>
    <title>proftaak - settings</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
    <!-- error handeling -->
<?php include_once("scripts/logon_register.php"); ?>
    <!-- navBar -->
<?php include_once("scripts/navigation_bar.php"); ?>

    <div class="text-center text"> 
        Settings  
    </div>  

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container settingContainer">

	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
                    <!--Form with header-->
                    <form action="mail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa"></i> Gegevens</h3>
                                    <p class="m-0">Vul in naar wat je het wil veranderen</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Firstname" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-address-book text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Lastname" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user-secret text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Username" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-key text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Password" required>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/main.js"></script>
    
</body>
</html>