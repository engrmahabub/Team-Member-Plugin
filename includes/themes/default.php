  <div class="bootstrap-wrapper">
    <div class="row layout" style="width:100%">
    
      <div class="image_frame">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-md-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="desc_wrapper">
          <?php the_post_thumbnail(array(213, 168),array('class'=>'member_img')); ?>
           <h4 class="member_name"><?php the_title(); ?></h4>
            <!-- $member_designation = get_post_meta( $post_id, 'member_designation', true ) -->
            <?php 
              $meta = (object)get_post_meta( get_the_ID());                   
            ?>
            <div class="member_info">
              <p class="subtitle"><?php echo $meta->member_designation[0]; ?></p>
              <hr class="hr_color">
              <p><?php echo $meta->short_bio[0]; ?></p>
              <!-- <p><?php echo $meta->member_email[0]; ?></p> -->                  
              <p class="member_links">
                <!-- <div class="col-xs-6 col-sm-4 col-md-4"> -->
                <?php if($meta->member_website[0]): ?>
                  <span class="pull-left imgPadding imgPadding">
                    <a title="Website" href="<?php echo $meta->member_website[0]; ?>" target="_blank">
                      <img src="<?php echo SM_TEAM_URL.'img/web0.png';?>">
                    </a>
                  </span>
                <?php endif;?>
                 <?php if($meta->member_email[0]): ?>
                  <span class="pull-left imgPadding imgPadding">
                    <a title="Email" href="mailto:<?php echo $meta->member_email[0]; ?>">
                    <!-- <i class="fa fa-envelope fa-2x" aria-hidden="true"></i> -->
                      <img src="<?php echo SM_TEAM_URL.'img/mail.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <?php if($meta->member_facebook[0]): ?>
                  <span class="pull-left imgPadding imgPadding">
                    <a target="__blank" title="Facebook" href="<?php echo $meta->member_facebook[0]; ?>">
                    <!-- <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i> -->
                    <img src="<?php echo SM_TEAM_URL.'img/facebook.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <?php if($meta->member_google[0]): ?>
                  <span class="pull-left imgPadding"><a target="__blank" title="Google+" href="<?php echo $meta->member_google[0]; ?>">
                    <!-- <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i> -->
                      <img src="<?php echo SM_TEAM_URL.'img/google-plus.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <?php if($meta->member_twitter[0]): ?>
                  <span class="pull-left imgPadding imgPadding"><a target="__blank" title="Twitter" href="<?php echo $meta->member_twitter[0]; ?>">
                    <!-- <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i> -->
                      <img src="<?php echo SM_TEAM_URL.'img/twitter.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <?php if($meta->member_linkedin[0]): ?>
                  <span class="pull-left imgPadding"><a target="__blank" title="LinkedIn" href="<?php echo $meta->member_linkedin[0]; ?>">
                    <!-- <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i> -->
                      <img src="<?php echo SM_TEAM_URL.'img/linkedin.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <?php if($meta->member_youtube[0]): ?>
                  <span class="pull-left imgPadding"><a target="__blank" title="Youtube" href="<?php echo $meta->member_youtube[0]; ?>">
                    <!-- <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i> -->
                      <img src="<?php echo SM_TEAM_URL.'img/youtube.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <?php if($meta->member_beshto[0]): ?>
                  <span class="pull-left imgPadding">
                    <a target="__blank" title="Beshto" href="<?php echo $meta->member_beshto[0]; ?>">
                      <img src="<?php echo SM_TEAM_URL.'img/beshto.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <?php if($meta->member_vimeo[0]): ?>
                  <span class="pull-left imgPadding"><a title="Vimeo" target="__blank" href="<?php echo $meta->member_vimeo[0]; ?>">
                    <!-- <i class="fa fa-vimeo-square fa-2x" aria-hidden="true"></i> -->
                      <img src="<?php echo SM_TEAM_URL.'img/vimeo.png'; ?>">
                  </a></span>
                <?php endif; ?>
                <!-- </div> -->
              </p>
            </div>
      
        </div>
        </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
        
        </div>
    </div>
  </div>