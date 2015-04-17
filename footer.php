    <footer>
    	<div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/seperator.png">
            <div class="column half spacer">
               <p><b>QUESTION ABOUT A MAIL OR ONLINE ORDER?</b></p>
               <p>Please contact Customer Service at:<br/>
                (800) 517-7670 Mon-Fri 8-4 PST <br/>
                or email us at sales@goldcreekfarms.com</p>
            </div>
            <div class="column half spacer">
             <nav>
                 <?php wp_nav_menu(array('theme_location' => 'Footer_Nav',)); ?>
             </nav>
         </div>
         <div class="column half spacer">
            <p>&copy; Copyright 2015 Gold Creek Farms. All Rights Reserved<p>
            </div>
            <div class="column half spacer talignright">
                <p>eCommerce by <a href="http://inspyregroup.com"><img class="credit" src="<?php echo get_template_directory_uri(); ?>/images/inspyre-dark.png"></a></p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>