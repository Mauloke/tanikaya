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
<!-- The Loop -->

    <div id="blog" class="container">
    	<div class="post row news">
			<?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            
            
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                     <?php the_post_thumbnail(); ?>
               </div>
                  <div class="recent-date"><?php the_date() ?></div>
                  <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                  </a> 
                  
                          
            </div>                    
                            
		

		<?php endwhile; ?>
		</div>
		<div class="navigation">
		<?php posts_nav_link(); ?>
		</div>
		
		<?php else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>
	</div>

<!-- End Loop -->


<?php get_footer(); ?>