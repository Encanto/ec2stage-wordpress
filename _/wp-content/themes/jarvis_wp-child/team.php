<?php get_header(); ?> 

<?php

/*
Template name: Team Template
*/

remove_shortcode("team_member");
get_template_part('includes/shortcode','team-member'); 
get_template_part('menu_section'); 
if (have_posts()) : while (have_posts()) : the_post();

    global $post;
    
    $post_name = $post->post_name;
    
    $post_id = get_the_ID();
		
?>  
<style>
/*--------------------------------------------------------------------------*/
/*	TEAM MEMBER
/*--------------------------------------------------------------------------*/
h1.header-text {
  font-size: 25px;
  background: transparent;
  color: #3c433d;
  font-family: Ubuntu;
  font-weight: bold;
}
.subtitle {
  font-size: 20px;
  text-transform: initial;
  font-family: Ubuntu;
}
.member-role {
	padding: 40px 0 10px;
	margin-bottom: 30px;
	border-bottom: 1px solid #e8e8e8;
	clear:both;
}
.member-role h1 {
	line-height:1;
	margin-bottom:0px;
	display:inline-block;
}
.member-role h4 {
	line-height:1;
	font-size:26px;
}
.team-member {
  box-sizing: border-box;
  padding: 20px;
}

.team-member.team-four {
	width: 25%;
}
.team-member .team-thumb {
	line-height: 0;
	position:relative;
}
.team-member .team-thumb img {
	width: 100%;
	height: auto;
}
.team-member .team-thumb:hover {
	cursor: pointer;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	-ms-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.team-member .team-thumb:hover img.main,
.team-member .team-thumb img.alt {
	display:none !important
}
.team-member .team-thumb:hover img.alt {
	display:block !important;	
}
.team-member .team-desc {
	border: none;
  	padding: 25px 0;
  	text-align: left;
 	margin-bottom: 40px
}
.team-member:hover .team-desc {
	background:inherit;
	color:inherit;
}
.team-member .team-desc h4 {
	  font-size: 15px;
  font-family: Ubuntu;
}
.team-member:hover .team-desc h4 {
	color:inherit;
}
.team-member .team-desc h5 span {
	font-size: 12px;
	font-weight: normal;
	color: #aaa;
}
.team-member .team-desc a {
	font-weight: normal;
	display: block;
	font-size: 13px;
	margin-top: 0px;
}
.team-member .team-desc a span i {
	color: #3CF;
	margin-right: 5px;
}
</style>
    <div id="<?php echo $post_name; ?>" class="page<?php echo $post_id; ?> section<?php if((get_post_meta($post_id, "rnr_assign_home") == true) ){ echo ' fullscreen home';} else { echo ' '.$post_name; }?>"><!-- SECTION -->

		<?php if((get_post_meta( get_the_ID(), 'rnr_disable_title', true )!= true) && (get_post_meta($post_id, 'rnr_assign_home', true)!= true) ){ ?>    
        <div class="container">	
           <div class="row">	
            <div class="sixteen columns">        
                <!-- START TITLE -->	            
                <div class="title">
                  <h1 class="header-text"><?php if(get_post_meta( get_the_ID(), 'rnr_alt_title', true )){ echo get_post_meta( get_the_ID(), 'rnr_alt_title', true ); } else { the_title(); } ?></h1>
                   <?php if(get_post_meta( get_the_ID(), 'rnr_subtitle', true )){ ?>
                  <div class="subtitle">
                      <p><?php echo get_post_meta( get_the_ID(), 'rnr_subtitle', true );  ?></p>
                  </div><!-- END SUBTITLE -->
                  <?php } ?>
                </div><!-- END TITLE -->  	                           
            </div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->       
        <?php } ?>   

      <div class="container">           
           <?php the_content(); ?>
           <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
           <?php comments_template(); ?>  
      </div>	  

    </div><!--END SECTION -->
<?php
  
    endwhile;
    endif; 
	wp_reset_query();
?>
<?php get_footer(); ?>
