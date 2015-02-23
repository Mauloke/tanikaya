<?php get_header(); ?>
<div class="row">
	<div class="col-md-12" id="tentang-head-container">
        <div id="backdrop-tentang">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="jumbotron">
                      <h1>Tentang Kami</h1>
                      <p><a class="btn btn-primary btn-lg" href="#" role="button">DOWNLOAD COMPANY PROFILE</a></p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
	<div id="blog" class="container">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post row">
		<!--<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->


			<div class="entry col-md-12">
            
			<?php the_content(); ?>

				

			</div>

		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

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