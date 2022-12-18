<?php
if(!defined('ABSPATH')) exit;
get_header();
?>
<main class="container" style="margin-top: 80px;">
    <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri()?>/images/bg_top01.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>#sgymart</p>
                    <!-- <p>ようこそ</p> -->
                </div>
                </div>
                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri()?>/images/bg_top02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>#sgymart</p>
                    <!-- <p>Some representative placeholder content for the second slide.</p> -->
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row mt-4">
        <h5 class="text-center mt-2">Works</h5>
    <?php
        $post_names = get_post_types( array( 'public'  => true, '_builtin' => false ) );
        $args = array(
            'posts_per_page' => 100,
            'post_type' => array('works', 'blog', 'devlog'), 
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $posts = get_posts($args);
        // echo json_encode($posts);
        foreach( $posts as $post ) { setup_postdata( $post ); 
            $obj = get_post_type_object($post);
    ?>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card works__card" >
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
                    $post_taxonomy_type = get_post_type($post) . '_category';
                    // echo $post_taxonomy_type;
                    $terms = get_the_terms(get_the_ID(), 'works'.'_category');
                ?>
                <!-- <span class="badge rounded-pill text-bg-<?php echo get_post_type($post); ?> <?php echo get_post_type($post); ?>__card__category"><?php echo get_post_type($post); ?> / <?php echo $terms[0]->name ?></span> -->
                <span class="badge rounded-pill text-bg-<?php echo get_post_type($post); ?> <?php echo get_post_type($post); ?>__card__category"><?php echo $terms[0]->name ?></span>
            </a>
            </div>
        </div>
        </div>
    <?php } wp_reset_postdata(); wp_reset_query(); ?>
    </div>
    <div class="row mt-4">

        <h5 class="text-center mt-2">Twitter</h5>
        <div class="col-12 col-md-6">
            <a class="twitter-timeline" data-height="600" href="https://twitter.com/sgym_V?ref_src=twsrc%5Etfw">@sgym_V</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-12 col-md-6 mt-md-auto mt-4">
            <a class="twitter-timeline" data-height="600" href="https://twitter.com/sgym_A?ref_src=twsrc%5Etfw">@sgym_A</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</main>
<?php
get_footer();
?>