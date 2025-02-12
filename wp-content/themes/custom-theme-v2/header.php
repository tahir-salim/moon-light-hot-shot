<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <div class="main-header">
            <a href="tel:<?php echo $options['phone_number'];?>" class="anchor111"> <i
                    class="fas fa-phone fa-rotate-90 iconic"></i>
                <?php echo $options['phone_number'];?></a>
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row ">
                    <div class="col-md-3 text-center">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="flex">
                            <div>
                                <i class="fas fa-map-marker-alt icon"></i> <label for=""
                                    class="label"><?php echo $options['address'];?></label>
                            </div>
                            <div>
                                <i class="far fa-clock icon"></i> <label for=""
                                    class="label"><?php echo $options['timing'];?></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-end">
                        <a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f icon1"></i></a> <a
                            href="<?php echo $options['twitter'];?>"><i class="fab fa-twitter icon1"></i></a> <a
                            href="<?php echo $options['linkedin'];?>"><i class="fab fa-linkedin-in icon1"></i></a> <a
                            href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram icon1"></i></a>
                    </div>
                    <div class="col-md-12 text-end">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                                <li class="active"><a href="./">Home+</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><i class="fal fa-search icon2"></i></li>
                                <li><a href="contact.php" class="anchor">Contact Us</a></li>
                            </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>
        <div class="aboutBanner" style="background-image:url(<?php echo $banner_section['image'];?>);">
            <img src="<?php echo $banner_section['image_2'];?>" alt="" class="image">
            <div class="container wow fadeInUp">
                <h1 class="heading">
                    <?php echo $banner_section['heading'];?>
                </h1>
                <a href="<?php echo site_url();?>" class="anchor"><?php echo $banner_section['b_text'];?></a> <i
                    class="fal fa-arrow-right icon"></i>
                <a href="<?php echo $banner_section['b_link_2'];?>"
                    class="anchor1"><?php echo $banner_section['b_text_2'];?></a>
            </div>
        </div>
        <?php }?>