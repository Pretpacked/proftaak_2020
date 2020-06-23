<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">LRRN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="plannen.php">Plannen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="studie.php">Mijn studie</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li> -->
            <?php
                if(isset($_SESSION["orderList"])){
                    echo ' <li class="nav-item"><a class="nav-link" href="rooster.php">Rooster</a></li>';
                }
            ?>
            </ul>
            <div class="form-inline my-2 my-lg-0">
            <?php 
                if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){ echo '<button class="btn btn-outline-success my-2 my-sm-0 login" onclick="login()">Login</button>'; }
                if(!isset($_SESSION["password"]) && !isset($_SESSION["username"])){ echo '<button class="btn btn-outline-success my-2 my-sm-0" onclick="register()">Register</button>';}

                /*if(isset($_SESSION["password"]) && isset($_SESSION["username"])){ echo '<a class="btn btn-outline-success my-2 my-sm-0" href="settings.php">settings</a>'; }*/
                if(isset($_SESSION["password"]) && isset($_SESSION["username"])){ echo '<a class="btn btn-outline-success my-2 my-sm-0" href="index.php?logout=true">logout</a>'; }
            ?>
        </div>
    </div>
</nav>