<?php
if(!defined('ABSPATH')) exit;
get_header();
?>
<div class="container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="lyrics">
        <a href="<?php the_permalink(); ?>" class="lyrics_link">
            <div class="lyrics_image_box">
                <?php if(has_post_thumbnail()): ?>
                <img class="lyrics_image" src="<?php the_post_thumbnail_url('large'); ?>">
                <?php endif; ?>
            </div>
            <div class="lyrics_title_area">
                <h3 class="lyrics_title"><?php the_title(); ?></h3>
            </div>            
        </a>        
    </div>
<?php endwhile; endif; ?>
</div>
<?php
get_footer();
?>