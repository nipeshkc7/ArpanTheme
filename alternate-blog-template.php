<?php 
//Work In progress
get_header(); ?>

<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:220px;">
  <h1>Scrollspy and Affix Example</h1>
  <h3>Fixed vertical sidenav on scroll</h3>
  <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
  <p>The left menu sticks the page after you have scrolled a specified amount of pixels, and the links in the menu are automatically updated based on scroll position.</p>
</div>
<br>

<div class="container">

<div class="row">
<nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <br>
        <?php
        $i=1;
        if(have_posts()):
            while(have_posts() ): the_post(); ?>
        <li><a href="#section<?php echo $i?>">Section <?php echo $i ?></a></li>

        <?php   
                $i++; 
                endwhile;
                endif;  

                ?>
      </ul>
    </nav>

<div class="col-sm-9">
    <?php
        $i=1;
        if(have_posts()):
            while(have_posts() ): the_post(); ?>

        <div id="section<?php echo $i; ?>">
        <h1><?php the_title();?></h1>
        <small>Posted on: <?php the_time('F j,Y');?></small> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?>
        <p><?php  the_content(); ?> </p>
        <hr></hr>
        </div>
            <?php $i++; endwhile;?>
    
    <?php    endif;
    ?>
</div>

</div>
<?php get_footer(); ?>

</div>