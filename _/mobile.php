<?php
include('Mobile_Detect.php');
$detect             = new Mobile_Detect();
$mobile_class       = 'mobile_';
if ( $detect->isTablet() ){
    $mobile_class   = '';
}
include('model/database.php');
?>

<html>
<head>
    <?php include 'includes/standard_head.php'; ?>
</head>
<body>   

    <!-- Processing Blocks -->
    <?php include 'includes/contactus_processing.php'; ?>
    <!-- /Processing Blocks -->
    
    <?php include 'includes/standard_gnav.php'; ?>
    
    <!-- Screen Blocks -->
    <div class='<?php echo $mobile_class; ?>all_blocks'>
        <?php include 'includes/window_main_block.php'; ?> 
        <?php include 'includes/window_enterprise_tools.php'; ?> 
        <?php include 'includes/window_knowledge_services.php'; ?>
        <?php include 'includes/window_aboutus.php'; ?>
        <?php include 'includes/window_applications.php'; ?>
        <?php include 'includes/window_blog.php'; ?>
        <?php include 'includes/window_blog_single.php'; ?>
        <?php include 'includes/window_contact_us.php'; ?>  
    </div>     
    <!-- /Screen Blocks -->
    
    <?php include 'includes/standard_menu.php'; ?>
    <?php include 'includes/standard_footer.php'; ?>

</body>
</html>
