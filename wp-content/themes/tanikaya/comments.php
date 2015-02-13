<?php

if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<ol class="commentlist">
			<?php wp_list_comments('type=comment&callback=swg_comment'); ?>
		</ol><!-- .commentlist -->

		

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments">Comments are closed.</p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->