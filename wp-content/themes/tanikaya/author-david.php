<?php get_header(); ?>
<div id="auwrapper" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/images/header-david.png) no-repeat top center, url(<?php bloginfo('stylesheet_directory'); ?>/images/bg-auth-bottom.png) no-repeat bottom center;">
    <div class="aucontainer">
    <div id="auheader">
    	<div id="back"></div>
    	<div id="search">
        	<?php get_search_form( true ); ?>
        </div>
    </div>
    <?php get_sidebar(); ?>

<!-- The Loop -->

    <div id="blog">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<div class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="postmetadata">
				<?php comments_popup_link('0', '1', '%'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
		</div>
        <div class="post_date">
        	Posted on <div class="d"><?php the_date() ?></div>
        </div>
		
			<div class="entry">	
				<?php the_post_thumbnail(); ?>
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

    </div>
</div>
</body>
</html>
<script language="javascript">
jQuery(document).ready(function($) {
	$('html').niceScroll({cursorcolor:"#000"});
	$('.scroll').niceScroll({background:"#fff",cursoropacitymin:0.2,cursoropacitymax:0.7,railalign: 'left',cursorwidth:'10px'});
	$('#back').click(function(){
	  window.location = "<?php echo home_url(); ?>";
	});
});
</script>
