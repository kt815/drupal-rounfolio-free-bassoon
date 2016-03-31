<div id="container">

   <?php if ($page['header']): ?>

	<!-- BEGIN Header -->
	<div id="header">
		<?php print render($page['header']); ?>
	</div>  <!--  id="header"  -->

    <?php endif; ?>

   <?php if ($page['slider']): ?>

        <!-- BEGIN Slider -->
        <div class="slider-wrapper theme-default">
		<?php print render($page['slider']); ?>
	</div> <!--  class="slider-wrapper theme-default"  -->


    <?php endif; ?>

   <?php if ($page['galleries']): ?>


        <!-- BEGIN Portfolio Gallery -->
        <div id="gallery">
		<?php print render($page['galleries']); ?>
	</div> <!--  id="gallery"  -->

    <?php endif; ?>



   <?php if ($page['workspace-content']): ?>

        <!-- BEGIN Portfolio Gallery -->
        <div id="workspace">
 		<div id="workspace__child">
			<?php print render($page['workspace-content']); ?>
		</div>
	</div> <!--  id="gallery"  -->

    <?php endif; ?>



   <?php if ($page['clients']): ?>

        <!-- BEGIN Client Gallery -->
        <div id="clients">
			<?php print render($page['clients']); ?>
		</div> <!--  id="clients"  -->

    <?php endif; ?>

   <?php if ($page['about'] && $page['contact']): ?>

        <div id="sub-container">


                <!-- BEGIN About Me -->
                <div id="about">
			<?php print render($page['about']); ?>
		</div>  <!--  id="about"  -->



                <!-- BEGIN Contact Form -->
                <div id="contact">
			<?php print render($page['contact']); ?>
		</div> <!--  id="contact"  -->


        </div>	 <!--  id="sub-container"  --> 

    <?php endif; ?>


   <?php if ($page['flickr'] && $page['facebook'] && $page['tweet']): ?>

       <!-- BEGIN Footer -->
       <div id="footer">

     	        <div id="footer-container">
	

    	        <div id="footer-flickr">
			<?php print render($page['flickr']); ?>
		</div> <!--  id="footer-flickr"  -->




                <div id="footer-facebook">
			<?php print render($page['facebook']); ?>
		</div> <!--  id="footer-facebook"  -->



                <div id="footer-tweet">
			<div id="footer-tweet-container">
				<?php print render($page['tweet']); ?>
		</div> <!-- footer-tweet-container   -->
		</div> <!--  id="footer-tweet"  -->


               </div> <!--  id="footer-container"  -->
       </div>	<!--  id="footer"  -->

    <?php endif; ?>


   <?php if ($page['base-content']): ?>

        <!-- BEGIN Portfolio Gallery -->
        <div id="gallery">
		<?php print render($page['base-content']); ?>
	</div> <!--  id="gallery"  -->

    <?php endif; ?>


</div>  <!--  class="container"  -->