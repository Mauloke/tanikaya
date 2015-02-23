<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<div class="row">
	<div class="col-md-12" id="produk-archive-head-container">
        <div id="backdrop-produk-archive">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="jumbotron">
                      <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

                            <h1>
							<?php
								/**
								 * woocommerce_before_main_content hook
								 *
								 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
								 * @hooked woocommerce_breadcrumb - 20
								 */
								do_action( 'woocommerce_before_main_content' );
							?>
    						</h1>
                
                        <?php endif; ?>
                        <p>
                        	<?php do_action( 'woocommerce_archive_description' ); ?>
						</p>
                      <p><a class="btn btn-primary btn-lg" href="#" role="button">DOWNLOAD BROSUR</a></p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
	

		

	<div class="current products row">
		<div class="container">
		<div class="row">
		<?php if ( have_posts() ) : ?>
			<h2>
			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				 remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
				do_action( 'woocommerce_before_shop_loop' );
			?>
			</h2>
			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
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

<?php get_footer( 'shop' ); ?>
