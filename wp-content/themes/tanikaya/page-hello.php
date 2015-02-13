<?php get_header(); ?>
<div class="backdrop" style="height:900px;">
</div>
	<div id="blog">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div><img src="<?php bloginfo('template_url'); ?>/images/helo_01.jpg" /></div>
		<div class="post">
		<!--<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->


			<div class="entry">
            
			<?php the_content(); ?>

				

			</div>

		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>


<?php get_footer(); ?>