<?php get_header(); ?>

  <div class="container" style="margin-bottom: 20px;">
    <div class="row">
      <div class="col-sm-10 col-xs-12">
        <img src="/images/Warrior.png" width="15%" height="auto"
          style="image-rendering: pixelated;image-rendering: -moz-crisp-edges;">
        <div class="nes-balloon from-left">
          <p>FREE Quality Audits<i class="nes-icon heart is-small"></i></p>
        </div>
      </div>

      <div class="col-sm-2 col-xs-12">
        <div class="nes-container with-title">
          <h3 class="title">Socials</h3>
          <div class="row">
            <!-- <p><a href="https://t.me/georgestamp" target="_new"><img src="/images/Telegram.jpg" width="50%" height="auto"></a></p> -->
            <!-- <i class="nes-icon telegram"></i> -->
            <p><a href="https://georgestamp.xyz/wordpress/">Home</a></p>
            <p><a href="https://t.me/georgestamp" target="_new">Telegram</a></p>

          </div>
        </div>
      </div>
    </div>


        <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'Y-m-d' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?> 
    </div>

    <!--end entry-->
    
  </div><!--end post-->

<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>



</div>
    

  <?php get_footer(); ?>

