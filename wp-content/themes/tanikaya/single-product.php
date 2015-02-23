<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<div id="backdrop-produk">
</div>
<div id="blog" class="container">
    <div class="row single-product">
        <div class="col-md-12">
        
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
		</div>
     </div>
     <div class="row">
        <div class="col-md-12">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
		</div>
     </div>
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

</div>

<div class="row grey-bg" id="recent-product">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-12">
            <div class="content-title row">Produk <b>Terbaru</b></div>
        </div>
    </div>
            
            <!-- start produk -->
            <?php //echo do_shortcode('[recent_products per_page="12" columns="3"]'); ?>
    <div class="col-md-10 col-md-offset-1">

    <?php
        $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 3, 'orderby' =>'date','order' => 'DESC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

               <div class="col-sm-6 col-md-4">    

                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="thumbnail">
                    	<div class="thumb-wrapper img-circle">
                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
                        </div>
                    </div>
                        <h3><?php the_title(); ?></h3>

                           <span class="price"><?php echo $product->get_price_html(); ?></span>

                    </a>

                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                </div><!-- /span3 -->
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

</div>
        <!-- end product -->
</div>
	<?php get_footer( 'shop' ); ?>
