<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mjexports
 */

?>

<footer>
        <div class="footer">
            <div class="container">
            
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="footer-contact-item">
                            <div class="white-text">Follow us</div>
                            <div class="social-icon">
							<?php if ( get_field('facebook_url', 'option') ) : ?>
								<a href="<?php echo get_field('facebook_url', 'option'); ?>"> <i class="fa fa-instagram fa-lg fa-icon" aria-hidden="true"></i></a>
							<?php endif; ?>
							<?php if ( get_field('instagram_url', 'option') ) : ?>
								<a href="<?php echo get_field('instagram_url', 'option'); ?>"> <i class="fa fa-facebook fa-lg fa-icon" aria-hidden="true"></i></a>
							<?php endif; ?>
							<?php if ( get_field('linkedin_url', 'option') ) : ?>
								<a href="<?php echo get_field('linkedin_url', 'option'); ?>"> <i class="fa fa-linkedin fa-lg fa-icon" aria-hidden="true"></i></a>
							<?php endif; ?>
							
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-spacing  footer-contact-item">
                        <div class="footer-spacing">
                        <?php if ( get_field('phone_number_label', 'option') ) : ?>
                            <div class="ft-head-text-style ttu"><?php echo get_field('phone_number_label', 'option'); ?> </div>
                        <?php endif; ?>
                            <span class="ft-contact">
                                <?php if ( get_field('email_address', 'option') ) : ?>
                                    <a href="mailto:<?php echo get_field('email_address', 'option'); ?>" title="Click here to send us an email.">
                                    <?php echo get_field('email_address', 'option'); ?>
                                    </a>
								<?php endif; ?>
							</span>
                        </div>
                    </div>
                    <div class="col-md-4 footer-contact-item">
                        <div>
                        <?php if ( get_field('phone_number', 'option') ) : ?>
                            <div class="ft-head-text-style ttu"><?php echo get_field('phone_number', 'option'); ?></div>
                        <?php endif; ?>
                        
                            <span class="ft-contact">
							<?php if ( get_field('phone_number', 'option') ) : ?>
									<?php echo get_field('phone_number', 'option'); ?>
								<?php endif; ?>
							</span>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 border-top-light padding-top-sm">

                    <div class="col-md-4">
					<?php if ( have_rows('contact_section', 'option') ) : ?>
						<?php while( have_rows('contact_section', 'option') ) : the_row(); ?>

						<h3 class="intro-heading white-text padding-bottom-sm"><?php echo get_sub_field('section_title'); ?></h3>
                        <a href="<?php echo get_sub_field('link')["url"]; ?>"><button class="btn primary-btn ft-btn"><?php echo get_sub_field('link')["title"]; ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/arrow-right-white.svg"class="primary-button-arrow "></button></a>
						<?php endwhile; ?>
					<?php endif; ?>
                    </div>

                    <div class="col-md-8 footer-links">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-spacing">
                                    <h4 class="ft-head-text-style">LINKS</h4>
                                    <div class="col-sm-12">
                                        <div class="row ft-list footer-menu"><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 footer-address">
                                <h4 class="ft-head-text-style address-head">OUR ADDRESS</h4>
                                <div class="address">
                                    <div class="address">
                                    <?php if ( get_field('address', 'option') ) : ?>
                                        <?php echo get_field('address', 'option'); ?>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 ">
                                <div class="copy small-top-pad"><span>
                                <?php if ( get_field('copyright_text', 'option') ) : ?>
                                    © <?php echo date('Y'); ?> <?php echo get_field('copyright_text', 'option'); ?>
                                <?php endif; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
          
        </div>
        </div>
    </footer>

<?php if ( have_rows('tracking_pixels', 'option') ) : ?>

<?php while( have_rows('tracking_pixels', 'option') ) : the_row(); ?>

<?php if(get_sub_field('pixel_location','option')=="footer"){
    echo get_sub_field('pixel_code','option');
}  ?>	

<?php endwhile; ?>

<?php endif; ?>

<script>
    const prevIcon = '<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/left.svg">';
    const nextIcon = '<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/right.svg">';
</script>

<?php wp_footer(); ?>



</body>
</html>
