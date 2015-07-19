<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Title -->
        <title>News Portal</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/css/style.css">
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/css/font-awesome.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/css/prettyPhoto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/css/default.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/view/css/responsive.css">
        <!-- Favicon -->
        <link type="image/x-icon" href="<?php echo base_url(); ?>assets/view/favicon.png" rel="shortcut icon">
    </head>
    <body class="layout-narrow">
        <!-- Page / Start -->
        <div id="page" class="hfeed site clearfix">
            <!-- Masthead / Start -->
            <header id="masthead" class="site-header container clearfix" role="banner">
                <div id="logo">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/view/logo.png" alt="Logo Title"></a>
                    <!-- <h1 class="site-title"><a href="index.html">SuperNews</a></h1> -->
                </div>
                <?php 
                if(!empty($advt)){foreach ($advt as $at) { // size 619*90?>
                <div class="header-ad">
                    <a href="<?php echo $at->link; ?>"><img alt="" class="entry-thumbnail" style="height: 90px;" src="<?php echo base_url()."/upload/".$at->image; ?>"></a>
			</div>
                <?php }}?>
                <div class="clearfix"></div>
                <a href="#" id="secondary-mobile-menu"><i class="fa fa-bars"></i> <span>Secondary Menu</span></a>
                <!-- Secondary Bar / Start -->
                <div id="secondary-bar" class="clearfix">
                    <!-- Secondary Navigation / Start -->
                    <nav id="secondary-nav">
                        <div class="menu_container clearfix">
                            <ul class="sf-menu">
                                <li class="submenu selected">
                                    <a href="<?php echo base_url(); ?>" title="Home">
                                        Home
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#" title="Pages">
                                        Pages
                                    </a>
                                </li>
                                <li class="submenu mega_menu_parent">
                                    <a href="#" title="Mega Menu">
                                        Mega Menu
                                    </a>
                                    <ul style="left: -188.383px;">
                                        <li class="submenu">
                                            <a href="" title="Latest Posts">
                                                Latest Posts
                                            </a>
                                            <ul class="mega_menu blog">
                                                <li class="post">
                                                    <a href="" title="Ne Painkiller Rekindles Addiction Concerns">
                                                        <img style="display: block;" src="" alt="img">
                                                    </a>
                                                    <h5><a href="" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
                                                    <ul class="post_details simple">
                                                        <li class="category"><a title="HEALTH" href="">HEALTH</a></li>
                                                        <li class="date">   </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="http://quanticalabs.com/Pressroom/Template/?page=blog" title="Most Read">
                                                Most Read
                                            </a>
                                            <div class="mega_menu row">
                                                <div class="column column_1_2">
                                                    <ul class="blog small">
                                                        <li class="post">
                                                            <a href="http://quanticalabs.com/Pressroom/Template/?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                                                <img src="" alt="img">
                                                            </a>
                                                            <div class="post_content">
                                                                <h5>
                                                                    <a href="http://quanticalabs.com/Pressroom/Template/?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
                                                                </h5>
                                                                <ul class="post_details simple">
                                                                    <li class="category"><a href="http://quanticalabs.com/Pressroom/Template/?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
                                                                    <li class="date">
                                                                        10:11 PM, Feb 02
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#" title="Categories">
                                        Categories
                                    </a>
                                    <ul>
                                        <?php foreach ($cate as $c){ ?>
                                        <li>
                                            <a href="<?php echo base_url()."view/categories/".$c->id; ?>" title="<?php $c->name; ?>">
                                               <?php echo $c->name; ?>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="" title="Contact">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                    </nav>				<!-- Secondary Navigation / End -->
                    <div class="header-search">
                        <i class="fa fa-search"></i>
                        <i class="fa fa-times"></i>
                        <div class="search-form">
                            <form action="search.html" id="searchform" method="get">
                                <input name="s" type="text">
                                <button type="submit">Search</button>
                            </form>
                        </div><!-- .search-form -->
                    </div><!-- .header-search -->
                </div>
                <!-- Secondary Bar / End -->
            </header>
            <!-- Masthead / End -->
            <!-- Site Main / Start -->