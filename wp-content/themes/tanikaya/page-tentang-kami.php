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


<?php get_footer(); ?>