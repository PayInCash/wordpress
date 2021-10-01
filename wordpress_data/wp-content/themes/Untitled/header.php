<?php
/**
* The header for our theme.
*
* @package TemplateToaster
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {display:inline;}
</style>
<![endif]-->
<style>
<?php $var = templatetoaster_theme_option('ttr_avatar_size');
if(!empty($var)){ 
?>
.ttr_comment_author{width : <?php echo TemplateToaster_theme_option('ttr_avatar_size')."px";?>;}
<?php 
$avtar = $var + 10;
} else {
$avtar = 10;
} ?>
.ttr_comment_text{width :calc(100% - <?php echo $avtar."px"?>);}
@media only screen and (max-width:991px){
.archive #ttr_page #ttr_content .products li.product:nth-child(4n+1){ float:left;width:calc(100%/4); clear:both !important;}
#ttr_page #ttr_content .products li.product:first-child,#ttr_page #ttr_content .products li.product{float:left;width:calc(100%/4);clear:none;}}
@media only screen and (max-width:767px){
.archive #ttr_page #ttr_content .products li.product:nth-child(1n+1){ float:left;width:calc(100%/1); clear:both !important;}
#ttr_page #ttr_content .products li.product:first-child,#ttr_page #ttr_content .products li.product{float:left;width:calc(100%/1);clear:none;}}
</style>
<?php wp_head(); ?>
</head>
<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
global $TemplateToaster_cssprefix;
$theme_path_content = get_template_directory_uri().'/content';
$pageClass = strtolower(preg_replace('/_page.php$/', '', get_page_template_slug()));
if(empty($pageClass) && is_home() || is_single() || is_category() || is_archive() || is_search()){$pageClass = "blog-wp";
}
if (strrchr($pageClass, '/')) {
$pageClass = substr(strrchr($pageClass, '/'), 1);
}
?>
<body <?php body_class($pageClass); ?>> 
<?php if(function_exists('wp_body_open')) {
wp_body_open();
}?> 
<?php if (TemplateToaster_theme_option('ttr_back_to_top')): ?>
<?php $gotopng = TemplateToaster_theme_option('ttr_icon_back_to_top');?>
<div class="totopshow">
<?php if(!empty($gotopng)): ?>
<a href="#" class="back-to-top">
<img alt="<?php esc_attr_e('Back to Top', 'Untitled'); ?>" src="<?php echo esc_url($gotopng); ?>">
</a>
<?php else : ?>
<a href="#" class="back-to-top">
<img alt="<?php esc_attr_e('Back to Top', 'Untitled'); ?>" src="<?php echo esc_url(get_template_directory_uri()).'/images/gototop0.png';?>">
</a>
<?php endif; ?>
</div>
<div class="margin_collapsetop"></div>
<?php endif; ?>
<div  class="margin_collapsetop"></div>
<div id="ttr_page" class="container">
<div class="ttr_banner_header">
<?php
if( is_active_sidebar( 'headerabovecolumn1'  ) || is_active_sidebar( 'headerabovecolumn2'  ) || is_active_sidebar( 'headerabovecolumn3'  ) || is_active_sidebar( 'headerabovecolumn4'  )):
?>
<div class="ttr_banner_header_inner_above_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_header_inner_above0 container row">
<?php if ( is_active_sidebar('headerabovecolumn1') ) : ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerabovecolumn2') ) : ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerabovecolumn3') ) : ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerabovecolumn4') ) : ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
<div class="remove_collapsing_margins"></div>
<?php $postid = ( isset( $post->ID ) ? get_the_ID() : NULL );
$var = get_post_meta ( $postid, 'ttr_page_head_checkbox', true );
if ($var == "true" || $var == ""):?>
<header id="ttr_header"<?php if ( get_header_image() ) : ?> style="background-image: url(<?php header_image(); ?>);background-position: center;"<?php endif; ?> >
<div class="margin_collapsetop"></div>
<div id="ttr_header_inner"<?php if ( get_header_image() ) : ?> style="background-image: url(<?php echo header_image(); ?>);background-position:  center;"<?php endif; ?> >
<div class="ttr_header_element_alignment container">
<div class="ttr_images_container">
</div>
</div>
<div class="ttr_images_container">
<?php if (TemplateToaster_theme_option("ttr_header_show_social_media_enable")):?>
<?php if (TemplateToaster_theme_option("ttr_header_facebook_enable")): ?>
<a href="<?php 
$facebook_url = TemplateToaster_theme_option("ttr_header_facebook_url");
echo $facebook_url;
?>" <?php if (TemplateToaster_theme_option("ttr_header_link_new_window_enable")){  echo 'target="_blank"';} else{echo 'target="_self"';} ?> class="ttr_header_facebook" <?php if(TemplateToaster_theme_option('ttr_header_no_follow')):?> rel="nofollow"<?php endif;?>>
<img class="" alt="headerfacebook" src="<?php echo TemplateToaster_theme_option('ttr_header_facebook'); ?>" />
</a>
<?php endif; ?>
<?php endif; ?>
<?php if (TemplateToaster_theme_option("ttr_header_show_social_media_enable")):?>
<?php if (TemplateToaster_theme_option("ttr_header_twitter_enable")): ?>
<a href="<?php 
$twitter_url = TemplateToaster_theme_option("ttr_header_twitter_url");
echo $twitter_url;
?>" <?php if (TemplateToaster_theme_option("ttr_header_link_new_window_enable")){  echo 'target="_blank"'; } else{echo 'target="_self"';}?> class="ttr_header_twitter" <?php if(TemplateToaster_theme_option(' ttr_header_no_follow')):?> rel="nofollow"<?php endif;?>>
<img class="" alt="headertwitter" src="<?php echo TemplateToaster_theme_option('ttr_header_twitter'); ?>" />
</a>
<?php endif; ?>
<?php endif; ?>
<div class="ttr_headershape01">
<div class="html_content"><p style="line-height:7.37em;"><span style="font-size:5.143em;">Joe's Coffee</span></p></div>
</div>
</div>
</div>
</header>
<?php endif; ?>
<div class="ttr_banner_header">
<?php
if( is_active_sidebar( 'headerbelowcolumn1'  ) || is_active_sidebar( 'headerbelowcolumn2'  ) || is_active_sidebar( 'headerbelowcolumn3'  ) || is_active_sidebar( 'headerbelowcolumn4'  )):
?>
<div class="ttr_banner_header_inner_below_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_header_inner_below0 container row">
<?php if ( is_active_sidebar('headerbelowcolumn1') ) : ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn2') ) : ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn3') ) : ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn4') ) : ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div><div class="ttr_banner_menu">
<?php
if( is_active_sidebar( 'menuabovecolumn1'  ) || is_active_sidebar( 'menuabovecolumn2'  ) || is_active_sidebar( 'menuabovecolumn3'  ) || is_active_sidebar( 'menuabovecolumn4'  )):
?>
<div class="ttr_banner_menu_inner_above_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_menu_inner_above0 container row">
<?php if ( is_active_sidebar('menuabovecolumn1') ) : ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menuabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menuabovecolumn2') ) : ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menuabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menuabovecolumn3') ) : ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menuabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menuabovecolumn4') ) : ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menuabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'MAWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
<div class="remove_collapsing_margins"></div>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
<div class="navigation-top">
<div class="wrap">
<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
</div><!-- .wrap -->
</div><!-- .navigation-top -->
<?php endif; ?>
<div class="ttr_banner_menu">
<?php
if( is_active_sidebar( 'menubelowcolumn1'  ) || is_active_sidebar( 'menubelowcolumn2'  ) || is_active_sidebar( 'menubelowcolumn3'  ) || is_active_sidebar( 'menubelowcolumn4'  )):
?>
<div class="ttr_banner_menu_inner_below_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_menu_inner_below0 container row">
<?php if ( is_active_sidebar('menubelowcolumn1') ) : ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menubelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menubelowcolumn2') ) : ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menubelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menubelowcolumn3') ) : ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menubelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('menubelowcolumn4') ) : ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="menubelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'MBWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div><div class="ttr_banner_slideshow">
<?php
if( is_active_sidebar( 'slideshowabovecolumn1'  ) || is_active_sidebar( 'slideshowabovecolumn2'  ) || is_active_sidebar( 'slideshowabovecolumn3'  ) || is_active_sidebar( 'slideshowabovecolumn4'  )):
?>
<div class="ttr_banner_slideshow_inner_above_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_slideshow_inner_above0 container row">
<?php if ( is_active_sidebar('slideshowabovecolumn1') ) : ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('slideshowabovecolumn2') ) : ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('slideshowabovecolumn3') ) : ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('slideshowabovecolumn4') ) : ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
<div class="ttr_slideshow">
<div class="margin_collapsetop"></div>
<div id="ttr_slideshow_inner">
<ul>
<li id="Slide0" class="ttr_slide" data-slideEffect="None">
<div class="ttr_slideshow_last">
<div class="ttr_slideshow_element_alignment container" data-begintime="0" data-effect="None" data-easing="linear" data-slide="None" data-duration="0">
</div>
<div class="ttr_slideshowshape01" data-effect="None" data-begintime="0" data-duration="1" data-easing="linear" data-slide="None">
<div class="html_content"><p style="line-height:2.91em;"><span style="font-size:2em;color:rgba(255,255,255,1);">Joe's Coffee</span></p><p style="line-height:2.1em;"><span style="font-size:1.429em;color:rgba(255,255,255,1);">908-999-9999</span></p></div>
</div>
</div>
</li>
<li id="Slide1" class="ttr_slide" data-slideEffect="None">
<div class="ttr_slideshow_last">
<div class="ttr_slideshow_element_alignment container" data-begintime="0" data-effect="None" data-easing="linear" data-slide="None" data-duration="0">
</div>
</div>
</li>
<li id="Slide2" class="ttr_slide" data-slideEffect="None">
<div class="ttr_slideshow_last">
<div class="ttr_slideshow_element_alignment container" data-begintime="0" data-effect="None" data-easing="linear" data-slide="None" data-duration="0">
</div>
</div>
</li>
</ul>
</div>
<div class="ttr_slideshow_in">
<div class="ttr_slideshow_last">
<div class="ttr_slideshow_element_alignment container">
</div>
<div id="nav"></div>
<div class="ttr_slideshow_logo">
</div>
</div>
</div>
</div>
<div class="ttr_banner_slideshow">
<?php
if( is_active_sidebar( 'slideshowbelowcolumn1'  ) || is_active_sidebar( 'slideshowbelowcolumn2'  ) || is_active_sidebar( 'slideshowbelowcolumn3'  ) || is_active_sidebar( 'slideshowbelowcolumn4'  )):
?>
<div class="ttr_banner_slideshow_inner_below_widget_container"> <!-- _widget_container-->
<div class="ttr_banner_slideshow_inner_below0 container row">
<?php if ( is_active_sidebar('slideshowbelowcolumn1') ) : ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('slideshowbelowcolumn2') ) : ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('slideshowbelowcolumn3') ) : ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<?php if ( is_active_sidebar('slideshowbelowcolumn4') ) : ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
<div class=" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
