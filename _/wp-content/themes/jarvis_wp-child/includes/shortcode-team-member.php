<?php

/*-----------------------------------------------------------------------------------*/
/*	Team Member
/*-----------------------------------------------------------------------------------*/

function encanto_team_member( $atts, $content = null) {
	extract( shortcode_atts( array(
		'img' 			=> '',
		'img_alt' 		=> '',
		'name' 			=> '',
		'role'			=> '',
		'viewprofile' 	=> 'yes',
		'link_title' 	=> 'View Profile',
		'size'  		=>  ""
    ), $atts ) );

$randomid = rand();

$rnr_team_member  = '<div class="team-member team-' .$size. '">';
$rnr_team_member .= '<div class="team-thumb img-wrp">';
$rnr_team_member .= '<img data-original="'. $img .'" class="team-image rnr-lazyload main" alt="'. $name .'" />';
$rnr_team_member .= '<img data-original="'. $img_alt .'" class="team-image rnr-lazyload alt" alt="'. $name .'" />';
//$rnr_team_member .= '<div class="team-overlay">';
//$rnr_team_member .= '<div class="img-overlay"></div>';
//$rnr_team_member .= '<div class="overlay-content"> ';                           
//$rnr_team_member .= '<h4>'. $role .'</h4>';
/*
if($viewprofile=="yes"){
$rnr_team_member .= '<p><a data-toggle="modal" href="#team-'.$randomid.'" class="modal-popup-link view-profile">'.$link_title.'</a></p>';
}
*/
//$rnr_team_member .= '</div>';
//$rnr_team_member .= '</div>';
$rnr_team_member .= '</div>';


$rnr_team_member .= '<div class="team-desc">';
$rnr_team_member .= "<h4><strong>$name</strong> | $role</h4>";
$rnr_team_member .= '</div>';
if($viewprofile=="yes"){
	  $rnr_team_member .= '<div id="team-'.$randomid.'" class="modal hide fade.in animated fadeIn">';
	  $rnr_team_member .= '<div class="member-bio">';
	  $rnr_team_member .= '<div class="container">';  
	  $rnr_team_member .= '<a href="#" class="close" data-dismiss="modal">×</a>';
	  $rnr_team_member .= '<div class="member-role">';
	  $rnr_team_member .= '<h1>'. $name .'</h1>';
	  $rnr_team_member .= '<h4 class="highlight">'. $role .'</h4>';
	  $rnr_team_member .= '</div>';
	  $rnr_team_member .= '<div class="row">';
	  $rnr_team_member .= '<div class="seven columns">';
	  $rnr_team_member .= '<img data-original="'. $img .'" class="team-image rnr-lazyload" alt="'. $name .'" />';
	  $rnr_team_member .= ' </div>';
	  $rnr_team_member .= '<div class="nine columns member-description">'.do_shortcode($content).'</div> ';
	  $rnr_team_member .= '</div>';
	  $rnr_team_member .= '</div>';
	  $rnr_team_member .= '</div>';                 
	  $rnr_team_member .= '</div>';                   

}
	  $rnr_team_member .= '</div>';  

return $rnr_team_member;

}

add_shortcode('team_member', 'encanto_team_member');