<?php
if(!defined('ABSPATH')) exit;
?>
</div>
<?php
      global $template;
      $temp = pathinfo($template);     
    ?>
<footer class="text-center text-lg-start   footer__bg  <?php if(!is_home() && !is_front_page()): ?> footer__bg--<?php echo get_post_type( $post ); ?> footer__bg--<?php echo basename($temp['filename']);?><?php endif; ?>" style="margin-top:  150px;">
  <section class="" style="padding: 20px;">
    <div class="container text-center text-md-start">
      <div class="row mt-3">
        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
          <h6 class="fw-bold mb-4">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo_24.png" alt="" class="d-inline-block align-text-top"><span class="ps-2">sgymart</span> -->
          <span class="ps-2">#sgymart</span>
          </h6>
        </div>
        <div class="col-12 col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="fw-bold mb-4">
            About
          </h6>
          <p>
            <a href="/about" class="text-reset">This</a>
          </p>
          <p>
            <a href="/about/profile" class="text-reset">Profile</a>
          </p>
          <!-- <p>
            <a href="#" class="text-reset">Sitemap</a>
          </p> -->
          <p>
            <a href="/about/info" class="text-reset">Info</a>
          </p>
        </div>
        <div class="col-6 col-md-2 col-lg-2 col-xl-2 mx-auto mb-1">
          <h6 class="fw-bold mb-4">Contents</h6>          
          <p><a href="/works" class="text-reset">Works</a></p>
          <p><a href="/live" class="text-reset">Live</a></p>
          <!-- <p><a href="/dict" class="text-reset">Dict</a></p> -->
          <!-- <p><a href="/prototype" class="text-reset">Prototype</a></p> -->
          <!-- <p><a href="/contact" class="text-reset">Contact</a></p> -->
        </div>
        <div class="col-6 col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="fw-bold mb-4">
          External
          </h6>
          <p><a href="https://www.youtube.com/@sgym" class="text-reset" target="_blank" rel="noopener noreferrer">Youtube</a></p>
          <p><a href="https://twitter.com/sgym_V" class="text-reset" target="_blank" rel="noopener noreferrer">Twitter(Vtuber)</a></p>
          <p><a href="https://twitter.com/sgym_A" class="text-reset" target="_blank" rel="noopener noreferrer">Twitter(Composer)</a></p>          
          <!-- <p><a href="https://www.nicovideo.jp/my/mylist/73364798" class="text-reset" target="_blank" rel="noopener noreferrer">niconico</a></p> -->
          <!-- <p><a href="https://www.pixiv.net/users/74290962" class="text-reset" target="_blank" rel="noopener noreferrer">pixiv</a></p> -->
        </div>
      </div>
    </div>
  </section>
  <div class="text-center pb-3" >
  &copy; 2022 sgym
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
