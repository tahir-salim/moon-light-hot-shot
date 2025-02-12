<?php $seventh_section = get_field('seventh_section',11);?>

<section class="eightSection">
    <div class="container">
        <label for="" class="label wow zoomIn"><?php echo $seventh_section['heading'];?></label>
        <h2 class="heading wow fadeInLeft"><?php echo $seventh_section['sub_heading'];?></h2>
        <p class="para wow fadeInRight"><?php echo $seventh_section['content'];?></p>
        <div class="index-slider2 wow zoomIn">

            <?php    $x=1;  $args = array( 'post_type' => 'testimonial' , 'posts_per_page' => '-1','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

            <div>
                <div class="indexSliderDiv1">
                    <img src="<?php echo get_field('image');?>" alt="" class="image">
                    <p class="para1"><?php the_excerpt() ;?></p>
                    <div class="flex">
                        <div>
                            <img src="<?php the_post_thumbnail_url() ;?>" alt="">
                        </div>
                        <div>
                            <h3 class="heading1"><?php the_title() ;?></h3>
                            <p class="para2"><?php echo get_field('heading');?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $x++; endwhile; wp_reset_query(); ?>
        </div>
        <label for="" class="label1 wow zoomIn"><?php echo $seventh_section['heading_2'];?></label>
        <h2 class="heading wow fadeInLeft"><?php echo $seventh_section['heading_3'];?></h2>
        <p class="para3 wow fadeInRight"><?php echo $seventh_section['content_2'];?></p>
        <div class="row">
            <?php $box_list = $seventh_section['box_list'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>
            <div class="col-md-2 wow zoomIn" data-wow-delay="0.4s">
                <img src="<?php echo $boxlist['image']; ?>" alt="">
            </div>
            <?php $x++; }?>
        </div>
    </div>
</section>