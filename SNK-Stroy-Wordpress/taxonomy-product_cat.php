      
<?php get_header('second'); ?>
<main class="main">
      <div class="breadcrumbs">
        <div class="container">
          <ul class="list-reset breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a href="/" class="breadcrumbs__link">Главная</a>
            </li>
            <li class="breadcrumbs__item">
              <a class="breadcrumbs__link"><?php the_title(); ?></a>
            </li>
          </ul>
          <h1 class="breadcrumbs__title">
            <?php the_title(); ?>
          </h1>
        </div>
      </div>

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
              <div class="catalog__slider-nav">
                <span class="catalog__count">от <span id="price-min">400.000</span> <span>₽</span></span>
                <span class="catalog__count">до <span id="price-max">2.000.000</span> <span> ₽</span></span>
                 <div class="catalog__slider" id="price-slider"></div>
              </div>
             

            </div>
          </div>

          <div class="catalog__content">

          </div>
          <div class="catalog__block">
            <p class="catalog__block-subtitle">
              Срубы домов из профилированного бруса под усадку в Москве и РФ — недорого!
            </p>
            <p class="catalog__block-text">
              Если вам интересно недорогое и экологичное жильё, рекомендуем обратить внимание на дома из профилированного бруса под усадку, или как их ещё называют «срубы домов из бруса под усадку». Компания СрубДом53 специализируется на строительстве недорогих срубов домов под усадку из профилированного бруса как по типовым проектам, так и по индивидуальным. Вы можете купить дом из бруса под усадку недорого не выходя из дома.
            </p>
            <p class="catalog__block-accent">
              Проекты и цены на дома из профилированного бруса под усадку
            </p>

            <p class="catalog__block-text">
              В нашем каталоге представлены проекты и цены самых разнообразных форм (одноэтажные, с мансардой, двухэтажные) и размеров (от 6 × 6 метров, до 10 × 10 метров). Стоит отметить, что любой проект дома «под усадку» можно изменить по собственному желанию. Также вы можете  <button class="btn-reset catalog__block-link" data-graph-path="modal"> прислать свой проект на расчёт </button>стоимости строительства в нашей компании.
            </p>
             <p class="catalog__block-text">
             Каждый проект включает в себя 3d визуализации дома, цены и комплектации в различных сечениях, а также поэтажный план и перечень дополнительных услуг. Если у вас возникли вопросы по проектам, или если вы готовы оформить заказ на строительство, вы можете позвонить нам по номеру +7 921 730-24-66, +7 8162 90-24-66, или заполнить форму, которая расположена на странице каждого проекта.
            </p>
          </div>
        </div>
      </section>

    </main>


<?php get_footer(); ?>