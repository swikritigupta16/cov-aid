<!DOCTYPE html>
<html>
    <head>
     <title>Cov-Aid</title>
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- external css -->
    <link href="css/style.css" rel="stylesheet">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>COV-AID</h1>
                            <p>Don't wait,this time is to give for the ones in need...</p>
                            <br>
                            <div> 
                                <marquee bgcolor="red" height="20px"> Heal others with your Help !!!</marquee>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="surplus.php" >
                            <div class="thumbnail">
                                <img src="img/surplus.jpg" alt="surplus">
                                <div class="caption">
                                    <h3>Surplus</h3>
                                    <p>Click on Surplus for providing Equipments</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="deficit.php" >
                            <div class="thumbnail">
                                <img src="img/deficit.jpg" alt="deficit">
                                <div class="caption">
                                    <h3>Deficit</h3>
                                    <p>Click on Deficit for borrowing Equipments</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="splash.html" >
                            <div class="thumbnail">
                                <img src="img/cowin.jpg" alt="">
                                <div class="caption">
                                    <h3>Covid Vaccine Registeration</h3>
                                    <p>Click on Covid Vaccine Registration to get vaccined</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>
