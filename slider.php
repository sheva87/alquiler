<!-- Slider start
            <div id="slide-wrapper">

                <div id="banner">  				
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide1.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1" data-animate="fadeInLeftBig">Property Name</span>								
                        <span class="slide5Txt2" data-animate="fadeInRightBig">$000,000 | Location, State</span>																						
                    </div>	
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide2.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1">Property Name</span>								
                        <span class="slide5Txt2">$000,000 | Location, State</span>														
                    </div>	
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide3.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1">Property Name</span>								
                        <span class="slide5Txt2">$000,000 | Location, State</span>													
                    </div>	
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide4.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1">Property Name</span>								
                        <span class="slide5Txt2">$000,000 | Location, State</span>														
                    </div>	
                </div>    

            </div>	 end slider 		
-->

<!-- Slider start-->
            <div id="slide-wrapper">

                <div id="banner">  				
                    <?php
                    
                    $rsvalidar="SELECT count(*) total FROM banner WHERE nestado ='1'";
                    $validar=  mysql_query($rsvalidar);
                    $rsvalidar=  mysql_fetch_array($validar);
                    $total = $rsvalidar['total'];
                    
                    if ($total=='0'){ ?>
                    
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide1.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1" data-animate="fadeInLeftBig">Property Name</span>								
                        <span class="slide5Txt2" data-animate="fadeInRightBig">$000,000 | Location, State</span>																						
                    </div>	
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide2.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1">Property Name</span>								
                        <span class="slide5Txt2">$000,000 | Location, State</span>														
                    </div>	
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide3.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1">Property Name</span>								
                        <span class="slide5Txt2">$000,000 | Location, State</span>													
                    </div>	
                    <div class="oneByOne_item">                                 	
                        <img src="img/demo/home-page/slide4.jpg" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1">Property Name</span>								
                        <span class="slide5Txt2">$000,000 | Location, State</span>														
                    </div>	
                    
                    <?php }else{                     
                    
                    $rsslider="SELECT cdescripcion,cimg FROM banner WHERE nestado ='1'";
                    $slider=  mysql_query($rsslider);
                    while ($rsslider=  mysql_fetch_array($slider)){
                    ?>
                    <div class="oneByOne_item">                                 	
                        <img src="intranet/imagenes/banner/<?php echo $rsslider['cimg']?>" alt="Placeholder" class="bigImage">
                        <span class="slide5Txt1" data-animate="fadeInLeftBig"><?php echo $rsslider['cdescripcion']?></span>								
                        																						
                    </div>
                    <?php }} ?>
                </div>    

            </div>	<!-- end slider -->		  	