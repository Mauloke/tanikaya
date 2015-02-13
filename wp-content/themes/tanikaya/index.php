<?php get_header(); ?>

    <div id="slider1_container" style="position: relative; margin: 0 auto;
            top: 0px; left: 0px; width: 1440px; height: 900px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1440px;
                height: 900px; overflow: hidden;">
            <div><img u="image" src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" /><div class="findout" id="f1"></div> </div>
            <div><img u="image" src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" /><div class="findout" id="f2"></div></div>
            <div><img u="image" src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" /><div class="findout" id="f3"></div></div>
        </div>
        
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb001" style="position: absolute; bottom: 26px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 10px; HEIGHT: 10px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora001l" style="width: 18px; height: 31px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora001r" style="width: 18px; height: 31px; top: 123px; right: 8px">
        </span>
    </div>
    
    
    <!-- content -->
    <div id="content" class="col-md-12">
    	<div id="content-wrapper">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="content-container1">
                    <h2>HELLO FROM HELENA</h2>
                    <div class="button_content"><div id="hello"></div></div>
                    <div class="content_box"><img src="<?php bloginfo('template_url'); ?>/images/content_01.jpg" /></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="content-container2">
                    <h2>WORK WITH YOU</h2>
                    <div class="button_content"><div id="work"></div></div>
                    <div class="content_box"><img src="<?php bloginfo('template_url'); ?>/images/content_02.jpg" /></div>
                </div>	
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="content-container1">
                    <h2>LIFE'S A CANVAS</h2>
                    <div class="button_content"><div id="life"></div></div>
                    <div class="content_box"><img src="<?php bloginfo('template_url'); ?>/images/content_03.jpg" /></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="content-container2">
                    <h2>HANGOUT WITH HELENA</h2>
                    <div class="content_box">
                        <div id="hangout">
                         <?php echo do_shortcode('[contact-form-7 id="48" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>