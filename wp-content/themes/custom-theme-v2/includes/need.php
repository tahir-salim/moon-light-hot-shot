<?php $sixth_section = get_field('sixth_section',11);?>

<section class="sixthSection" style="background-image:url(<?php echo $sixth_section['image'];?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0 wow fadeInLeft">
                <img src="<?php echo $sixth_section['image_2'];?>" alt="">
            </div>
            <div class="col-md-4 px-0 wow fadeInRight">
                <div class="sixthDiv" style="background-image:url(<?php echo $sixth_section['image_3'];?>);">
                    <label for="" class="label"><?php echo $sixth_section['heading'];?></label>
                    <h2 class="heading"><?php echo $sixth_section['heading_2'];?></h2>
                    <div class="flex">
                        <div>
                            <a href="tel:<?php echo $sixth_section['tel'];?>" class="anchor"><i
                                    class="fas fa-phone fa-rotate-90 icon"></i></a>
                        </div>
                        <div>
                            <h5 class="heading1"><?php echo $sixth_section['heading_3'];?></h5>
                            <h5 class="heading2"><?php echo $sixth_section['tel_2'];?></h5>
                        </div>
                    </div>
                    <a href="<?php echo $sixth_section['b_link'];?>"
                        class="anchor1"><?php echo $sixth_section['b_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>