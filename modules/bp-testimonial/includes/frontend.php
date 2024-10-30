<?php
//echo "<pre>"; print_r($settings);   echo"</pre>";
$masonry    =   $settings->masonry_layout;
$testimonials = $settings->testimonial_list;
$skin = $settings->skin;
//print_r($testimonials);
$module->add_render_attribute('grid-wrapper','class','bp-masonry-'.$masonry);
$module->add_render_attribute('grid-wrapper','class','bp-grid-wrapper');
?>
<div <?php echo $module->get_render_attribute_string('grid-wrapper'); ?>>
    <div class="bp-grid">
        <?php if(!empty($testimonials )){
            foreach ($testimonials as $testimonial){
                $name = $testimonial->person_name;
                $avatar = $testimonial->person_image_src;
                $company = $testimonial->company;
               // $company = $testimonial->company;
                $rates  =   $testimonial->rating;
                $message = $testimonial->message;
            ?>
            <div class="bp-grid-container">
                <div class="bp-grid-item">
                    <div class="testimonial-wrapper <?php echo $skin; ?> ">
                        <?php if(!empty($avatar) && $skin != 'skin-5'){?>
                            <div class="image-wrapper">
                                <img src="<?php echo $avatar; ?>">
                            </div>
                        <?php } ?>

                        <?php if($skin == 'skin-3'){?>
                            <div class="content-section">
                        <?php } ?>
                        <div class="content-wrapper">
                            <blockquote class="wrapper">
                                <span class="content"><?php echo $message; ?></span>
                            </blockquote>
                            <?php if($skin == 'skin-1' || $skin == 'skin-5'){ ?>
                                <div class="arrow"></div>
                            <?php } ?>
                        </div>
                        <?php if($skin == 'skin-5'){?>
                            <div class="detail-wrapper-layout5">
                                <div class="image-wrapper">
                                    <img src="<?php echo $avatar; ?>">
                                </div>
                        <?php } ?>
                        <div class="detail-wrapper">
                            <div class="rating-wrapper">
                                <?php for($i=1; $i<=5; $i++){?>
                                    <?php if($i <= $rates){?>
                                        <i class="fa fa-star"></i>
                                    <?php } elseif ($i > $rates && $i-1 < $rates) {?>
                                        <i class="fas fa-star-half-alt"></i>
                                    <?php } else {?>
                                        <i class="fa fa-star-o"></i>
                                    <?php } ?>
                                <?php  } ?>
                            </div>
                            <div class="title-wrapper">
                                <div class="title"><?php echo $name; ?></div>
                                <?php if($skin == 'skin-1'){?>
                                    <div class="company"><?php echo $company; ?></div>
                                <?php } ?>
                            </div>
                            <?php if($skin != 'skin-1'){?>
                                <div class="company-wrapper">
                                    <div class="company"><?php echo $company; ?></div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if($skin == 'skin-5'){?>
                            </div>
                        <?php } ?>
                        <?php if($skin == 'skin-3'){?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
                }
        } ?>
    </div>
</div>