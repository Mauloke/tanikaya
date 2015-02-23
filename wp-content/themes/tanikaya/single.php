<?php get_header(); ?>
<div class="row">
	<div class="col-md-12" id="archive-head-container">
        <div id="backdrop-archive">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="jumbotron">
                      <h1>Berita</h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<?php
$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
?>

    <div id="blog" class="container">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="post row news">
            <div class="post_date col-md-12">
                <?php the_date() ?>
            </div>
			<div class="post_title col-md-12"><h2><?php the_title(); ?></h2></div>
			<div class="entry col-md-12">	
				<?php the_content(); ?>

				<p class="posted">Posted in <?php the_category(', ') ?></p>
			</div>
		</div>

		<?php endwhile; ?>
		
		<div class="navigation">
		<?php posts_nav_link(); ?>
		</div>
		
		<?php else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>
	</div>

<!-- End Loop -->
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
