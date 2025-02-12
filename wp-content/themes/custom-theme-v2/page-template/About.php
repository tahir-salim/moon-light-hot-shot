<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>


<?php get_template_part("includes/aboutUs"); ?>

<section class="aboutSection">
    <?php get_template_part("includes/project"); ?>
</section>

<section class="abt-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <label for="" class="label"><?php echo $first_section['heading'];?></label>
                <h2 class="heading"><?php echo $first_section['heading_2'];?></h2>
                <p class="para"><?php echo $first_section['content'];?></p>
                <h3 class="heading1"><?php echo $first_section['heading_3'];?></h3>
                <div class="progress">
                    <div class="progress-value"></div>
                </div>
                <h3 class="heading1"><?php echo $first_section['heading_4'];?></h3>
                <div class="progress1">
                    <div class="progress-value1"></div>
                </div>
                <h3 class="heading1"><?php echo $first_section['heading_5'];?></h3>
                <div class="progress2">
                    <div class="progress-value2"></div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <img src="<?php echo $first_section['image'];?>" alt="">
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/need"); ?>

<section class="abt-sec1">
    <div class="container">
        <label for="" class="label"><?php echo $first_section['heading_6'];?></label>
        <h2 class="heading"><?php echo $first_section['heading_7'];?></h2>
        <p class="para"><?php echo $first_section['content_2'];?></p>
        <div class="index-slider2">

            <?php $box_list = $first_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>
            <div>
                <div class="myDiv">
                    <div class="myDiv3">
                        <div class="myDiv1">
                            <i class="fal fa-plus icon"></i>
                        </div>
                        <div class="myDiv2">
                            <i class="fab fa-facebook-f icon1"></i>
                        </div>
                        <div class="myDiv4">
                            <i class="fab fa-twitter icon1"></i>
                        </div>
                        <div class="myDiv5">
                            <i class="fab fa-whatsapp icon1"></i>
                        </div>
                        <div class="myDiv6">
                            <i class="fab fa-linkedin-in icon1"></i>
                        </div>
                    </div>
                    <img src="<?php echo $boxlist['image']; ?>" alt="" class="image1">
                    <h3 class="heading1"><?php echo $boxlist['heading']; ?></h3>
                    <p class="para1"><?php echo $boxlist['heading_2']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
        <?php get_template_part("includes/happy"); ?>
    </div>
</section>
<?php get_template_part("includes/office"); ?>
<?php get_footer(); ?>