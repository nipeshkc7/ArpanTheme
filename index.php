<?php get_header(); ?>

<div class="container">
<div class="jumbotron">
  <h1>
   <?php echo bloginfo('name'); ?>
    </h1> 
    <p>
    <?php echo bloginfo('description');?>
    </p>
</div>

<div class="panel-group">
    <?php
        if(have_posts()):
            while(have_posts() ): the_post(); ?>

    <div class="panel panel-default">
    <div class="panel-body">
        <h3><?php the_title();?></h3>
        <small>Posted on: <?php the_time('F j,Y');?></small> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?>
    
   
        <p><?php the_content(); ?> </p>
        <hr></hr>
    </div>
    </div>
            <?php endwhile;?>
    
    <?php    endif;
    ?>
    

</div>
<?php get_footer(); ?>

</div>