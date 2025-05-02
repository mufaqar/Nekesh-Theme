

<div class="footer-conatiner">
	<div class="wrapper">
    	<div class="footer-widgets">
        	<div class="widget widget-one">
            	<h4>Quick Links</h4>
                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            </div><!--widget-->
            <div class="widget widget-two">
            	<h4>Latest Yelp Reviews</h4>
                <div class="footer-reviews-main">
                	<div class="footer-review">
                        <div class="review-star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-star.png" alt="Review Star" />
                        </div><!--review star-->
                        <p>Kayla S. said "My friend introduced me to this <span class="change-color">Drnikeshseth</span> and I feel like this is the best place on this earth. </p>
                    </div><!--footer-review-->
                    <div class="footer-review">
                        <div class="review-star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review-star.png" alt="Review Star" />
                        </div><!--review star-->
                        <p>I can't say enough about <span class="change-color"> Dr. Seth,</span> my husband and son see him) I feel like this is the best place on this earth. </p>
                    </div><!--footer-review-->
                    <a href="#">View More</a>
                </div><!--footer-reviews-main-->                
            </div><!--widget-->
            <div class="widget widget-three">
            	<h4>office location</h4>
                <div class="footer-location">
                	<span class="footer-address">8383 Wilshire Blvd. Suite 950
        Beverly Hills, CA 90211</span>
                    <a href="" class="location-btn">Get Direction</a>
                    <span class="footer-phone">Phone:  3123-456-9600</span>
                    <span>Mo to Fr:  9:00 am - 5:00 pm</span>
                </div><!--footer location-->                
            </div><!--widget-->
            <div class="newsletter-widget">
            	<div class="footer-socials">
                	<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-footer.png" alt="Facebook" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-footer.png" alt="Twitter" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gmail-footer.png" alt="Gmail" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedinn-footer.png" alt="LinkedInn" /></a>
                </div><!--footer socials-->
                <div class="newsletter-inner">
                	<h4>NEWSLETTER</h4>
                    <p>Daily updates and news<br /> about everything happening<br /> inside pain medicine.</p>
                    <form>
                    	<input type="email" placeholder="Enter Your Email"  />
                        <input type="submit" value="Sign Up Now"  />
                    </form>
                </div><!--newsletter inner-->
            </div><!--newsletter-widget-->
            <div class="clear"></div>
        </div><!--footer widgets-->
        <div id="footer">
        	<div class="footer-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer_copyright' ) ); ?>
                <div class="clear"></div>
            </div><!--footer menu-->
            <div class="copy-right">
            	© Copyright 2016, All Rights Reserved
            </div><!--copy right-->
            <div class="clear"></div>
        </div><!--footer-->
    </div><!--wrapper-->
</div><!--footer conatiner-->


<?php wp_footer(); ?>
</body>
</html>