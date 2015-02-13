<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title(''); ?>
</title>
<meta name="author" content="Maulana Irsyad" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('template_url'); ?>/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/* 
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
	
	wp_get_archives('type=monthly&format=link');
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48728309-2', 'auto');
  ga('send', 'pageview');

</script>
<?php include('script.php') ?>
<script>
    jQuery(document).ready(function ($) {
		var _SlideshowTransitions = [
                {$Duration:800,y:1,$Delay:80,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}
                
            ];
        var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
				/*
				$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },
                */

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }
    });
</script>
</head>

<body>
<div id="container">
	<div id="top-menu" class="hidden-xs">
    	<div id="logo" class=""></div>
        <!--
        <ul id="mnPage1">
            	<li><a href="javascript:void(0)">LIVE</a></li>
                <li><a href="javascript:void(0)">LEARN</a></li>
                <li><a href="javascript:void(0)">GIVE</a></li>
                <li><a href="javascript:void(0)">PRAISE</a></li>
        </ul>
        <ul id="mnPage2">
            	<li><a href="javascript:void(0)">YOUNIVERSE</a></li>
                <li id="live"><a href="javascript:void(0)">LIVE'S A CANVAS CLASS</a></li>
                <li id="about"><a href="javascript:void(0)">ABOUT</a></li>
                <li><a href="javascript:void(0)">WORK WITH ME</a></li>
        </ul>
        <?php //wp_nav_menu( array('menu' => 'top-menu' )); ?>
        -->
    </div>
    <div id="top-menu-mobile" class="hidden-md hidden-sm hidden-lg">
    	<div id="logo" class=""></div>
    </div>    