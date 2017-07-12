<!DOCTYPE html>
<html>
<head>
    <title>PHPio</title>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.svg" type="image/x-icon">

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
    
    <!-- On/Off button's picture -->
	<?php
	$val_array = array(0,0,0,0,0,0,0,0);
	//this php script generate the first page in function of the file
	for ( $i= 0; $i<8; $i++) {
		//set the pin's mode to output and read them
		system("gpio mode ".$i." out");
		exec ("gpio read ".$i, $val_array[$i], $return );
	}
        ?>
  
  
</head>
<body style="background-color: black;">


<section  class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow" id="header1-1" style="background-color: transparent;" >

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">
                    <div>
                    <img src='assets/images/Telchar.svg' height='300'/>
                    </div>
                    <div>
                    <a href="https://time.is/Lille" id="time_is_link" rel="nofollow" style="font-size:36px"> </a>
                    <span id="Lille_z71f" style="font-size:80px;color:white"></span>
                        <script src="//widget.time.is/t.js"></script>
                        <script>
                            time_is_widget.init({Lille_z71f:{}});
                        </script>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    

</section>

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-2" style="background-color: transparent;">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox" ><?php
                        $i=0;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">1</h4>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox" ><?php
                        $i=1;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">2</h4>
                        
                        
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><?php
                        $i=2;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">3</h4>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><?php
                        $i=3;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">4</h4>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-2" style="background-color: transparent;">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox" ><?php
                        $i=4;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">5</h4>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox" ><?php
                        $i=5;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">6</h4>
                        
                        
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><?php
                        $i=6;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">7</h4>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><?php
                        $i=7;
        if ($val_array[$i][0] == 0 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-red.svg' onclick='change_pin (".$i.");'/>");
		}
		//if on
		if ($val_array[$i][0] == 1 ) {
            echo ("<img id='button_".$i."' src='assets/images/power-green.svg' onclick='change_pin (".$i.");'/>");
        }
         ?></div>
                    <div class="card-block">
                        <h4 class="card-title" style="color: #ffffff;">8</h4>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 0.875rem; padding-bottom: 0.875rem;">
    
    <div class="container">
        <p class="text-xs-center">Telchar</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
    <script src="assets/gpio/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>
