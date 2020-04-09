<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
<!-- end mailing list no header-->
<?php if (is_page(981)) {
//do nothing
} else { 
$id = 183;
$p = get_page($id);
echo apply_filters('the_content', $p->post_content);
} ?>	
		</div><!-- .container -->
	</div><!-- #content -->

    <?php get_template_part( 'footer-widget' ); ?>

<!-- end mailing list no header-->
	<?php if (is_page(981)) {
	//do nothing
} else { ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
            <div class="site-info text-uppercase">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php } ?>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
