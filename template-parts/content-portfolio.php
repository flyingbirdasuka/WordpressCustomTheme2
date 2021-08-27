      <div class="section-title">
         <h2>Recent IP &amp; Business Blog</h2>
      </div>
      <div class="row">
         <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <?php
                  $args = array(
                    'orderby'    => 'name',
                    'show_count' => false,
                    'title_li' => "",
                    "walker" => new CustomWalker()
                );

                  wp_list_categories($args); 
                ?>
            </ul>
             
         </div>
      </div>
      <?php 
         // the query
         $the_query = new WP_Query( array(
          
            'posts_per_page' => 6,
         )); 
      ?>
      <div class="row portfolio-container">
        <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <?php foreach ( ( get_the_category() ) as $category ) { ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo strtolower($category->cat_name . ' ');?>"><?php }?>
                <?php the_post_thumbnail("medium",['class' => 'img-fluid']); ?>

                  <div class="portfolio-info">
                      <h4><?php the_title(); ?></h4>
                      <p><?php //the_excerpt(); ?><a href="<?php the_permalink()?>" class="details-link" title="More Details"><u>read more</u></a></p>
                      
                  </div>
            </div>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php __('No News'); ?></p>
        <?php endif; ?>
      </div>