<?php  get_header(); ?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/blog">Blog</a></li>
    </ol>

  </div>
</section><!-- End Breadcrumbs -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
          <div class="col-lg-8 entries">
            <div class="container" data-aos="fade-up">
              <div class="col-lg-12 entries">
          
                <?php while ( have_posts() ) : the_post(); ?>
                  <div class="row">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div class="search-single-result">
                      <div class="search-thumb"><?php the_post_thumbnail(array(100, 0)); ?></div>
                      <div class="search-excerpt"><?php the_excerpt(); ?></div>
                    </div>
                  </div>  
                  <?php endwhile; ?>

              </div>
              <?php the_posts_navigation(array(
                'screen_reader_text' => " "
              )); ?>
              
            </div>
        </div>

        <div class="col-lg-4">
                <div class="sidebar">
                  <h3 class="sidebar-title">Search</h3>
                  <div class="sidebar-item search-form">
                    
                    <?php get_search_form();?>
                    
                  </div><!-- End sidebar search formn-->

                  <h3 class="sidebar-title">Categories</h3>
                  <div class="sidebar-item categories">
                    <ul>
                        <?php 
                         wp_list_categories(array(
                            
                            'orderby'    => 'name',
                            'show_count' => true,
                            'title_li' => ""
                          ));

                        ?>
                          
                    </ul>
                  </div><!-- End sidebar categories-->

                  <h3 class="sidebar-title">Recent Posts</h3>
                  <div class="sidebar-item recent-posts">
                   <?php $orig_post = $post;
                      global $post;
                      $tags = wp_get_post_tags($post->ID);
                      if ($tags) {
                        $tag_ids = array();
                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                        $args = array(
                          'tag__in' => $tag_ids,
                          'post__not_in' => array($post->ID),
                          'posts_per_page' => 5, // Number of related posts that will be shown.
                          'ignore_sticky_posts' => 1
                        );
                        $my_query = new wp_query( $args );
                        if( $my_query->have_posts() ) {
                          while( $my_query->have_posts() ) {
                          $my_query->the_post(); ?>

                          <li>
                            <div class="relatedthumb"><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(array(100, 0)); ?></a></div>
                            <div class="relatedcontent">
                              <h4><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <div class="related-date"><?php the_date(); ?></div>
                            </div>
                          </li>
                          <?php }
                          echo '</ul></div>';
                        }
                      }
                      $post = $orig_post;
                      wp_reset_query(); ?>

                  </div>

                </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->
      </div>
    </div>

  </section>

</article><!-- #post-## -->
<?php  get_footer(); ?>
