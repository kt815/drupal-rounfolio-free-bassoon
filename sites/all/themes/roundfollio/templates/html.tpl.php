<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <link href='http://fonts.googleapis.com/css?family=Cantarell|Oswald' rel='stylesheet' type='text/css'>
  <?php print $styles; ?>
  <?php print $scripts; ?>

   <script type="text/javascript">
    jP(document).ready(function(){
    //Set opacity on each span to 0%
    jP(".rollover").css({'opacity':'0'});
     
    jP('#gallery a.item').hover(
      function() {
        jP(this).find('.rollover').stop().fadeTo(500, 1);
      },
      function() {
        jP(this).find('.rollover').stop().fadeTo(500, 0);
      }
    )
    });
  </script>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

    <script type="text/javascript">
    jQ(window).load(function() {
        jQ('#slider').nivoSlider({
			effect:'random', 
            slices:15,  
            animSpeed:500, 
            pauseTime:5000
			});
    });
    </script>
    
    <script type="text/javascript" charset="utf-8">
	jP(document).ready(function(){
		jP("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal', theme:'dark_rounded', social_tools:false, slideshow:false, autoplay_slideshow: false});
		jP(".image a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal', theme:'dark_rounded', social_tools:false, slideshow:false, autoplay_slideshow: false});
	});
	</script>

</body>
</html>