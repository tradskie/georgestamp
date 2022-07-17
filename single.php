<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
  
<div class="col-md-12 col-sm-12" style="margin-top:10px; font-size:80%;">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();  ?>
            <?php get_template_part( 'content', get_post_format() ); ?>


            <div class="nes-container with-title">
                <h3 class="title"><?php the_title(); ?></h3>
                <div class="row">

                    <?php if( get_field('project_url') ): ?>
                        <div class="col-sm-1 col-xs-4"><a href="<?php the_field('project_url'); ?>" target="_new"><i class="nes-logo is-large"></i></a></div>
                    <?php endif; ?>
                   
                    <?php if( get_field('telegram_url') ): ?>
                        <div class="col-sm-1 col-xs-6"><a href="<?php the_field('telegram_url'); ?>" target="_new"><i class="nes-icon telegram is-large"></i></a></div>
                    <?php endif; ?>

                    <?php if( get_field('contract_url') ): ?>
                        <div class="col-sm-1 col-xs-2"><a href="<?php the_field('contract_url'); ?>" target="_new"><img class="nes-avatar is-large" src="https://bscscan.com/images/brandassets/BscScan-logo-circle.png" style="image-rendering: pixelated;"></a></div>
                    <?php endif; ?>  
                    
                    <?php if( get_field('youtube_url') ): ?>
                        <div class="col-sm-1 col-xs-6"><a href="<?php the_field('youtube_url'); ?>" target="_new"><i class="nes-icon youtube is-large"></i></a></div>
                    <?php endif; ?>     

                    <?php if( get_field('twitter_url') ): ?>
                        <div class="col-sm-1 col-xs-6"><a href="<?php the_field('twitter_url'); ?>" target="_new"><i class="nes-icon twitter is-large"></i></a></div>
                    <?php endif; ?>     

                    <?php if( get_field('github_url') ): ?>
                        <div class="col-sm-1 col-xs-6"><a href="<?php the_field('github_url'); ?>" target="_new"><i class="nes-icon github is-large"></i></a></div>
                    <?php endif; ?>    
  
                    <?php if( get_field('whitepaper_url') ): ?>
                        <div class="col-sm-1 col-xs-6"><a href="<?php the_field('whitepaper_url'); ?>" target="_new"><i class="nes-icon close is-large"></i></a></div>
                    <?php endif; ?>                      


                    <!-- <div class="col-sm-1 col-xs-2">Whitepaper</div> -->
                </div>
            </div>

            <!-- https://bscscan.com/images/brandassets/BscScan-logo-circle.png -->
            
