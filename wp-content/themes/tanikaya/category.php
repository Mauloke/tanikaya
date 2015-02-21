<?php get_header(); ?>
<div class="row">
	<div class="col-md-12" id="archive-head-container">
        <div id="backdrop-archive">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="jumbotron">
                      <h1><?php single_cat_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<!-- The Loop -->

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

<?php get_footer(); ?>