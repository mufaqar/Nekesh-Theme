<?php
/* Template Name: Team */

get_header() ?>

<div class="wrapper">
    <div id="team-container">
        <div class="team-page-heading">
            <?php the_title() ?>
        </div>
        <div class="team-area">
            <?php
            $args = array(
                'post_type' => 'team',
                'posts_per_page' => -1, // or a number like 10
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $team_query = new WP_Query($args);

            if ($team_query->have_posts()):
                while ($team_query->have_posts()):
                    $team_query->the_post(); ?>
                    <div class="single-team">
                        <div class="team-content-area">
                            <div class="team-image">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) {
                                        $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                        echo '<img src="' . esc_url($thumb_url) . '" alt="Location Image" />';
                                    } ?>
                                </a>
                            </div><!--location image-->
                            <div class="team-content">
                                <span>Role : <a href="#"><?php echo get_post_meta($post->ID, "role", true); ?></a></span>
                                <span>Email: <a href="mailto:<?php echo get_field("contact_email"); ?>"
                                        target="_blank"><?php echo get_field("contact_email"); ?></a></span>
                                <span>Location: <?php echo get_field("location"); ?></span>
                            </div><!--location content-->
                            <div class="clear"></div>
                        </div><!--location content area-->
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No Team Member found.</p>';
            endif;
            ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>