
<?php
/*
Template Name: Audits Page
*/
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php wp_get_archives('type=postbypost&limit=1000'); ?> 

<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>



</div>
    

  <?php get_footer(); ?>

