<?php get_header(); ?>

    <div id="slider1_container" style="position: relative; margin: 0 auto;
            top: 0px; left: 0px; width: 1440px; height: 700px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1440px;
                height: 700px; overflow: hidden;">
            <div>
            	<img u="image" src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" />
            	<div class="hero" id="f1">
               
                    <p id="f1-l1">Selamat Datang</p>
                    <p id="f1-l2">di <span id="f1-l2-b">TANIKAYA</span></p>
                    <p id="f1-l3">Kami adalah penyedia alat dan mesin pertanian, perkebunan,
                    peternakan, perikanan, dan industri kecil & menengah dengan 
                    jaminan kualitas dan garansi.</p>
                    <div id="f1-b1">
                        <div id="f1-b1-1" class="hero-btn">TENTANG KAMI</div>
                        <div id="f1-b1-2" class="hero-btn">JELAJAHI PRODUK KAMI</div>
                    </div>
                    
                    <div id="f1-c1">
                    	<span id="hphone">
                        	<div>PHONE</div>
                            <div>+62 21 78830995</div>
                        </span>
                        <span id="hfax">
                        	<div>FACSIMILE</div>
                            <div>+62 21 78830994</div>
                        </span>
                        <span id="hbbm">
                        	<div>BBM PIN</div>
                            <div>7D64B60C</div>
                        </span>
                    </div>
                </div> 
            </div>
            <!--<div><img u="image" src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" /><div class="findout" id="f2"></div></div>
            <div><img u="image" src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" /><div class="findout" id="f3"></div></div>-->
        </div>
        
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb001" style="position: absolute; bottom: 26px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 10px; HEIGHT: 10px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora001l" style="width: 18px; height: 31px; top: 300px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora001r" style="width: 18px; height: 31px; top: 300px; right: 8px">
        </span>
    </div>
    
    
    <!-- content -->
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
        	<div class="content-title">Produk <b>Terbaru</b></div>
            <?php echo do_shortcode('[recent_products per_page="12" columns="3"]'); ?>
        </div>
    </div>
    <div class="grey-bg row">
    	<div class="col-md-10 col-md-offset-1">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="content-title">Berita <b>Terkini</b></div>
                </div>
            </div>
            <div class="row">
                
				<?php
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            	<?php echo get_the_post_thumbnail( $recent["ID"], array(300,200) ); ?>
                            </div>
                        	<p>
                            	<a href="<?php echo get_permalink($recent["ID"]);?>">
									<?php echo $recent["post_title"];?>
                                </a> 
                            </p>
                         </div>
                       <?php     
                    }
                ?>
                
             </div>
         </div>
    </div>

<?php get_footer(); ?>