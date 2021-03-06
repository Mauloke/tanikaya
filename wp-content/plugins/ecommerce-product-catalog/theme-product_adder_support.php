<?php
/**
 * Plugin compatibility checker
 *
 * Here current theme is checked for compatibility with WP PRODUCT ADDER.
 *
 * @version		1.1.2
 * @package		ecommerce-product-catalog/functions
 * @author 		Norbert Dreszer
 */
 
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function al_product_adder_admin_notices_styles() {
if (current_user_can('activate_plugins')) {
	if (! is_advanced_mode_forced() ) {
		$template = get_option( 'template' );
		$integration_type = get_integration_type();
		if ( ! empty( $_GET['hide_al_product_adder_support_check'] ) ) {
			update_option( 'product_adder_theme_support_check', $template );
			return;
		}
		if ( get_option( 'product_adder_theme_support_check' ) !== $template && current_user_can('delete_others_products')) {		
			product_adder_theme_check_notice();
		}
	} 
	if (is_ic_admin_page()) {
		if ( false === get_transient( 'implecode_hide_plugin_review_info' ) && ic_products_count() > 5) {
			implecode_plugin_review_notice();
		}
	}
}
}	
add_action( 'admin_notices', 'al_product_adder_admin_notices_styles' );	

function product_adder_theme_check_notice() { 
if (is_integration_mode_selected() && get_integration_type() == 'simple') { ?>
<div id="implecode_message" class="updated product-adder-message messages-connect">
	<div class="squeezer">
		<h4><?php _e( '<strong>You are currently using eCommerce Product Catalog in Simple Mode</strong> &#8211; to switch to Advanced Mode you probably need Theme Integration.', 'al-ecommerce-product-catalog' ); ?></h4>
		<p class="submit"><a href="http://implecode.com/wordpress/product-catalog/theme-integration-guide/#cam=simple-mode&key=top-message" target="_blank" class="button-primary"><?php _e( 'Theme Integration Guide', 'al-ecommerce-product-catalog' ); ?></a> <a class="skip button" href="<?php echo admin_url('edit.php?post_type=al_product&page=product-settings.php&tab=product-settings&submenu=support')?>"><?php _e( 'Plugin Support', 'al-ecommerce-product-catalog' ); ?></a><a class="skip button" href="<?php echo add_query_arg( 'hide_al_product_adder_support_check', 'true' ); ?>"><?php _e( 'I know, don\'t bug me', 'al-ecommerce-product-catalog' ); ?></a></p>
	</div>
</div><div class="clear"></div><?php
}
else if (is_integration_mode_selected() && get_integration_type() == 'advanced') { ?>
<div id="implecode_message" class="updated product-adder-message messages-connect">
	<div class="squeezer">
		<h4><?php _e( '<strong>You are currently using eCommerce Product Catalog in Advanced Mode without the integration file</strong> &#8211; please see the guide for quick integration file creation.', 'al-ecommerce-product-catalog' ); ?></h4>
		<p class="submit"><a href="http://implecode.com/wordpress/product-catalog/theme-integration-guide/#cam=advanced-mode&key=top-message" target="_blank" class="button-primary"><?php _e( 'Theme Integration Guide', 'al-ecommerce-product-catalog' ); ?></a> <a class="skip button" href="<?php echo admin_url('edit.php?post_type=al_product&page=product-settings.php&tab=product-settings&submenu=support')?>"><?php _e( 'Plugin Support', 'al-ecommerce-product-catalog' ); ?></a><a class="skip button" href="<?php echo add_query_arg( 'hide_al_product_adder_support_check', 'true' ); ?>"><?php _e( 'I know, don\'t bug me', 'al-ecommerce-product-catalog' ); ?></a></p>
	</div>
</div><?php
}
else { 
$product_id = sample_product_id();
$sample_product_url = get_permalink($product_id); 
if (! $sample_product_url || get_post_status( $product_id ) != 'publish') {
$sample_product_url = add_query_arg( 'create_sample_product_page', 'true' );
} ?>
<div id="implecode_message" class="error product-adder-message messages-connect">
	<div class="squeezer">
		<h4><?php _e( '<strong>Your theme does not declare eCommerce Product Catalog support</strong> &#8211; please proceed to sample product page where automatic layout adjustment can be done.', 'al-ecommerce-product-catalog' ); ?></h4>
		<p class="submit"><a href="<?php echo $sample_product_url ?>" class="button-primary"><?php _e( 'Sample Product Page', 'al-ecommerce-product-catalog' ); ?></a><a href="http://implecode.com/wordpress/product-catalog/theme-integration-guide/#cam=default-mode&key=top-message" target="_blank" class="button"><?php _e( 'Theme Integration Guide', 'al-ecommerce-product-catalog' ); ?></a> <a class="skip button" href="<?php echo admin_url('edit.php?post_type=al_product&page=product-settings.php&tab=product-settings&submenu=support')?>"><?php _e( 'Plugin Support', 'al-ecommerce-product-catalog' ); ?></a><a class="skip button" href="<?php echo add_query_arg( 'hide_al_product_adder_support_check', 'true' ); ?>"><?php _e( 'Hide this notice', 'al-ecommerce-product-catalog' ); ?></a></p>
	</div>
</div><?php
}
}

function implecode_product_catalog_links( $links ) {
$links[] = '<a href="'. get_admin_url(null, 'edit.php?post_type=al_product&page=product-settings.php') .'">Settings</a>';
$links[] = '<a href="http://implecode.com/wordpress/plugins/premium-support/#cam=catalog-settings-link&key=support-link" target="_blank">Premium Support</a>';
return array_reverse ($links);
}

add_filter( 'plugin_action_links_'.plugin_basename(AL_PLUGIN_MAIN_FILE), 'implecode_product_catalog_links' );


function implecode_plugin_review_notice() { ?>
<div class="update-nag implecode-review"><strong><?php _e('Rate this Plugin!', 'al-ecommerce-product-catalog') ?></strong> <?php echo sprintf(__('Please <a target="_blank" href="%s">rate</a> %s and tell me if it works for you or not. It really helps development.', 'al-ecommerce-product-catalog'),'https://wordpress.org/support/view/plugin-reviews/ecommerce-product-catalog#postform', 'eCommerce Product Catalog') ?> <span class="dashicons dashicons-no"></span></div>
<div class="update-nag implecode-review-thanks" style="display: none"><?php echo sprintf(__('Thank you for <a target="_blank" href="%s">your rating</a>! I really appreciate your feedback.', 'al-ecommerce-product-catalog'),'https://wordpress.org/support/view/plugin-reviews/ecommerce-product-catalog#postform') ?> <span class="dashicons dashicons-yes"></span></div><?php	
}

function implecode_plugin_review_notice_hide($forever = false) {
if ($forever) {
	set_transient( 'implecode_hide_plugin_review_info', 1, 0 );
}
else {
	$count = get_option('implecode_hide_plugin_review_info_count', 1);
	$count = ($count < 6) ? $count : 0;
	set_transient( 'implecode_hide_plugin_review_info', 1, 60*60*24*14*$count );
	$count += 1;
	update_option( 'implecode_hide_plugin_review_info_count', $count);
}
}

function ajax_hide_review_notice() {
$forever = isset($_POST['forever']) ? true : false;
implecode_plugin_review_notice_hide($forever);
}

add_action( 'wp_ajax_hide_review_notice', 'ajax_hide_review_notice' );

?>