<?php global $smof_data; ?>

      <!-- START COPYRIGHT SECTION -->   	
       <div class="copyright aligncenter">
     <div class="container clearfix">
        <div class="sixteen columns">   
        <div class="copyright-logo">
           <?php if($smof_data['rnr_footer_logo_url'] != "") { ?>
						<a href="<?php echo home_url(); ?>/">
                         <img src="<?php echo $smof_data['rnr_footer_logo_url']; ?>" 
                              alt="<?php bloginfo('name'); ?>"
                          />
                       </a>
					<?php } else { ?>
						<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
					<?php } ?>


        </div>   

  <div class="social-icons">

<?php if($smof_data['rnr_social_linkedin'] != "") { ?>
    <div class="social-icon social-linkedin"><a href="<?php echo $smof_data['rnr_social_linkedin']; ?>" target="_blank" title="<?php _e( 'Linkedin', 'rocknrolla' ) ?>"><?php _e( 'Linkedin', 'rocknrolla' ) ?></a></div>
<?php } ?>

  </div>
          
			<p><?php echo ($smof_data['rnr_footer_caption']); ?></p>
            
         </div> <!-- END SIXTEEN COLUMNS -->        
	  </div><!-- END CONTAINER -->
     </div>
     <!-- END COPYRIGHT SECTION -->	 
     
<?php if($smof_data['rnr_home_type']=="Video") { ?>

        <a id="rnr-background-video" class="rnr-video-player" data-property="{ videoURL : '<?php echo $smof_data['rnr_home_video_id']; ?>' , containment : '.home-background-video' , autoPlay : true, mute : <?php echo $smof_data['rnr_video_mute']; ?>, startAt : 0, opacity : 1, quality: 'highres', optimizeDisplay: true, vol: 100, showControls: false, loop: <?php echo $smof_data['rnr_enable_video_loop']; ?>}"></a>	            
 <?php } ?>
        


	<?php if($smof_data['rnr_custom_js'] != '') { echo $smof_data['rnr_custom_js']; } ?>
        </div>
        <!--<div id="back-to-top"><a href="#">Back to Top</a></div>-->
 	<?php wp_footer(); ?>	      

<script type="text/javascript">if (window.attachEvent) { window.attachEvent('onload', loadSoeJs); } else { if (window.onload){  if (typeof isSeoFunctionLoaded == 'undefined') {isSeoFunctionLoaded = false;}if(!isSeoFunctionLoaded){var curronload = window.onload; var newonload = function (evt) { curronload(evt); loadSoeJs(evt); }; window.onload = newonload; isSeoFunctionLoaded = true;}} else { window.onload = loadSoeJs; }}function loadSoeJs() { var head = document.getElementsByTagName('head').item(0); var js = document.createElement('script'); js.setAttribute('type', 'text/javascript'); js.setAttribute('src', '//static.scheduleonce.com/mergedjs/ScheduleOnceEmbed.js'); js.setAttribute('defer', 'true'); js.async = true; head.appendChild(js); }</script><script type="text/javascript">(function(){function SOEScriptLoaded() { if(typeof soe != 'undefined') {soe.InitWidget("//secure.scheduleonce.com/crissolomonencanto2com?thm=white&bc=006DAF&tc=FFFFFF",'crissolomonencanto2com',"Book Your Session Now","rgb(0, 109, 175)","rgb(255, 255, 255)","1,3,2","Call Us","+ 1-415-889-8782_so_phone_sep_","Email Us","Send","rgb(255, 255, 255)","rgb(0, 109, 175)","cris.solomon@encanto2.com","Cris Solomon","Thank you for your message.<br />We will get back to you as soon as we can.","17","40","Schedule Online","Free 1-on-1 Consultation","rgb(255, 255, 255)","rgb(51, 51, 51)","right","MzAyMDAy"); soe.AddEventListners(); } else { setTimeout(SOEScriptLoaded,500); } } setTimeout(SOEScriptLoaded,500)})()</script>

    </body>
</html>        