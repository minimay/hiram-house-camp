<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section style="margin-bottom: 80px;">
<style>
	.vc_custom_1516591127012 {
    padding-top: 40px !important;
    padding-bottom: 100px !important;
    background-image: url(http://564.703.mwp.accessdomain.com/wp-content/uploads/2018/01/day-camp-color-wars.jpg) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
	}
	.vc_custom_1516162465136 {
    margin-top: -60px !important;
    background-image: url(http://564.703.mwp.accessdomain.com/wp-content/uploads/2018/01/fuzzy-bottom.png?id=80) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}
</style>
	<?php
$id = 1030;
$p = get_page($id);
echo apply_filters('the_content', $p->post_content);
?>	
</section>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
