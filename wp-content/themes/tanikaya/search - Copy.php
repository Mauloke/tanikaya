<?php get_header(); ?>
<div id="auwrapper" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/images/archive.png) no-repeat top center, url(<?php bloginfo('stylesheet_directory'); ?>/images/bg-auth-bottom.png) no-repeat bottom center;">
    <div class="aucontainer">
    <div id="auheader">
    	<div id="back"></div>
    	<div id="search">
        	<?php get_search_form(true); ?>
        </div>
    </div>
    <?php get_sidebar(); ?>

<!-- The Loop -->

    <div id="blog">


		<?php if(have_posts()) : ?>
		
		<h2 class="pagetitle">Search Results for "<?php echo $s ?>"</h2>

 <?php
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }

    $temp = $wp_query;  // re-sets query
    $wp_query = null;   // re-sets query
    $args = array( 'post_type' => array('post', 'music', 'videos'), 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 10, 'paged' => $paged);
    $wp_query = new WP_Query();
    $wp_query->query( $args );
?>               

                <?php while (have_posts()) : the_post(); ?>

                        <div class="post" id="post-<?php the_ID(); ?>">

                                <div class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="postmetadata">
				<?php comments_popup_link('0', '1', '%'); ?>
		</div>
		<div class="post_date">
									Posted on <div class="d"><?php the_date() ?></div>
								</div>
								<div class="entry">
								<?php
                                // Support for "Search Excerpt" plugin
                                // http://fucoder.com/code/search-excerpt/
/*
                                if ( function_exists('the_excerpt') && is_search() ) {
                                        the_excerpt();
                                }
*/
the_content(); ?>
                                </div>
                                
                        </div>
                        
                        
                <?php endwhile; ?>

                <div class="navigation">
                        <?php paginate(); 
   $wp_query = null;
   $wp_query = $temp; // Reset ?>
                </div>
		
		<?php else: ?>
        <p><?php get_template_part( 'no-results', 'search' ); ?></p>

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