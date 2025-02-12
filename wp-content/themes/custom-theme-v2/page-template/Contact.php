<?php /** * Template Name: Contact Template */ ?>
<?php global $options; ?>

<?php get_header(); ?>

<section class="contactSection">
    <div class="container">
        <div class="contactDiv">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="contactDiv1">
                        <h2 class="heading">GET A QUOTE</h2>
                        <?php echo do_shortcode('[contact-form-7 id="90328e4" title="Contact form 1"]');?>

                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="contactDiv2">
                        <h2 class="heading1">CONTACT INFORMATION</h2>
                        <div class="contactDiv3">
                            <h4 class="heading2">Contact Number:</h4>
                            <div class="flex">
                                <div>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon5.png"
                                        alt="">
                                </div>
                                <div>
                                    <a href="tel:<?php echo $options['phone_number'];?>"
                                        class="anchor"><?php echo $options['phone_number'];?></a>
                                    <a href="tel:<?php echo $options['phone_number'];?>"
                                        class="anchor"><?php echo $options['phone_number'];?></a>
                                </div>
                            </div>
                        </div>
                        <div class="contactDiv3">
                            <h4 class="heading2">Contact Number:</h4>
                            <div class="flex">
                                <div>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon6.png"
                                        alt="">
                                </div>
                                <div>
                                    <a href="mailto:<?php echo $options['email'];?>"
                                        class="anchor"><?php echo $options['email'];?></a>
                                    <a href="mailto:<?php echo $options['email'];?>"
                                        class="anchor"><?php echo $options['email'];?></a>
                                </div>
                            </div>
                        </div>
                        <div class="contactDiv3">
                            <h4 class="heading2">Contact Number:</h4>
                            <div class="flex">
                                <div>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon8.png"
                                        alt="">
                                </div>
                                <div>
                                    <a href="" class="anchor"><?php echo $options['address'];?></a>
                                    <a href="" class="anchor"><?php echo $options['address'];?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<iframe src="<?php echo get_field('link');?>" width="100%" height="450" style="border:0;" allowfullscreen=""
    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php get_template_part("includes/office"); ?>
<?php get_footer(); ?>