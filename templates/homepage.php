
<?php
/*
Template Name: Home Page
*/
?>


<?php get_header(); ?>

<!-- This is for the completed audits -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="nes-container with-title" style="margin-top: 30px;margin-bottom: 30px;">
            <h3 class="title">Completed Audits</h3>
            <div class="row">
                <div class="col-sm-3 col-xs-1">&nbsp</div>
                <div class="col-sm-3 col-xs-1">&nbsp</div>
                <div class="col-sm-1 col-xs-1">Rating</div>
                <div class="col-sm-2 col-xs-2">Links</div>
                <div class="col-sm-2 col-xs-2">Launch</div>
            </div>

            <?php 
    $args = array(
        'category_name' => 'audit-finalized',
        'post_status' => array( 'publish' ),
        'meta_key'			=> 'project_launch_date',
        'orderby'			=> 'meta_value',
        'order'				=> 'DESC'
    );
    $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <!-- pagination here -->
        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <!-- ACF -->
        <?php $page_id = get_the_ID(); ?>
        <div class="row">
            <div class="col-sm-3 col-xs-12"><a href="<?php the_permalink(); ?>" target="_new"><?php the_title(); ?></a></div>
            <div class="col-sm-3 col-xs-6"><progress class="nes-progress is-success" value="<?php the_field('overall_score', $page_id); ?>" max="100"></progress></div>
            <div class="col-sm-1 col-xs-6"><?php the_field('overall_score', $page_id); ?>/100</div>
            <div class="col-sm-2 col-xs-12">
            <?php if( get_field('project_url') ): ?>
                        <a href="<?php the_field('project_url', $page_id); ?>" target="_new"><i class="nes-icon coin is-small"></i></a>
                    <?php endif; ?>
                   
                    <?php if( get_field('telegram_url') ): ?>
                        <a href="<?php the_field('telegram_url', $page_id); ?>" target="_new"><i class="nes-icon telegram is-small"></i></a>
                    <?php endif; ?>

                    <?php if( get_field('contract_url') ): ?>
                        <a href="<?php the_field('contract_url', $page_id); ?>" target="_new"><img class="nes-avatar is-small" src="https://bscscan.com/images/brandassets/BscScan-logo-circle.png" style="image-rendering: pixelated;"></a>
                    <?php endif; ?>  
                    
                    <?php if( get_field('youtube_url') ): ?>
                        <a href="<?php the_field('youtube_url', $page_id); ?>" target="_new"><i class="nes-icon youtube is-small"></i></a>
                    <?php endif; ?>     

                    <?php if( get_field('twitter_url') ): ?>
                        <a href="<?php the_field('twitter_url', $page_id); ?>" target="_new"><i class="nes-icon twitter is-small"></i></a>
                    <?php endif; ?>     

                    <?php if( get_field('github_url') ): ?>
                        <a href="<?php the_field('github_url', $page_id); ?>" target="_new"><i class="nes-icon github is-small"></i></a>
                    <?php endif; ?>    
  
                    <?php if( get_field('whitepaper_url') ): ?>
                        <a href="<?php the_field('whitepaper_url', $page_id); ?>" target="_new"><i class="nes-icon close is-small"></i></a>
                    <?php endif; ?>
            </div>
            <div class="col-sm-2 col-xs-12"><?php getLaunchDateText(get_field('project_launch_date', $page_id)); ?></div>
        </div>
        <?php endwhile; ?>
        <!-- end of the loop -->
        <!-- pagination here -->
        <?php wp_reset_postdata(); ?>
    
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

        </div>
    </div>
<!-- End of completed audits -->

