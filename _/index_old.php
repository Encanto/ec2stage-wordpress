<?php
setcookie("site", "");
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if (!$detect->isMobile()) {
    echo ("<script>window.location.href = 'http://encantosquared.com/desktop_wrapper.php';</script>");
}
else {
    echo ("<script>window.location.href = 'http://encantosquared.com/mobile.php';</script>");
}
?>