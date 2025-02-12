<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fourth_section = get_field('fourth_section');?>



<?php get_header(); ?>
<div class="mainBanner" style="background-image:url(<?php echo $banner_section['image'];?>);">
    <div class="container">
        <img src="<?php echo $banner_section['image_2'];?>" alt="" class="image">
        <img src="<?php echo $banner_section['image_3'];?>" alt="" class="image1">
        <img src="<?php echo $banner_section['image_4'];?>" alt="" class="image2">
        <div class="index-slider wow zoomIn">

            <?php $box_list = $banner_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div>
                <label for="" class="label"><?php echo $boxlist['heading']; ?></label>
                <label for="" class="label1">
                    <?php echo $boxlist['heading_2']; ?>
                </label>
                <h1 class="heading">
                    <?php echo $boxlist['heading_3']; ?>
                </h1>
                <p class="para"><?php echo $boxlist['content']; ?></p>
                <a href="<?php echo $boxlist['b_link']; ?>" class="anchor"><?php echo $boxlist['b_text']; ?></a> <a
                    href="<?php echo $boxlist['b_link_2']; ?>" class="anchor1"><?php echo $boxlist['b_text_2']; ?></a>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<section class="firstSection">
    <div class="container">
        <div class="firstDiv1 wow fadeInUp">
            <div class="row">
                <div class="col-md-4">
                    <div class="firstDiv">
                        <label for="" class="label"><?php echo $second_section['heading'];?></label>
                        <h2 class="heading"><?php echo $second_section['heading_2'];?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="para"><?php echo $second_section['content'];?></p>
                </div>
            </div>
            <div class="index-slider1">
                <?php $box_list = $second_section['box_list'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <div>
                    <div class="indexDiv<?php if ($x==2) {echo 1;}?>">
                        <img src="<?php echo $boxlist['image']; ?>" alt="">
                        <h4 class="heading1"><?php echo $boxlist['heading']; ?></h4>
                        <p class="para1"><?php echo $boxlist['content']; ?></p>
                    </div>
                </div>
                <?php $x++; }?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/aboutUs"); ?>

<section class="thirdSection" style="background-image:url(<?php echo $third_section['image'];?>);">
    <div class="container">
        <label for="" class="label wow zoomIn"><?php echo $third_section['heading'];?></label>
        <h2 class="heading wow fadeInLeft"><?php echo $third_section['sub_heading'];?></h2>
        <p class="para wow fadeInRight"><?php echo $third_section['content'];?></p>
        <div class="thirdSectionDiv">
            <div class="index-slider1">
                <?php    $x=1;  $args = array( 'post_type' => 'service' , 'posts_per_page' => '4','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                <div>
                    <img src="<?php the_post_thumbnail_url() ;?>" alt="" class="image">
                    <div class="indexDiv2">
                        <h3 class="heading1"><?php the_title() ;?></h3>
                        <p class="para1"><?php the_excerpt() ;?></p>
                        <hr />
                        <div class="flex">
                            <div>
                                <a href="<?php echo site_url();?>/services" class="anchor">READ MORE</a>
                            </div>
                            <div>
                                <a href="" class="anchor1"><i class="fal fa-arrow-right icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $x++; endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>

<section class="fourthSection">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow fadeInLeft">
                <label for="" class="label"><?php echo $fourth_section['heading'];?></label>
                <h2 class="heading"><?php echo $fourth_section['sub_heading'];?></h2>
                <p class="para"><?php echo $fourth_section['content'];?></p>

                <?php $box_list = $fourth_section['box_list'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <div class="flex">
                    <div>
                        <img src="<?php echo $boxlist['image']; ?>" alt="">
                    </div>
                    <div>
                        <h4 class="heading1"><?php echo $boxlist['heading']; ?></h4>
                        <p class="para1"><?php echo $boxlist['content']; ?></p>
                    </div>
                </div>
                <?php $x++; }?>
            </div>
            <div class="col-md-7 text-end wow zoomIn">
                <div class="fourthDiv">
                    <img src="<?php echo $fourth_section['image'];?>" alt="">
                    <a href="<?php echo $fourth_section['link'];?>" class="anchor play-btn" data-fancybox="media "><i
                            class="fas fa-play icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/project"); ?>

<?php get_template_part("includes/need"); ?>

<?php get_template_part("includes/happy"); ?>

<?php get_template_part("includes/office"); ?>
<?php get_footer(); ?>