<!-- This is for the scheduled audits -->
<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="nes-container with-title" style="margin-top: 30px;margin-bottom: 30px;">
            <h3 class="title">Scheduled Audits</h3>
            <div class="row">
                <div class="col-sm-3 col-xs-4">&nbsp</div>
                <div class="col-sm-3 col-xs-6">Audit ETA</div>
                <div class="col-sm-1 col-xs-2">&nbsp</div>
                <div class="col-sm-2 col-xs-2">Links</div>
                <div class="col-sm-2 col-xs-2">Launch ETA</div>
            </div>

    <?php 
        $args = array(
            'category_name' => 'audit-finalized',
            'post_status' => array( 'pending', 'draft', 'future' ),
            'meta_key'			=> 'audit_eta',
	        'orderby'			=> 'meta_value',
            'order'				=> 'ASC'
        );
        $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <!-- pagination here -->
        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <!-- ACF -->
        <?php $page_id = get_the_ID(); ?>
        <div class="row">
            <div class="col-sm-3 col-xs-12"><?php the_title(); ?></div>
            <div class="col-sm-3 col-xs-12"><?php the_field('audit_eta', $page_id); ?></div>
            <div class="col-sm-1 col-xs-12">&nbsp</div>
            <div class="col-sm-2 col-xs-12">            
                    <?php if( get_field('project_url') ): ?>
                        <a href="<?php the_field('project_url', $page_id); ?>" target="_new"><i class="nes-icon coin is-small"></i></a>
                    <?php endif; ?>
                   
                    <?php if( get_field('telegram_url') ): ?>
                        <a href="<?php the_field('telegram_url', $page_id); ?>" target="_new"><i class="nes-icon telegram is-small"></i></a>
                    <?php endif; ?>

                    <?php if( get_field('contract_url') ): ?>
                        <a href="<?php the_field('contract_url', $page_id); ?>" target="_new"><img class="nes-avatar is-small" src="https://bscscan.com/images/brandassets/BscScan-logo-circle.png" style="image-rendering: pixelated;"></a>
                    <?php endif; ?>  
                    
                    <?php if( get_field('youtube_url') ): ?>
                        <a href="<?php the_field('youtube_url', $page_id); ?>" target="_new"><i class="nes-icon youtube is-small"></i></a>
                    <?php endif; ?>     

                    <?php if( get_field('twitter_url') ): ?>
                        <a href="<?php the_field('twitter_url', $page_id); ?>" target="_new"><i class="nes-icon twitter is-small"></i></a>
                    <?php endif; ?>     

                    <?php if( get_field('github_url') ): ?>
                        <a href="<?php the_field('github_url', $page_id); ?>" target="_new"><i class="nes-icon github is-small"></i></a>
                    <?php endif; ?>    
  
                    <?php if( get_field('whitepaper_url') ): ?>
                        <a href="<?php the_field('whitepaper_url', $page_id); ?>" target="_new"><i class="nes-icon close is-small"></i></a>
                    <?php endif; ?>
            </div>
            <div class="col-sm-2 col-xs-12"><?php getLaunchDateText(get_field('project_launch_date', $page_id)); ?></div>
        </div>
        <?php endwhile; ?>
        <!-- end of the loop -->
        <!-- pagination here -->
        <?php wp_reset_postdata(); ?>
    
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

        </div>
    </div>
<!-- End of completed audits -->



<!-- This is for the influencers -->
<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="nes-container with-title" style="margin-top: 30px;margin-bottom: 30px;">
            <h3 class="title">Influencers</h3>
            <div class="row">
                <div class="col-sm-4 col-xs-4">&nbsp</div>
                <div class="col-sm-6 col-xs-6">&nbsp</div>
                <div class="col-sm-1 col-xs-2">&nbsp</div>
                <div class="col-sm-1 col-xs-2">&nbsp</div>
            </div>

            <?php 
    $args = array(
        'category_name' => 'influencer',
        'post_status' => array( 'publish' ),
        'orderby' => 'title',
        'order'   => 'ASC',
        'posts_per_page' => '-1'
    );
    $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <!-- pagination here -->
        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <!-- ACF -->
        <?php $page_id = get_the_ID(); ?>
        <div class="row">
            <div class="col-sm-3 col-xs-8"><?php the_title(); ?></div>

            <div class="col-sm-1 col-xs-4">
                <?php if( get_field('influencer_telegram_url') ): ?>
                    <a href="<?php the_field('influencer_telegram_url', $page_id); ?>" target="_new"><i class="nes-icon telegram is-small"></i></a>
                <?php endif; ?>

                <?php if( get_field('influencer_youtube_url') ): ?>
                    <a href="<?php the_field('influencer_youtube_url', $page_id); ?>" target="_new"><i class="nes-icon youtube is-small"></i></a>
                <?php endif; ?>
                
                <?php if( get_field('influencer_webpage_url') ): ?>
                    <a href="<?php the_field('influencer_webpage_url', $page_id); ?>" target="_new"><i class="nes-icon coin is-small"></i></a>
                <?php endif; ?>

                <?php if( get_field('influencer_twitter_url') ): ?>
                    <a href="<?php the_field('influencer_twitter_url', $page_id); ?>" target="_new"><i class="nes-icon twitter is-small"></i></a>
                <?php endif; ?>
            </div>
            
        </div>
        <?php endwhile; ?>
        <!-- end of the loop -->
        <!-- pagination here -->
        <?php wp_reset_postdata(); ?>
    
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

        </div>
    </div>
<!-- End of influncers -->


  <?php get_footer(); ?>

