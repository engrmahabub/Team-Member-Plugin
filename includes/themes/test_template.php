  <div class="bootstrap-wrapper">
    <div id="sm_team_theme_test">
      <div class="row">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php 
            $meta = (object)get_post_meta( get_the_ID());                   
          ?>
          <div class="col-md-3  col-sm-6 col-xs-6 single-member">
            <div class="team-member">
              	<?php the_post_thumbnail(false,array('class'=>'member_img')); ?>
            	<div class="sm-member-name"><?php the_title();?></div>
            	<div class="sm-member-designation"><?php echo $meta->member_designation[0]; ?></div>
              <div class="details">
                <div class="sm-social">
                  <ul class="sm-social-link">
                    <?php if($meta->member_facebook[0]): ?>
                      <li class="sm_facebook">
                        <a target="__blank" title="Facebook" href="<?php echo $meta->member_facebook[0]; ?>">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if($meta->member_google[0]): ?>
                      <li class="sm_google_plus">
                        <a target="__blank" title="Google+" href="<?php echo $meta->member_google[0]; ?>">
                          <i class="fa fa-google-plus"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if($meta->member_twitter[0]): ?>
                      <li class="sm_twitter">
                        <a target="__blank" title="Twitter" href="<?php echo $meta->member_twitter[0]; ?>">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if($meta->member_linkedin[0]): ?>
                      <li class="sm_linkedin">
                        <a target="__blank" title="LinkedIn" href="<?php echo $meta->member_linkedin[0]; ?>">
                          <i class="fa fa-linkedin"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if($meta->member_youtube[0]): ?>
                      <li class="sm_youtube">
                        <a target="__blank" title="Youtube" href="<?php echo $meta->member_youtube[0]; ?>">
                          <i class="fa fa-youtube"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                  </ul>
                </div>
                <p class="desc">
                  <?php echo substr($meta->short_bio[0], 0, 99); ?>
                </p>
              </div>
            </div>
          </div>  
        <?php endwhile; wp_reset_postdata(); ?>     
      </div>
    </div>
  </div>