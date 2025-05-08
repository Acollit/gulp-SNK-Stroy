      
<?php get_header(); ?>
<?php 
/* Template Name: otzyvy */
?>
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
                  <a class="bread__sublist-link">Отзывы</a>
                </li>
              </ul>
            </div>
            <h1 class="bread__title">
              Отзывы
            </h1>
          </div>
        </div>
      </section>
      <section class="otzyvy">
        <div class="container">
          <?php if(have_rows('otzyvy')): ?>
            <?php while(have_rows('otzyvy')): the_row(); ?>
                <div class="otzyvy__item">
                  <p class="otzyvy__name">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="8" cy="7" r="6.5" stroke="#914948" />
                      <circle cx="8" cy="7" r="3" fill="#914948" />
                    </svg>
                    <?php the_sub_field('otzyvy-name'); ?>
                  </p>
                  <p class="otzyvy__text">
                    <?php the_sub_field('otzyvy-text'); ?>
                  </p>
                  <p class="otzyvy__time">
                    <?php the_sub_field('otzyvy-time'); ?>
                  </p>
                </div>
                
            <?php endwhile; ?>
          <?php endif; ?>
         
     
        </div>
      </section>

    </main>


<?php get_footer(); ?>