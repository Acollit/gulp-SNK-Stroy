      
<?php get_header(); ?>

<main class="main">
  <section class="bread">
    <div class="container">
      <div class="bread__content">
        <div class="bread__wrapper">
          <ul class="list-reset bread__sublist">
            <li class="bread__sublist-item">
              <a href="/" class="bread__sublist-link">Главная</a>
            </li>
            <li class="bread__sublist-item">
              <a class="bread__sublist-link"><?php the_title(); ?></a>
            </li>
          </ul>
        </div>
        
        <h1 class="bread__title">
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </section>
  <section class="post">
    <div class="container">
      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <section class="posts">
    <div class="container">
      <h2 class="posts__title">
        Другие статьи
      </h2>
      <div class="posts__content">
        <?php
          $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 3, // Количество постов
              'order'          => 'DESC',
              'orderby'        => 'date'
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); ?>
                  <a href="<?php the_permalink(); ?>" class="posts__item">
                    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" class="image" width="90" height="90" alt="<?php the_title(); ?>">
                    <div class="posts__inner">
                      <div class="posts__box">
                        <p class="posts__subtitle"><?php the_title(); ?></p>
                        <p class="posts__text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                      </div>
                    </div>
                    <div  class="posts__link">
                      <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_112_3887)">
                          <path d="M2.59984 11.9001L11.3994 3.10056M11.3994 3.10056V9.70022M11.3994 3.10056H4.79972" stroke="#914948" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_112_3887">
                            <rect width="14" height="14" fill="white" transform="translate(0 0.5)" />
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </a>
              <?php endwhile;
              wp_reset_postdata();
          else :
              echo '<p>Постов пока нет.</p>';
          endif;
          ?>

      </div>
    </div>
  </section>
  
  

  
 </main> 


<?php get_footer(); ?>