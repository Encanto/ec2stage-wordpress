<?php

include('Mobile_Detect.php');
$detect             = new Mobile_Detect();
$mobile_class       = 'mobile_';
if ( $detect->isTablet() ){
    $mobile_class   = '';
}
include('model/database.php');


$obj_edit_banner    = new connection();
$obj_edit_banner->dbconnect();
$obj_edit_banner->countpaginatedsocialsphere();
$sql                = $obj_edit_banner->dbexecute();
$result             = mysql_fetch_array($sql);
$number_entries     = $result['number_entries'];
$start_param        = $_GET['start'] ?: 0;
$incr               = 4;

$obj_edit_banner    = new connection();
$obj_edit_banner->dbconnect();
$start              = $start_param;
$obj_edit_banner->selectpaginatedsocialsphere($start,$incr);
$sql                = $obj_edit_banner->dbexecute();

$next_start         = $start_param + $incr;
$next_block         = $_GET['nextblock'];
if ($next_start >= $number_entries) {
    $next_start     = 0;
}
$more_link          = ($next_start > 0) ? "<div id='blog_data_block" . $next_block . "' class='more_button'><a class='actual_more_link' href='javascript:void(0)' onclick='load_more_blog($next_start,$incr,$next_block);'>More</a></div>" : '';

$blog_content       = "<div id='blog_data_block" . $next_block . " class='blog_data_block'>";
$dyn_counter        = ($next_block * 10) + 1;
while( $result=mysql_fetch_array($sql)) {
    $image                  = $result['image'];
    $post_image             = "http://encantosquared.com/Administrator/view/images/social/" . $image;
    $post_content           = $result['content'];
    $post_heading           = $result['heading'];
    $dynamic_block_class    = ($post_force == $result['id']) ? $mobile_class . "blog_element_show_block" : $mobile_class . "blog_element_block";
    $blog_content           = $blog_content . "<div class='" . $mobile_class . "blog_title_block blog_title_block_all' id='blog_title_block" . $dyn_counter . "'><a class='blog_a' href='javascript:void(0)' onclick='toggle_blog_element(" . $dyn_counter . ");'>" . $post_heading . " <span class='goclass'>go ></span></a></div>" . "<div class='" . $dynamic_block_class . "' id='blog_element_block" . $dyn_counter . "'><img class='" . $mobile_class . "blog_element_image' src='" . $post_image . "' border=0><div class='" . $mobile_class . "blog_text_block'>" . $post_content . "</div></div>";
    $dyn_counter++;
};
$blog_content      .= "</div>" . $more_link;
echo $blog_content; 
?>
