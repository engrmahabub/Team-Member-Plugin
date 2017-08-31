<?php 


// create shortcode with parameters so that the user can define what's queried - default is to list all blog posts

function create_substr($string,$start=0,$length=100){
  if(strlen($string)<=$length){
    return $string;
  }else{
    return substr($meta->short_bio[0], 0, 99);    
  }
}
add_shortcode( 'sm-member', 'sm_rmcc_post_listing_parameters_shortcode' );
function sm_rmcc_post_listing_parameters_shortcode( $atts ) {
    ob_start();
 
    // define attributes and their defaults
    extract( shortcode_atts( array (
        'type' => 'sm_team',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'category' => '',
        'theme'=>'default'
    ), $atts ) );
 
    // define query parameters based on attributes
    $options = array(
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
        'category_name' => $category,
    );
    $query = new WP_Query( $options );
    // run the loop based on the query
    if ( $query->have_posts() ) { 
      // switch ($theme) {
      //   case '1':
      //     require(SM_TEAM_PATH.'includes/themes/1.php'); 
      //     break;
        
      //   default:
      //     # code...
      //     break;
      // }
        if(file_exists(SM_TEAM_PATH.'includes/themes/'.$theme.'.php')){
          require(SM_TEAM_PATH.'includes/themes/'.$theme.'.php');
        }else{
          require(SM_TEAM_PATH.'includes/themes/default.php');
        }
      ?>
      <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->


    <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}







