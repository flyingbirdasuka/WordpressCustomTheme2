<?php get_header(); ?>

      <?php $post = get_post(2397); ?> <!-- slide -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php echo $post->post_content; ?>
        </div>
      </section>

      <?php $post = get_post(2399); ?> <!-- topics -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php echo $post->post_content; ?>
        </div>
      </section> 

      <?php $post = get_post(2401); ?> <!-- about us -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php echo $post->post_content; ?>
        </div>
      </section>  

      <?php $post = get_post(2403); ?> <!-- services -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php echo $post->post_content; ?>
        </div>
      </section> 

      <?php $post = get_post(2405); ?> <!-- cta -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php echo $post->post_content; ?>
        </div>
      </section>  

      <?php $post = get_post(2409); ?> <!-- blog -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php get_template_part( 'template-parts/content','portfolio');?>
        </div>
      </section>

      <?php $post = get_post(2407); ?> <!-- projects -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php echo $post->post_content; ?>
        </div>
      </section>

      <?php $post = get_post(2411); ?> <!-- publication -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container" data-aos="fade-up">
          <?php echo $post->post_content; ?>
        </div>
      </section>

      <?php $post = get_post(2413); ?> <!-- contact page -->
      <section id="<?=strtolower($post->post_title); ?>" class="<?=strtolower($post->post_title); ?>">
        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact Us</h2>
          </div>
          <div class="row mt-1 d-flex justify-content-end aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
            <div class="col-lg-4">
              <?php echo $post->post_content; ?>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
              <?php echo do_shortcode( '[contact-form-7 id="962" title="Contact form 1"]' );?>
            </div>
          </div>
        </div>
      </section>

  <?php get_footer();?>
