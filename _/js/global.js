show_hide_footer_contact = function () {
    if (window.currentWindow == 'main_block' || window.menuBlockSetting == 'show') {
        document.getElementById('footer').style.display = "none";
    }
    else {
        document.getElementById('footer').style.display = "block";
    }
}

toggle_menu = function () {
    var theMainObj = document.getElementById(window.currentWindow);
    if (window.menuBlockSetting == 'hide') {
        theMainObj.style.display = "none";
        $( "#menu_block" ).toggle( "blind", 1000 );
        window.menuBlockSetting = 'show';
    } 
    else {
        $( "#menu_block" ).toggle( "blind", 1000, function() {
            theMainObj.style.display = "block";
        });
        window.menuBlockSetting = 'hide';
    }  
    show_hide_footer_contact();     
}

toggle_blog_element = function (whichOne) {
    var buildIt = '#blog_element_block' + whichOne;
    $( buildIt ).toggle( "blind", 1000 );
}

toggle_contactus = function () {
    var override = 0;
    if (window.menuBlockSetting == 'show') {
        var theMainObj = document.getElementById('menu_block');
        theMainObj.style.display = "none";
        window.menuBlockSetting = 'hide';
        override = 1;
    }
    if (window.currentWindow != 'contactus_block' || override == 1) {
        var theMainObj = document.getElementById(window.currentWindow);
        theMainObj.style.display = "none";
        $( "#contactus_block" ).toggle( "blind", 1000 );  
        window.currentWindow = 'contactus_block';   
    }
    show_hide_footer_contact();
}

load_more_blog = function (next_start,incr,next_block) {
    var reallyNextBlock = next_block + 1;
    var callUrl = 'http://encantosquared.com/blog_loader.php?start=' + next_start + '&nextblock=' + reallyNextBlock;
    var whichdiv = 'blog_data_block' + next_block;
    $.get(callUrl, function(data) {
        $('#' + whichdiv).html(data);
    });

}

toggle_window = function (whichOne) {
    var currentWindow           = document.getElementById('menu_block');
    var nextWindow              = document.getElementById(whichOne);
    currentWindow.style.display = "none";
    var nextID                  = "#" + whichOne;
    $( nextID ).toggle( "blind", 1000 );
    window.currentWindow        = whichOne;
    window.menuBlockSetting     = 'hide';
    show_hide_footer_contact();
}

toggle_main = function () {
    var menuWindow              = document.getElementById('menu_block');
    var mainWindow              = document.getElementById('main_block');
    var currentWindow           = document.getElementById(window.currentWindow);
    currentWindow.style.display = "none";
    menuWindow.style.display    = "none";
    mainWindow.style.display    = "none";
    var nextID                  = "#main_block";
    $( nextID ).toggle( "blind", 1000 );
    window.currentWindow        = 'main_block';
    window.menuBlockSetting     = 'hide';
    show_hide_footer_contact();
}
