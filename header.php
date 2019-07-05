<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akina
 */
?>
<?php header('X-Frame-Options: SAMEORIGIN'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title itemprop="name"><?php global $page, $paged;wp_title( '-', true, 'right' );
bloginfo( 'name' );$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) echo " - $site_description";if ( $paged >= 2 || $page >= 2 ) echo ' - ' . sprintf( __( '第 %s 页'), max( $paged, $page ) );?>
</title>
<?php
if (akina_option('akina_meta') == true) {
	$keywords = '';
	$description = '';
	if ( is_singular() ) {
		$keywords = '';
		$tags = get_the_tags();
		$categories = get_the_category();
		if ($tags) {
			foreach($tags as $tag) {
				$keywords .= $tag->name . ','; 
			};
		};
		if ($categories) {
			foreach($categories as $category) {
				$keywords .= $category->name . ','; 
			};
		};
		$description = mb_strimwidth( str_replace("\r\n", '', strip_tags($post->post_content)), 0, 240, '…');
	} else {
		$keywords = akina_option('akina_meta_keywords');
		$description = akina_option('akina_meta_description');
	};
?>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<link rel="shortcut icon" href="<?php echo akina_option('favicon_link', ''); ?>"/> 
<meta http-equiv="x-dns-prefetch-control" content="on">
<?php wp_head(); ?>
<script type="text/javascript">
if (!!window.ActiveXObject || "ActiveXObject" in window) { //is IE?
  alert('IE已经OUT啦，还不换Chrome?');
window.location.replace("https://www.google.cn/intl/zh-CN/chrome/");
}
</script>
<?php if(akina_option('google_analytics_id', '')):?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo akina_option('google_analytics_id', ''); ?>"></script>
<script>
window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag('js',new Date());gtag('config','<?php echo akina_option('google_analytics_id', ''); ?>');
</script>
<?php endif; ?>
</head>
<body <?php body_class(); ?>>
    <div class="scrollbar" id="bar"></div>
	<section id="main-container">
		<?php 
		if(!akina_option('head_focus')){ 
		$filter = akina_option('focus_img_filter');
		?>
		<div class="headertop <?php echo $filter; ?>">
	 <script>
	 var visible="visible";
	 var left=0;
	 var ope=false;
	 window.onload=function(){
	     document.getElementById('video-btn').onclick=function (){
	     if(visible=="visible")
	     {
	         visible="hidden";
	     }else{
	         visible="visible";
	     }
	     try{
     banner_wave_1.style="left: "+left+"px; visibility: "+visible+";";
     }catch(Error){}
     try{
     banner_wave_2.style="left: "+(left+80)+"px; visibility: "+visible+";";
     }catch(Error){}
	     };   
	 };
     function mainFunc(){
     try{
     banner_wave_1.style="left: "+left+"px; visibility: "+visible+";";
     }catch(Error){}
     try{
     banner_wave_2.style="left: "+(left+80)+"px; visibility: "+visible+";";
     }catch(Error){}
     if(left>=-800 && !ope)
     {
    left-=3;
    }else{
    ope=true;
    left+=3;
    if(left>=0)
    {
        ope=false;
    }
    }
    }
    this.setInterval(mainFunc,150);
    
</script>
            <div id="banner_wave_1"></div>
            <div id="banner_wave_2"></div>
			<?php get_template_part('layouts/imgbox'); ?>
<style>
  #banner_wave_1,#banner_wave_2 {
	z-index:54;
}
</style>
<script type="text/javascript">
function headertop_down () {
  var coverOffset = $('#content').offset().top
  $('html,body').animate({
    scrollTop: coverOffset
  }, 600)
}

</script>
<div class="headertop-down faa-float animated" onclick="headertop_down()">
    <span>
      <i class="fa fa-chevron-down" aria-hidden="true">
      </i>
    </span>
  </div>
		</div>
		<?php } ?>
		<div id="page" class="site wrapper">
			<header class="site-header no-select" role="banner">
				<div class="site-top">
					<div class="site-branding">
						<?php if (akina_option('akina_logo')){ ?>
						<div class="site-title">
							<a href="<?php bloginfo('url');?>" ><img src="<?php echo akina_option('akina_logo'); ?>"></a>
						</div>
						<?php }else{ ?>
						<span class="site-title">
							<span class="logolink serif">
								<a href="<?php bloginfo('url');?>">
									<span class="site-name"><?php echo akina_option('site_name', ''); ?></span>
								</a>
							</span>
						</span>	
						<?php } ?><!-- logo end -->
					</div><!-- .site-branding -->
					<?php header_user_menu(); if(akina_option('top_search') == 'yes') { ?>
					<div class="searchbox"><i class="iconfont js-toggle-search iconsearch icon-search"></i></div>
					<?php } ?>
					<div class="lower"><?php if(!akina_option('shownav')){ ?>
						<div id="show-nav" class="showNav">
							<div class="line line1"></div>
							<div class="line line2"></div>
							<div class="line line3"></div>
						</div><?php } ?>
						<nav><?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?></nav><!-- #site-navigation -->
					</div>	
				</div>
			</header><!-- #masthead -->
			<?php if (get_post_meta(get_the_ID(), 'cover_type', true) == 'hls') {
                the_video_headPattern_hls();
            } elseif (get_post_meta(get_the_ID(), 'cover_type', true) == 'normal') { 
                the_video_headPattern_normal();
            }else {
                the_headPattern();
            } ?>
		    <div id="content" class="site-content">
