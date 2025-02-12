<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <a href="<?php echo site_url();?>" class="logo">
                        <img src="<?php echo $options['logo'];?>" alt="">
                    </a>
                    <div class="socialLinks">
                        <a href="<?php echo $options['facebook'];?>" class="anchor1"><i class="fab fa-facebook-f icon"></i></a>
                        <a href="<?php echo $options['twitter'];?>" class="anchor"><i class="fab fa-twitter icon"></i></a>
                        <a href="<?php echo $options['whatsapp'];?>" class="anchor"><i class="fab fa-whatsapp icon"></i></a>
                        <a href="<?php echo $options['linkedin'];?>" class="anchor"><i class="fab fa-linkedin-in icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="heading">
                            <before>USEFULL</before> LINKS
                        </h3>
                        <!-- <ul>
                            <li><i class="fal fa-arrow-right icon1"></i><a href="./">Home</a></li>
                            <li><i class="fal fa-arrow-right icon1"></i><a href="about.php">About Us</a></li>
                            <li><i class="fal fa-arrow-right icon1"></i><a href="services.php">Services</a></li>
                            <li><i class="fal fa-arrow-right icon1"></i><a href="contact.php">Contact Us</a></li>
                        </ul> -->
                        <?php wp_nav_menu( array( 'menu' => 'Footer Menu 1', 'menu_class'=> '' ) ); ?>

                    </div>
                    <div class="col-md-4">
                        <h3 class="heading">
                            <before>OUR SER</before>VICES
                        </h3>
                        <?php wp_nav_menu( array( 'menu' => 'Footer Menu 2', 'menu_class'=> '' ) ); ?>

                    </div>
                    <div class="col-md-4">
                        <h3 class="heading">
                            <before>SUBSCRI</before>BE NOW
                        </h3>
                        <p class="para"><?php echo $options['footer_about'];?></p>
                        <?php echo do_shortcode('[email-subscribers-form id="1"]');?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright ">
    <div class="container">
        <div class="flex">
            <div>
                <p class="para"><?php echo $options['copyright'];?></p>
            </div>
            <div>
                <a href="" class="anchor">Terms & Condition</a> <a href="" class="anchor1">Privacy & Policy </a>
            </div>
        </div>
    </div>
</div>
</main>
<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>
<script>
new WOW().init();
</script>
</body>

</html>