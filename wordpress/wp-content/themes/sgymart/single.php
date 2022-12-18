<?php
if(!defined('ABSPATH')) exit;
get_header();
?>

<div class="container">
<main class="main" style="padding-top: 180px; margin: 0 auto;">
<?php while ( have_posts() ) : the_post(); ?>
 
 <?php $terms = get_the_terms($post->ID, 'tax_news'); ?>

 <article>
   <div class="article-header text-center" >
     <h1 class="ttl"><?php the_title(); ?></h1>
     <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y年m月j日' ); ?></time>

     <?php if (!empty($terms)) : ?>
     <?php foreach ( $terms as $term ) : ?>
     <span class="category"><?php echo $term->name; ?></span>
     <?php endforeach; ?>
     <?php endif; ?>

     </div>
     <div class="article-content " style="margin-top: 50px;">
       <?php the_content(); ?>
     </div>
   </article>
 <?php endwhile; ?>

</main>
     </div>
<?php
get_footer();
?>
