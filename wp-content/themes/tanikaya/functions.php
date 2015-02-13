<?php
//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

//Register area for custom menu
function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);



function fancybox()
{
	wp_register_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ) );
	wp_enqueue_script( 'fancybox' );
}

function jssor()
{
	wp_register_script( 'jssor', get_template_directory_uri() . '/js/jssor.js', array( 'jquery' ) );
	wp_enqueue_script( 'jssor' );
}

function jssor_slider()
{
	wp_register_script( 'jssor_slider', get_template_directory_uri() . '/js/jssor.slider.js', array( 'jquery' ) );
	wp_enqueue_script( 'jssor_slider' );
}


add_action( 'wp_enqueue_script', 'load_jquery' );

add_action( 'wp_enqueue_scripts', 'fancybox' );
add_action( 'wp_enqueue_scripts', 'jssor' );
add_action( 'wp_enqueue_scripts', 'jssor_slider' );
function load_jquery() {
    wp_enqueue_script( 'jquery' );
}

add_filter('show_admin_bar', '__return_false');




function add_rewrite_rules($rules) {
    $newrules['partner/([^/]+)/?$'] = 'index.php?author_name=$matches[1]';

    $rules = $newrules;
    return $rules;
}
function flushRules() {
global $wp_rewrite;
$wp_rewrite->flush_rules();
}
//add_filter('rewrite_rules_array', 'add_rewrite_rules');
add_filter('init','flushRules');

function my_new_contactmethods( $contactmethods ) {
// Add Twitter
$contactmethods['twitter'] = 'Twitter';
//add Facebook
 
return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);

function swg_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
		</div>
<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
			?>
		</div>

		<?php comment_text() ?>

		<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
<?php
        }

function paginate() {
global $wp_query, $wp_rewrite;
$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

$pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'show_all' => true,
    'type' => 'list',
    'next_text' => '&raquo;',
    'prev_text' => '&laquo;'
    );

if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 'page', get_pagenum_link( 1 ) ) ) . '&page=%#%/', 'paged' );

if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

echo paginate_links( $pagination );
}


function twentyeleven_content_nav( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
?>
