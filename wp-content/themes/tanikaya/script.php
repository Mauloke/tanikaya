<script type="text/javascript">
jQuery(document).ready(function($) {
	$('#logo').click(function(){
	  window.location = "<?php echo home_url(); ?>";
	});
	$('#hello').click(function(){
	  window.location = "<?php echo home_url(); ?>/hello";
	});
	$('#work').click(function(){
	  window.location = "<?php echo home_url(); ?>/work-with-you";
	});
	$('#life').click(function(){
	  window.location = "<?php echo home_url(); ?>/life";
	});
	
	$('#facebook').click(function(){
	  window.open("https://www.facebook.com/helenaabidin");
	});
	$('#twitter').click(function(){
	  window.open("https://twitter.com/HelenaAbidin");
	});
	$('#linkedin').click(function(){
	  window.open("http://id.linkedin.com/in/helenaabidin");
	});
	$('.fancybox').fancybox();
	$(".findout").click(function() {
		 $('html, body').animate({
			 scrollTop: $('#content').offset().top 
		 }, 500);
	});
});
</script>