<?php get_header(); ?>
        <div id="backdrop-produk">
        </div>


<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
    <div id="blog" class="container">
    	<div class="row">
        	<div class="col-md-12">
			<?php woocommerce_content(); ?>
            </div>
        </div>
	</div>

<!-- End Loop -->
