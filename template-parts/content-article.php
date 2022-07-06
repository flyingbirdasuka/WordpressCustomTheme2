<?php get_header(); ?>

  <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="<?php the_permalink()?>"><?php the_category(' '); ?></a></li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
              <div class="entry-img">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html"><?php single_post_title();?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i><a href="blog-single.html"><?php the_author();?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><a href="blog-single.html"><?php the_date();?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                  <?php the_content(); ?>     

              </div>
            
              <div class="entry-footer">
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><?php the_tags(); ?></li>
                </ul>
              </div>

            </article>
           
          </div><!-- End blog entries list -->

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
                     // the query
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

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  <!-- ======= Footer ======= -->
<?php get_footer(); ?>

