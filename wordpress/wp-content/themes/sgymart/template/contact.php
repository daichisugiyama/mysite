<?php
/*
Template Name: contact
*/
if(!defined('ABSPATH')) exit;
get_header();
?>
<main class="container" style="margin-top: 180px;">
    <article>
        <div class="article-header text-center" >
            <h1 class="ttl"><?php the_title(); ?></h1>
            </div>
            <div class="article-content " style="margin-top: 50px;">
            <?php the_content(); ?>
        </div>
   </article>
</main>
<?php
get_footer();
?>