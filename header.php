<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arpans theme</title>
        <?php wp_head(); ?>
    </head>

    <body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
        </div>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>
        </div>
    </nav>
<div class="container page-header">
    <div class="jumbotron" style="background:url('<?php header_image()?>');width:100%;height:<?php echo get_custom_header()->height;?>; width:<?php get_custom_header()->width;?>;">
  <h1>
   <?php echo bloginfo('name'); ?>
    </h1> 
    <p>
    <?php echo bloginfo('description');?>
    </p>
    </div>
</div>

