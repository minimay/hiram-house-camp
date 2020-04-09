<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section style="margin-bottom: 80px;">
<style>
	.vc_custom_1516591127012 {
    padding-top: 40px !important;
    padding-bottom: 100px !important;
    background-image: url(https://hiramhousecamp.org/wp-content/uploads/2018/02/facility.jpg) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
	}
	.vc_custom_1516162465136 {
    margin-top: -60px !important;
    background-image: url(https://hiramhousecamp.org/wp-content/uploads/2018/01/fuzzy-bottom.png?id=80) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}
</style>
<?php
$id = 608;
$p = get_page($id);
echo apply_filters('the_content', $p->post_content);
?>	
</section>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
		<main id="main" class="site-main" role="main">


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
