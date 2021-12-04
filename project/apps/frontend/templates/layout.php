<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->   
    <div class="container-nr">      
      <div class="row">
        <div class="col-xs-4">
          <a href='<?php echo url_for("main/index"); ?>'><h1 class =  'logo'></h1></a>
          <div style='width: 300px; overflow: hidden; padding-top: 10px;'>
           <a href = "http://www.hkticketing.com/Ticketek/eng/event/nswcms_event.asp?id=7482&Title=Dora the Explorer" target="_blank"><img class="img-rounded" src='images/ticket.png' /></a>
            <a href = "https://www.facebook.com/doralivehk" target="_blank"><img class="img-rounded" src='images/fb.jpg' /></a>
           
            <audio width="300" autoplay="autoplay" controls loop>
              <source src="uploads/song.mp3" type="audio/mpeg">
              
            </audio>
            <!--[if lt IE 9]>
            <bgsound id="background_snd" src="uploads/song.mp3" autostart="true" loop="infinite">
            <a href="#" onclick="document.all['background_snd'].src=''; return false">mute sound</a>
            <![endif]--> 
          </div>
          <p class = 'footer'>
                © 2014 Viacom International Inc. All Rights Reserved
          </p>
        </div>
        <div class="col-xs-8">
            <div class = "row">
                <div class = "col-xs-3">
                    <a class="btn btn-default top_btn" href="<?php echo url_for("about/index"); ?>">ABOUT <br /> THE SHOW</a>
                </div>
                <div class = "col-xs-3">
                     <a class="btn btn-default top_btn" href="<?php echo url_for("tour/index"); ?>">SHOW <br /> DATES</a>
                </div>
                <div class = "col-xs-3">
                    <a class="btn btn-default top_btn" href="<?php echo url_for("vip/index"); ?>">EXPLORER <br /> SEATS</a>
                </div>
                <div class = "col-xs-3">
                    <a class="btn btn-default top_btn" href="<?php echo url_for("faq/index"); ?>">FAQ <br /> &nbsp;</a>
                </div>
            </div>
            <!--main-->
            <div class = "row">
                <div class = "col-xs-12 main_bg">
                    <?php echo $sf_content ?>
                </div>
            </div>

            <ul id="footer-links">
                <div>
                <li class="first"><a href="<?php echo url_for("contact/index"); ?>">Contact Us</a></li>
                <li><a href="<?php echo url_for("partners/index"); ?>">Partners</a></li>
                <li><a href="<?php echo url_for("credits/index"); ?>">Credits</a></li>
                <li class="last"><a href="<?php echo url_for("terms/index"); ?>">Terms of Use</a></li>
                <li class="last"><a href="<?php echo url_for("privacy/index"); ?>">Privacy</a></li>
                </div>
            </ul>
        </div>
      </div>
    </div> <!-- /container -->        


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>
