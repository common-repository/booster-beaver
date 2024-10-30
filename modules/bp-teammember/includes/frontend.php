<?php
//echo '<pre>'; print_r($settings); echo '</pre>';

$masonry    =   $settings->masonry_layout;
$team_members = $settings->team_member_list;
$skin = $settings->skin;
//print_r($testimonials);
$module->add_render_attribute('grid-wrapper','class','bp-masonry-'.$masonry);
$module->add_render_attribute('grid-wrapper','class','bp-grid-wrapper');

?>
<div <?php echo $module->get_render_attribute_string('grid-wrapper'); ?>>
        <div class="bp-grid">
            <?php if(!empty($team_members )) {
                foreach ($team_members as $team_member) {
                    //print_r($team_member);
                    $name = $team_member->person_name;
                    $avatar = $team_member->person_image_src;
                    $designation = $team_member->designation;
                    $message = $team_member->message;
            ?>
            <div class="bp-grid-container">
                <div class="bp-grid-item">
                    <div class="team-member-wrapper <?php echo $skin; ?> ">
                        <?php if(!empty($avatar)){?>
                            <div class="team-member-avatar-wrapper">
                                <img src="<?php echo $avatar; ?>" class="team-member-avatar">
                            </div>
                        <?php } ?>
                        <?php if(!empty($name)){?>
                            <div class="team-member-name-wrapper">
                                <h3 class="team-member-name"><?php echo $name; ?></h3>
                            </div>
                        <?php } ?>
                        <?php if(!empty($designation)){?>
                            <div class="team-member-designation-wrapper">
                                <h4 class="team-member-designation"><?php echo $designation; ?></h4>
                            </div>
                        <?php } ?>
                        <div class="team-member-social-wrapper">
                            <?php for($i = 1; $i <= 6; $i++){ $p = 'social_link_'.$i; $q = 'social_profile_'.$i; ?>
                                <?php if(!empty($team_member->$p)) {  ?>
                                    <a href="<?php echo $team_member->$p; ?>" >
                                        <i class="<?php echo $settings->icon_color_type; ?>-<?php echo $team_member->$q; ?> fa fa-<?php echo $team_member->$q; ?>"></i>
                                    </a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <?php if(!empty($message)){?>
                            <div class="team-member-message-wrapper">
                                <p class="message"><?php echo $message; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
             <?php }
            }?>
        </div>
</div>