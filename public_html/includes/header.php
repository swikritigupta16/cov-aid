<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <img src="img/logo.jpg" class="navbar-brand">
            <span>  
            <a href="index.php" class="navbar-brand"> Let's Help</a>
            </span>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['email'])) {
                ?>
                <link rel="stylesheet" href="css/navstyle.css">
                    <li><a href = "stats.php">Statistics</a></li>
                    <li><a href = "surplus.php">Contribute</a></li>
                    <li><a href = "deficit.php">Requirement</a></li>
                    <li>
                        <div class="dropdown">
                        <button class="dropbtn" data-toggle="dropdown">Account  
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="details.php">Edit Details</a></li>
                            <li><a href="listing.php">Conribution</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                        </div>
                    </li>
                  
                <?php
                }   else {
                ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php
                    }
                ?>          
        </div>
    </div>
</div>