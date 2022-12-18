<?php
if(!defined('ABSPATH')) exit;
get_header();
?>
<main class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col-12 col-lg-2 d-none d-lg-block sidemenu" style="margin-top: 80px;">
            <?php
            $terms = get_terms('works_category');
            foreach($terms as $term): 
                $query = new WP_Query(
                    array(
                        'post_status' => 'publish',
                        'post_type' => 'works',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'works_category',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            )
                        ),
                    )
                )
            ?>
            <?php if($query->have_posts()): ?>
                <h4><?php echo $term->name; ?></h4>
                <?php while($query->have_posts()): $query->the_post(); ?>
                <ul>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                </ul>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php 
            endforeach; 
            ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="col-12 col-lg-10 col-xl-8 main">
            <div class="works__content">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col text-center p-3">
                            <h1 style="font-size: 25px;">Works</h1>
                            </div>
                        </div>
                    <div class="row">
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <!-- TODO: 各種ブレイクポイントにおけるカードのサイズ設定 -->
                        <div class="col-12 col-sm-6 col-md-6">
                        <div class="card works__card">
                            <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top works__card__image" height="200">
                            <?php endif; ?>
                                <div class="card-body">
                                    <p class="card-title text-center works__card__title"><?php the_title(); ?></p>
                                    <?php 
                                        $description = $post->post_content;
                                        $description = str_replace(array("\r\n","\r","\n","&nbsp;"), '', $description);
                                        $description = wp_strip_all_tags($description);
                                        $description = preg_replace('/\[.*\]/', '', $description);
                                        $description = mb_strimwidth($description, 0, 40, "..."); 
                                    ?>
                                    <!-- <p class="card-text works__card__description"><?php echo $description ?></p> -->
                                </div>
                            </a>
                            <div class="d-flex justify-content-between align-items-baseline">
                            <div class=" works__card__date"><?php the_time('Y年m月j日'); ?></div>
                            <a>
                                <?php
                                    $terms = get_the_terms(get_the_ID(), 'works_category');
                                ?>
                                <span class="badge rounded-pill text-bg-works works__card__category"><?php echo $terms[0]->name ?></span>
                            </a>
                            </div>
                        </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-2 d-none d-xl-block toc">
            <!-- BootstrapのScrollSpyを使用するといいかも？ -->
        </div>
    </div>
</main>
<?php
get_footer();
?>