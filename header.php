<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title>[ joshbob: Joshua Ferrara ]</title>

	<meta name="description" content="Try not to use more than 15-20 words. With the site clearly described in the first 8-10.">

	<meta name="keywords" content="Comma-separated: keyword1, keyword2, etc. Do NOT force keywords. These words MUST have some density in the site content. Use 8-10.">

	<!-- Make it pretty -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/main.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/bootstrap.css" type="text/css" media="screen" />

	<!-- Even for Internet Explorer -->
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/ie7.css" type="text/css" media="screen" title="ie7" charset="utf-8">
	<![endif]-->

	<!-- Make it behave -->
    <script src="<?php bloginfo('template_url'); ?>/scripts/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/bootstrap.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/all.js" type="text/javascript" charset="utf-8"></script>
	

	<!-- Warn IE6 Users -->
	<!--[if LTE IE 6]>
		<link rel="stylesheet" href="http://gatorworks.net/ie6warning/ie6.css" type="text/css" media="screen" title="ie6" charset="utf-8">
		<script src="http://gatorworks.net/ie6warning/ie6warning.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->

	<!-- Feeds & Pingbacks -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>

    <div class="everything">
        <h1 class="logo"><a href="<?php bloginfo('url'); ?>">joshbob: Joshua Ferrara</a></h1>

        <div id="" class="icon_bar">
            <ul class="icons">
                <li class="icon twitter">   <a target="_blank" rel="tooltip" title="Twitter" href="http://twitter.com/joshbob">Twitter</a></li>
                <li class="icon facebook">  <a target="_blank" rel="tooltip" title="Facebook" href="http://facebook.com/josh.ferrara">Facebook</a></li>
                <li class="icon instagram"> <a target="_blank" rel="tooltip" title="Instagram" href="http://extragr.am/joshbob">Instagram</a></li>
                <li class="icon foursquare"><a target="_blank" rel="tooltip" title="Foursquare" href="https://foursquare.com/joshbob">Foursquare</a></li>
                <li class="icon rdio">      <a target="_blank" rel="tooltip" title="Rdio" href="http://rdio.com/people/joshbob/">Rdio</a></li>
                <li class="icon pinterest"> <a target="_blank" rel="tooltip" title="Pinterest" href="http://pinterest.com/josh_ferrara/">Pinterest</a></li>
                <li class="icon dribbble">  <a target="_blank" rel="tooltip" title="Dribbble" href="http://dribbble.com/hivemindlabs">Dribbble</a></li>
                <li class="icon github">    <a target="_blank" rel="tooltip" title="Github" href="https://github.com/joshferrara">Github</a></li>
                <li class="icon blog">      <a rel="tooltip" title="Blog" href="<?php bloginfo('url'); ?>/blog/">Blog</a></li>
                <!-- <li class="icon photos">    <a rel="tooltip" title="Photos" href="<?php bloginfo('url'); ?>/blog/">Photos</a></li> -->
            </ul>
        </div> <!-- close:  icon_bar -->
