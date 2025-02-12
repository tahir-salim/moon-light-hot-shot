<?php $fifth_section = get_field('fifth_section',11);?>
<section class="fifthSection">
    <div class="container">
        <div class="fifthDiv wow fadeInUp" style="background-image:url(<?php echo $fifth_section['image'];?>);">
            <div class="row">
                <?php $box_list = $fifth_section['box_list'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <div class="col-md-3 colling">
                    <h2 class="heading"><?php echo $boxlist['heading']; ?></h2>
                    <h3 class="heading1"><?php echo $boxlist['sub_heading']; ?></h3>
                    <p class="para"><?php echo $boxlist['content']; ?></p>
                </div>
                <?php $x++; }?>
            </div>
        </div>
    </div>
</section>