<!-- Ratings -->                
            <div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Rating</h3>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">Overall Score</div>
                    <div class="col-sm-6 col-xs-6"><progress class="<?php getNESProgressBarByScore(get_field('overall_score')) ?>" value="<?php the_field('overall_score'); ?>" max="100"></progress></div>
                    <div class="col-sm-2 col-xs-2"><?php the_field('overall_score'); ?></div>
                </div>
                <!--more-->
                <div class="row">
                    <div class="col-sm-4 col-xs-4">&nbsp;</div>
                    <div class="col-sm-6 col-xs-6">&nbsp;</div>
                    <div class="col-sm-2 col-xs-2">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">Backdoors</div>
                    <div class="col-sm-6 col-xs-6"><progress class="<?php getNESProgressBarByScore(get_field('backdoor_score')) ?>" value="<?php the_field('backdoor_score'); ?>" max="100"></progress></div>
                    <div class="col-sm-2 col-xs-2"><?php the_field('backdoor_score'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">Owner Privileges</div>
                    <div class="col-sm-6 col-xs-6"><progress class="<?php getNESProgressBarByScore(get_field('owner_privileges_score')) ?>" value="<?php the_field('owner_privileges_score'); ?>" max="100"></progress></div>
                    <div class="col-sm-2 col-xs-2"><?php the_field('owner_privileges_score'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">Fees</div>
                    <div class="col-sm-6 col-xs-6"><progress class="<?php getNESProgressBarByScore(get_field('fees_score')) ?>" value="<?php the_field('fees_score'); ?>" max="100"></progress></div>
                    <div class="col-sm-2 col-xs-2"><?php the_field('fees_score'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">Complexity</div>
                    <div class="col-sm-6 col-xs-6"><progress class="<?php getNESProgressBarByScore(get_field('complexity_score')) ?>" value="<?php the_field('complexity_score'); ?>" max="100"></progress></div>
                    <div class="col-sm-2 col-xs-2"><?php the_field('complexity_score'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">Team Trust</div>
                    <div class="col-sm-6 col-xs-6"><progress class="<?php getNESProgressBarByScore(get_field('team_trust_score')) ?>" value="<?php the_field('team_trust_score'); ?>" max="100"></progress></div>
                    <div class="col-sm-2 col-xs-2"><?php the_field('team_trust_score'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">Other Risk</div>
                    <div class="col-sm-6 col-xs-6"><progress class="<?php getNESProgressBarByScore(get_field('other_risk_score')) ?>" value="<?php the_field('other_risk_score'); ?>" max="100"></progress></div>
                    <div class="col-sm-2 col-xs-2"><?php the_field('other_risk_score'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">&nbsp;</div>
                    <div class="col-sm-6 col-xs-6">&nbsp;</div>
                    <div class="col-sm-2 col-xs-2">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">&nbsp;</div>
                    <div class="col-sm-3 col-xs-4">&nbsp;</div>
                    <div class="col-sm-5 col-xs-4">Higher score is always better</div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-4">&nbsp;</div>
                    <div class="col-sm-3 col-xs-4">&nbsp;</div>
                    <div class="col-sm-5 col-xs-4"><a href="/ratings.html">See how ratings are calculated</a></div>
                </div>
            </div> <!-- rating div-->


<!-- Summary -->                
            <div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Summary</h3>                
                    <?php the_field('summary'); ?>
            </div> <!-- summary div -->

<!-- TODO PROJECT DETAILS -->

<!-- Contract Details -->
            <div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Contract Details</h3>                
                    <?php the_field('contract_details_text'); ?>
            </div> <!-- contract details div -->           
 
<!-- Backdoor Details -->
            <div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Backdoors</h3>                
                    <?php the_field('backdoor_text'); ?>
            </div> <!-- Backdoor details div -->    
            
<!-- Owner Priviledges Details -->
            <div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Owner Privileges</h3>                
                    <?php the_field('owner_privileges_text'); ?>
            </div> <!-- cOwner Priveledges div -->                 
            
<!-- Fees Details -->
            <div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Fees</h3>                
                    <?php the_field('fees_text'); ?>
            </div> <!-- contract details div -->                 

 <!-- Complexity Details -->
 <div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Complexity</h3>                
                    <?php the_field('complexity_text'); ?>
            </div> <!-- Complexity div -->      
            
            
<!-- Team Trust Details -->
<div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Team Trust</h3>                
                    <?php the_field('team_trust_text'); ?>
            </div> <!-- Team Trust div -->                  


<!-- Other Risk Details -->
<div class="nes-container with-title" style="margin-top:10px; font-size:80%;">
                <h3 class="title">Other Risk</h3>                
                    <?php the_field('other_risk_text'); ?>
            </div> <!-- Otherrisk div -->                     

        <div class="nes-container with-title" style="margin-top: 30px;margin-bottom: 30px;">
          <h3 class="title">Disclaimer</h3>
          <!-- <div class="row"> -->
          <div class="row">This contract has been audited by a human.</div>
          <div class="row">Only invest what you can afford to lose.</div>
          <div class="row">DYOR - Do your own research</div>
          <div class="row">
            <div class="col-sm-4 col-xs-4">&nbsp</a></div>
            <div class="col-sm-6 col-xs-4">&nbsp</div>
            <div class="col-sm-2 col-xs-4"><a href="https://t.me/imgeorgeweareallgeorge" class="nes-badge is-splited">
                <span class="is-dark">Auditor</span>
                <span class="is-primary"> <?php the_field('auditor'); ?></span>
              </a>
            </div>
          </div>
        </div>



        </div>
    </div>
</div>


     <?php endwhile; ?>


<?php get_footer(); ?>