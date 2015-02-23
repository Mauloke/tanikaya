<?php get_header(); ?>
<div class="row">
	<div class="col-md-12" id="tentang-head-container">
        <div id="backdrop-kontak">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="jumbotron">
                      <h1>Kontak Kami</h1>
                      <p><a class="btn btn-primary btn-lg" href="#" role="button">DOWNLOAD COMPANY PROFILE</a></p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
	<div id="contact" class="container">
		<div class="post row">


			<div class="entry col-md-6">
            <p>
            Hubungi kami untuk pertanyaan seputar produk, layanan, maupun pengalaman TANIKAYA sebagai penyedia alat dan mesin pertanian, perkebunan, peternakan, perikanan, dan industri kecil dan menengah.
            </p>
            <div class="row">
            <?php echo do_shortcode('[contact-form-7 id="84" title="Contact form 1"]'); ?>
            </div>
			</div>
            <div class="col-md-6">
            </div>

		</div>
		


</div>

<div class="grey-bg row">
    	<div class="col-md-10 col-md-offset-1">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="content-title">Berita <b>Terkini</b></div>
                </div>
            </div>
            <div id="recent-news" class="row news">
                
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