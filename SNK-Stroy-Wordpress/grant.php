      
<?php get_header(); ?>
<?php 
/* Template Name: grant */
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
                  <a class="bread__sublist-link">Гарантия</a>
                </li>
              </ul>
            </div>

            <h1 class="bread__title">
              Гарантийные обязательства
            </h1>
          </div>
        </div>
      </section>

      <section class="guarantee">
        <div class="container">
          <div class="guarantee__content">
            <div class="guarantee__inner">
              <p class="guarantee__subtitle">
                На строительный объект, дом даётся гарантия 24 месяца
              </p>
              <div class="guarantee__item">
                <p class="guarantee__strong">
                  На протекание кровли
                </p>
                <p class="guarantee__text">
                  Не распространяется на временные кровли, выполненные из пергамина, рубероида или аналогичных
                  материалов
                </p>
              </div>
              <div class="guarantee__item">
                <p class="guarantee__strong">
                  На целостность конструкции
                </p>
              </div>
              <div class="guarantee__box">
                Гарантия вступает в силу с момента полной оплаты договорной стоимости окончания работ по Договору
                и не распространяются
                на ущерб, нанесённый третьими лицами, либо Заказчиком, вследствие изменения проекта и при неправильной
                эксплуатации
                сооружения
              </div>
            </div>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/guarantee.webp" class="image" width="377" height="433" alt="img">
          </div>
        </div>
      </section>

    </main>


<?php get_footer(); ?>