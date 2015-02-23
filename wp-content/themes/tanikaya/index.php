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
    
    
    
    </div>
    
    
    
    <div class="row" id="recent-product">
    	<div class="col-md-10 col-md-offset-1">
        	<div class="col-md-12">
            	<div class="content-title row">Produk <b>Terbaru</b></div>
            </div>
        </div>
            
            <!-- start produk -->
            <?php //echo do_shortcode('[recent_products per_page="12" columns="3"]'); ?>
            <div class="row">
            <div class="col-md-12">
            <div u="slides" style="cursor: move; overflow: hidden;" class="row">

			<?php
                $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
    
                       <div class="col-sm-6 col-md-4">    
    
                            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    						<div class="thumbnail">
                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
    						</div>
                                <h3><?php the_title(); ?></h3>
    
                                   <span class="price"><?php echo $product->get_price_html(); ?></span>
    
                            </a>
    
                            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                        </div><!-- /span3 -->
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
    
        </div>
        </div>
        </div>
        <!-- end product -->
        </div>
    
    <div class="grey-bg row" id="recent-news">
    	<div class="col-md-10 col-md-offset-1">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="content-title">Berita <b>Terkini</b></div>
                </div>
            </div>
            <div class="row news">
                
				<?php
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                            	<?php echo get_the_post_thumbnail( $recent["ID"], array(300,200) ); ?>
                            </div>
                        	<div class="recent-date"><?php echo date('j F Y', strtotime($recent["post_date"]));?></div>
                            <a href="<?php echo get_permalink($recent["ID"]);?>">
                                <?php echo $recent["post_title"];?>
                            </a> 
                            
                         </div>
                       <?php     
                    }
                ?>
                
             </div>
         </div>
    </div>

<?php get_footer(); ?>