<?php $first_section = get_field('first_section',11);?>

<section class="secondSection">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow zoomIn">
                <img src="<?php echo $first_section['image'];?>" alt="">
            </div>
            <div class="col-md-5 wow fadeInRight">
                <label for="" class="label"><?php echo $first_section['heading'];?></label>
                <h2 class="heading"><?php echo $first_section['sub_heading'];?></h2>
                <p class="para"><?php echo $first_section['content'];?></p>
                <?php echo $first_section['list'];?>
                <hr />
                <div class="flex">
                    <div>
                        <a href="<?php echo $first_section['b_link'];?>"
                            class="anchor"><?php echo $first_section['b_text'];?></a>
                    </div>
                    <div>
                        <img src="<?php echo $first_section['image_2'];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>