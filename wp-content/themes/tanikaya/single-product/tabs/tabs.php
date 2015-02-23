<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs col-md-12">
		<ul class="nav nav-tabs" id="product-nav">
        <?php $counter=1; ?>
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<li <?php if($counter==1) {?>class="active"<?php } ?>>
					<a href="#tab-<?php echo $key ?>" role="tab"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
				</li>
			<?php $counter+=1; ?>
			<?php endforeach; ?>
		</ul>
    </div>
    <div class="tab-content col-md-12">
    <?php $counter=1; ?>
		<?php foreach ( $tabs as $key => $tab ) : ?>

			<div class="tab-pane<?php if($counter==1) {?> active<?php } ?>" id="tab-<?php echo $key ?>">
				<?php call_user_func( $tab['callback'], $key, $tab ) ?>
			</div>
			<?php $counter+=1; ?>
		<?php endforeach; ?>
	</div>

<?php endif; ?>
