<?php global $options; ?>
<section class="nightSection"
    style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/bgg.png);">
    <div class="ninthDiv"
        style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/bgggg.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="flex">
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/shape.png" alt="">
                        </div>
                        <div>
                            <h4 class="heading">OFFICE ADDRESS:</h4>
                            <p class="para"><?php echo $options['address'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="flex">
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/shape1.png" alt="">
                        </div>
                        <div>
                            <h4 class="heading">CONTACT US:</h4>
                            <a href="mailto:<?php echo $options['email'];?>"
                                class="anchor"><?php echo $options['email'];?></a>
                            <a href="tel:<?php echo $options['phone_number'];?>"
                                class="anchor"><?php echo $options['phone_number'];?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.8s">
                    <div class="flex">
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/clock.png" alt="">
                        </div>
                        <div>
                            <h4 class="heading">WORKING HOURS:</h4>
                            <p class="para"><?php echo $options['timing'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>