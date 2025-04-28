      
<?php get_header(); ?>
<?php 
/* Template Name: quest */
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
              <a class="bread__sublist-link">Вопрос-ответ</a>
            </li>
          </ul>
        </div>

        <h1 class="bread__title">
          Часто задаваемые вопросы по строительству домов и бань
        </h1>
      </div>
    </div>
  </section>
  <section class="quest">
    <div class="container">
      <div class="quest__content">
       
        <?php if(have_rows('quest')): ?>
          <?php while(have_rows('quest')): the_row(); ?>
              
              <div class="quest__item">
                <div class="quest__inner">
                  <span class="quest__subtitle">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="8" cy="8" r="6.5" stroke="#914948" />
                      <circle cx="8" cy="8" r="3" fill="#914948" />
                    </svg>
                    <?php the_sub_field('quest-name'); ?>
                    </span>
                  </span>
                  <button class="btn-reset quest__btn">
                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.64645 6.64645C6.84171 6.84171 7.15829 6.84171 7.35355 6.64645L13.1464 0.853552C13.4614 0.538569 13.2383 0 12.7929 0H1.20711C0.761654 0 0.538571 0.538571 0.853553 0.853553L6.64645 6.64645Z" fill="#CDCDCD" />
                    </svg>
                  </button>
                </div>
                <div class="quest__text">
                  <?php the_sub_field('quest-text'); ?>
                </div>
              </div>
          <?php endwhile; ?>
        <?php endif; ?>




      </div>
    </div>
  </section>
 </main> 


<?php get_footer(); ?>