<?php get_header(); ?>
<?php 
/* Template Name: catalog */
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
      <section class="catalog">
        <div class="container">
          <div class="catalog__filter">
            <div class="catalog__box">
              <p class="catalog__subtitle">
                Размер
              </p>
              <div class="catalog__inner">
                <input type="text" class="input-reset catalog__input" id="size-1" placeholder="3">
                <input type="text" class="input-reset catalog__input" id="size-2" placeholder="6">
              </div>
            </div>
            <div class="catalog__box">
              <p class="catalog__subtitle">
                Этажность
              </p>
              <div class="catalog__inner">
                <div class="catalog__radio-box">
                  <input type="radio" name="Этажность" id="floor-1" value="1" class="input-reset catalog__radio">
                  <label for="floor-1">1 этаж</label>
                </div>
                <div class="catalog__radio-box">
                  <input type="radio" name="Этажность" id="floor-2" value="1.5" class="input-reset catalog__radio">
                  <label for="floor-2">1.5 этажа</label>
                </div>
                <div class="catalog__radio-box">
                  <input type="radio" name="Этажность" id="floor-3" value="2" class="input-reset catalog__radio">
                  <label for="floor-3">2 этажа</label>
                </div>
              </div>
            </div>
            <div class="catalog__box">
              <p class="catalog__subtitle">
                Цена
              </p>
              <div class="catalog__reset-wrap">
                <div class="catalog__slider-nav">
                  <span class="catalog__count">от <span id="price-min">400.000</span> <span>₽</span></span>
                  <span class="catalog__count">до <span id="price-max">2.000.000</span> <span> ₽</span></span>
                  <div class="catalog__slider" id="price-slider"></div>
                </div>
                <button class="btn-reset catalog__reset" id="reset">Сброс</button>
              </div>
              
            </div>
          
            
          </div>

          <div class="catalog__content" id="<?php the_field('catalog-cat'); ?>">

          </div>
          
           
        </div>
      </section>
    </main>


<?php get_footer(); ?>