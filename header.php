<?php
/**
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html lang="en-US" prefix="og: //ogp.me/ns# fb: //ogp.me/ns/fb#">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="//gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5GXD8B9');</script>
<!-- End Google Tag Manager -->
<script type="text/javascript">
<!--//--><![CDATA[//><!--
(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga");ga("create", "UA-9370828-6", {"cookieDomain":"auto"});ga("send", "pageview");
//--><!]]>
</script>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GXD8B9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<!-- end mailing list no header-->
	<?php if (is_page(981)) {
	//do nothing
} else { ?>
	<header id="masthead" class="site-header navbar-static-top" role="banner">
        <nav class="navbar navbar-dark p-0">
          <div class="navbar-brand">
					<div id="utility-holder">
						<a href="//hiramhousecamp.org/support-us/" id="donate-btn" class="btn btn-primary teal small text-uppercase">Donate</a>
						<a href="https://register.hiramhousecamp.org/user" class="btn btn-primary teal small text-uppercase">Log In</a>
						<?php echo do_shortcode("[timed-content-rule id=\"1150\"]<a href=\"//hiramhousecamp.org/contact-us/employment/\" class=\"btn btn-primary teal small text-uppercase\">Employment</a>[/timed-content-rule]"); ?>
						
					  <form role="search" method="get" class="search-form" style="display: inline-block;" action="//hiramhousecamp.org/">
						   <label>
							<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search">
						   </label>
						<button type="submit" class="search-submit"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x icon-background"></i><i class="fa fa-search fa-stack-1x li-icon"></i></span></button>
						</form>
						
						<?php wp_nav_menu( array(
						'menu' => 'Utility'
						) ); ?>
					</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
           	  </button>
			
               <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hiram-House-Camp-logo-bug.png" width="40" height="45" alt="Hiram House Camp"/></a>
					
            </div>
			
            </nav>
					<div class="container">
				<?php
				wp_nav_menu(array(
					'theme_location'    => 'primary',
					'container'       => 'div',
					'container_id'    => '',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav flex-row',
					'depth'           => 3,
					'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
					'walker'          => new wp_bootstrap_navwalker()
				));
				?>
			</div>
	</header><!-- #masthead -->
	<!-- end mailing list no header-->
	<?php } ?>
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo 'Wordpress + Bootstrap';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>
