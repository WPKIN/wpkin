<?php
/**
 * Template Name: Page (Offers)
 * Description: Page template Offers.
 *
 */

get_header();

the_post();
?>
<div class="wt-page-container" id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'wpkin' ),
			'after'  => '</div>',
		) );
		edit_post_link( __( 'Edit', 'wpkin' ), '<span class="edit-link">', '</span>' );
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();
