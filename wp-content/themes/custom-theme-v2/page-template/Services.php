<?php /** * Template Name: Services Template */ ?>
<?php $third_section = get_field('third_section',11);?>

<?php get_header(); ?>

<section class="serviceSection">
    <div class="container">
        <label for="" class="label wow fadeInDown"><?php echo $third_section['heading'];?></label>
        <h2 class="heading wow fadeInLeft"><?php echo $third_section['sub_heading'];?></h2>
        <p class="para wow fadeInRight"><?php echo $third_section['content'];?></p>
        <div class="row">
            
            <?php    $x=1;  $args = array( 'post_type' => 'service' , 'posts_per_page' => '-1','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

                <div class="col-md-4 wow fadeInLeft">
                <img src="<?php the_post_thumbnail_url() ;?>" alt="" class="image">
                <div class="indexDiv2">
                    <h3 class="heading1"><?php the_title() ;?></h3>
                    <p class="para1"><?php the_excerpt() ;?></p>
                    <hr />
                    <div class="flex">
                        <div>
                            <a href="" class="anchor">READ MORE</a>
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
</section>

<?php get_template_part("includes/need"); ?>

<?php get_template_part("includes/office"); ?>
<?php get_footer(); ?>