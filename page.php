<?php get_header();?>
     <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      
        <?php if (get_post()->post_name == "blog") { ?>
        <div class="container">
        <h2>IP & Business Blog</h2>
        <ol>
          <li><a href="/category/blog">Blog</a></li>
          <li><a href="/category/news">News</a></li>
        </ol>
      <?php } else { ?>
        <div class="container">
      <?php } ?>
        
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <?php
            if (get_post()->post_name == "blog") { ?>
              <div class="col-lg-8 entries">
                
                <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                 
                <?php if ( $wpb_all_query->have_posts() ) : ?>
                  <h4>Recent Posts</h4>
                  <ul>
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

                        <div class="row">
                          <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a>
                          <div class="search-single-result">
                            <div class="search-thumb"><?php the_post_thumbnail(array(100, 0)); ?></div>
                            <div class="search-excerpt"><?php the_excerpt(); ?></div>
                          </div>
                        </div>  
                    <?php endwhile; ?>
                  </ul>
                 
                  <?php wp_reset_postdata(); ?>
                 
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?> 
              
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

                    <?php 
                         $the_query = new WP_Query( array(
                            'posts_per_page' => 6,
                         )); 
                      ?>

                      <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                           <li>
                            <div class="relatedthumb"><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(array(100, 0)); ?></a></div>  
                              <div class="relatedcontent">
                              <h4><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <div class="related-date"><?php the_date(); ?></div>
                              </div>
                            </li>    
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                      <?php else : ?>
                        <p><?php __('No News'); ?></p>
                      <?php endif; ?>
                  </div>

                </div><!-- End sidebar -->
              </div>
            <?php   
            } else {
              echo get_post()->post_content;
            }
            ?>
     </div>
    </section>      
 <?php get_footer();?>
