<!DOCTYPE html>
<?php 
include "./cn/cn.php";
$cn = conectarse();


?>
<html lang="en">
    <!--begin head-->


    <head>
        <meta charset="utf-8">
        <title>Alquileres EAC </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- set content to full screen on iphones -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--[if lte IE 6]>
            <link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
        <![endif]-->

        <!--[if !lte IE 6]><!-->
        <!-- Load Google Web Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Load style.css: contains all css files concatenated to one single file -->
        <link href="css/style.css" rel="stylesheet">
        <!--<![endif]-->

        <!-- Load HTMLShiv for IE9 HTML5 support -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->	

        <!-- Your Favoriate Icons -->
        <link rel="shortcut icon" href="ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://myorange.ca/theme/peachrealestate/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://myorange.ca/theme/peachrealestate/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://myorange.ca/theme/peachrealestate/ico/apple-touch-icon-72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="http://myorange.ca/theme/peachrealestate/ico/apple-touch-icon-57-precomposed.html">

        <!--
                NOTE: All the javascripts have been moved to the bottom of the page to load the content faster.
        -->

    </head><!--end head-->

    <!--begin body-->
    <body>
        <header>
            <!--logo area start-->
            <div class="logo-area">
                <span id="logo"></span>

                <abbr title="Phone" id="call-phone">1-800-45-EAC</abbr>
            </div><!--end logo area-->

            <?php
            
            include 'menu.php';
            
            ?>
            
        </header>
        
        <?php
        
        contenido();
        ?>
        
        
        <footer>
<!--            <div class="container-fluid">
                <div class="row-fluid">

                    <div class="span12 footer-links">
                         Copyright info and links 
                        <div class="row-fluid">
                            <div class="span2">
                                <p>Renting</p>
                                <ul>
                                    <li><a href="javascript:void(0);">Properties for Rent</a></li>
                                    <li><a href="javascript:void(0);">Open Home</a></li>
                                    <li><a href="javascript:void(0);">Rental Property Alert</a></li>
                                    <li><a href="javascript:void(0);">Tenancy Application Forms</a></li>
                                </ul>
                            </div>
                            <div class="span2">
                                <p>Buying</p>
                                <ul>
                                    <li><a href="javascript:void(0);">Properties for Sale</a></li>
                                    <li><a href="javascript:void(0);">Sold Properties</a></li>
                                    <li><a href="javascript:void(0);">Open Homes</a></li>
                                    <li><a href="javascript:void(0);">Sale Property Alert</a></li>
                                </ul>

                            </div>
                            <div class="span2">
                                <p>About Us</p>
                                <ul>
                                    <li><a href="javascript:void(0);">Home Page</a></li>
                                    <li><a href="javascript:void(0);">Company Profile</a></li>
                                    <li><a href="javascript:void(0);">Staff Profiles</a></li>
                                    <li><a href="javascript:void(0);">Contact Us</a></li>  
                                </ul>
                            </div>
                            <div class="span2">
                                <p>Selling</p>
                                <ul>
                                    <li><a href="javascript:void(0);">Selling your Home</a></li>
                                    <li><a href="javascript:void(0);">Request Market Appraisal</a></li>
                                    <li><a href="javascript:void(0);">Commercial For Sale</a></li>
                                    <li><a href="javascript:void(0);">Request Market Appraisal</a></li>
                                </ul>
                            </div>
                            <div class="span4">
                                <div>
                                    <p>Our Tweets<i class="icon-twitter pull-right"></i></p>
                                    <div class="tweet"></div>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span12 contact-info">
                        <span class="span9">
                            1253 Spadina Avn, Toronto ON - Canada â€¢ <strong>Phone:</strong> 1800.43.PEACH â€¢ <a href="mailto:companyName@email.com"> business@email.com</a>
                        </span>

                        <ul class="span3 social-network">
                            <li><a href="javascript:void(0)"><i class="icon-linkedin-sign"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="icon-pinterest-sign"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="icon-twitter-sign"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="icon-facebook-sign"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="icon-google-plus-sign"></i></a></li>
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                </div> end .row-fluid 
            </div>  end .container-fluid -->
        </footer>
        <!-- end footer -->

        <!--[if !lte IE 6]><!-->
        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery.min.js"><\/script>')</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="js/libs/jquery.ui.min.js"><\/script>')</script>

        <!-- RECOMMENDED: For (IE6 - IE8) CSS3 pseudo-classes and attribute selectors -->
        <!--[if lt IE 9]> 
           <script src="js/include/selectivizr.min.js"></script> 					
        <![endif]-->

        <script src="js/libs/jquery.ui.touch-punch.min.js"></script>				<!-- REQUIRED:  A small hack that enables the use of touch events on mobile -->

        <!-- Add 'http:' for testing locally -->
<!--        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>-->

        <script src="js/menu/jquery.ct.3LevelAccordion.min.js"></script>     		<!-- REQUIRED: Accordion Menu with filter-->
        <script src="js/slider/jquery.responsivethumbnailgallery.min.js"></script>  <!-- REQUIRED: Responsive Gallery Plugin -->
        <script src="js/slider/jquery.onebyone.min.js"></script>     				<!-- REQUIRED: Slider Plugin -->
        <script src="js/slider/jquery.touchwipe.min.js"></script>    				<!-- REQUIRED: Plugin to make Slider Plugin work on Touch Devices -->
        <script src="js/slider/jquery.onebyone.min.js"></script>     				<!-- REQUIRED: Slider Plugin -->
        <script src="js/slider/jquery.touchwipe.min.js"></script>    				<!-- REQUIRED: Plugin to make Slider Plugin work on Touch Devices -->

        <script src="js/include/jquery.fitvids.min.js"></script>     		 		<!-- RECOMMENDED: Responsive videos -->			
        <script src="js/include/jquery.tweet.min.js"></script>     		 			<!-- OPTIONAL: Twitter display plugin -->
        <script src="js/include/jquery.equal-heights.min.js"></script> 	 			<!-- RECOMMENDED: Plugin to keep div heights consistant -->	
        <script src="js/include/jquery.todo.min.js"></script>					 	<!-- REQUIRED: Plugin to save "add to short list" items -->
        <script src="js/include/jquery.pubsub.min.js"></script>				 		<!-- REQUIRED: (If todo.js is in use) Dependent with todo.js -->
        <script src="js/include/jquery.select2.min.js"></script>			 		<!-- RECOMMENDED: Custom jQuery/searchable dropdowns -->	
        <script src="js/include/bootstrap.min.js"></script> 			 			<!-- REQUIRED: For BootStrap build -->

        <script src="js/config.js"></script>						 				<!-- DO NOT REMOVE: Contains major plugin initiations and functions -->
        <!--<![endif]-->

    </body>


</html>
