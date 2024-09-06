<?php
/**
 * Template Name: Page (Full width)
 * Description: Page template full width.
 *
 */

get_header();

the_post();
?>

    <section class="title-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 m-auto">
                    <div class="header-content text-center">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

get_footer();
