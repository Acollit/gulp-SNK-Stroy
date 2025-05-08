      
<?php get_header('second'); ?>
<?php 
/* Template Name: pay */
?>
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
        Условия сотрудничества
      </h1>
    </div>
  </div>
  <section class="pay">
    <div class="container">
      <p class="pay__text">
        Для успешного строительства, заказчику необходимо знать некоторые условия сотрудничества:
      </p>
      <ul class="list-reset pay__list">
        <li class="pay__list-item">
          <div class="pay__list-inner">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pay-svg-1.webp" class="image" width="20" height="20" alt="img">
            <p class="pay__list-subtitle">Временное жильё</p>
          </div>
          <p class="pay__list-text">
            Решить вопрос с проживанием рабочих на месте проведения работ. Если это невозможно, мы предлагаем купить бытовку 2 × 3 м., для проживания бригады (после всех работ остаётся на участке у заказчика). <strong>Цена бытовки — 25 000 рублей</strong> 
          </p>
        </li>
        <li class="pay__list-item">
          <div class="pay__list-inner">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pay-svg-2.webp" class="image" width="20" height="20" alt="img">
            <p class="pay__list-subtitle">Доступ к объекту</p>
          </div>
          <p class="pay__list-text">
            Обеспечить подрядчику беспрепятственный доступ к объекту в течение всего периода строительства
          </p>
        </li>
        <li class="pay__list-item">
          <div class="pay__list-inner">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pay-svg-3.webp" class="image" width="20" height="20" alt="img">
            <p class="pay__list-subtitle">Электроэнергия и вода</p>
          </div>
          <p class="pay__list-text">
            Обеспечить бригаду электрической энергией и водой. <br>
            Вы можете взять у нас в аренду электрогенератор — <strong>10 000 рублей.</strong>  <br> Бензин предоставляет заказчик
          </p>
        </li>
        <li class="pay__list-item">
          <div class="pay__list-inner">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/pay-svg-4.webp" class="image" width="20" height="20" alt="img">
            <p class="pay__list-subtitle">Подъезд к месту строительства</p>
          </div>
          <p class="pay__list-text">
            Обеспечить подъезд к месту строительства, для автотехники не повышенной проходимости (расчистить подъездные пути к участку для беспрепятственного проезда грузовых автомобилей)
          </p>
        </li>
      </ul>
      <p class="pay__subtitle">
        Условия оплаты
      </p>
      <div class="pay__content">
        <div class="pay__box">
          <p class="pay__box-title">
            1-й платёж
          </p>
          <p class="pay__box-text">
            70% от суммы договора после привоза материала на ваш участок
          </p>
          <span class="pay__box-count">1</span>
        </div>
        <div class="pay__box">
          <p class="pay__box-title">
            2-й платёж
          </p>
          <p class="pay__box-text">
            30% от суммы договора по завершению строительных работ
          </p>
          <span class="pay__box-count">2</span>
        </div>
      </div>
      <p class="pay__descr">
        Также вы можете ознакомиться с полными условиями договора ниже
      </p>
      <a href="<?php echo get_template_directory_uri(); ?>/assets/dogovor.rtf" class="pay__link">
        <svg width="32" height="35" viewBox="0 0 32 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M28 25.832H4.00002C3.6464 25.832 3.30726 25.9725 3.05721 26.2226C2.80716 26.4726 2.66669 26.8117 2.66669 27.1654C2.66669 27.519 2.80716 27.8581 3.05721 28.1082C3.30726 28.3582 3.6464 28.4987 4.00002 28.4987H28C28.3536 28.4987 28.6928 28.3582 28.9428 28.1082C29.1929 27.8581 29.3334 27.519 29.3334 27.1654C29.3334 26.8117 29.1929 26.4726 28.9428 26.2226C28.6928 25.9725 28.3536 25.832 28 25.832Z" fill="white" />
          <path d="M16 3.16797C15.6464 3.16797 15.3073 3.30844 15.0572 3.55849C14.8072 3.80854 14.6667 4.14768 14.6667 4.5013V18.6213L10.28 14.2213C10.029 13.9702 9.68843 13.8292 9.33336 13.8292C8.97829 13.8292 8.63776 13.9702 8.38669 14.2213C8.13562 14.4724 7.99457 14.8129 7.99457 15.168C7.99457 15.523 8.13562 15.8636 8.38669 16.1146L15.0534 22.7813C15.1773 22.9063 15.3248 23.0055 15.4873 23.0732C15.6497 23.1409 15.824 23.1757 16 23.1757C16.176 23.1757 16.3503 23.1409 16.5128 23.0732C16.6753 23.0055 16.8227 22.9063 16.9467 22.7813L23.6134 16.1146C23.7377 15.9903 23.8363 15.8427 23.9036 15.6803C23.9708 15.5179 24.0055 15.3438 24.0055 15.168C24.0055 14.9922 23.9708 14.8181 23.9036 14.6556C23.8363 14.4932 23.7377 14.3456 23.6134 14.2213C23.489 14.097 23.3415 13.9984 23.179 13.9311C23.0166 13.8638 22.8425 13.8292 22.6667 13.8292C22.4909 13.8292 22.3168 13.8638 22.1544 13.9311C21.9919 13.9984 21.8443 14.097 21.72 14.2213L17.3334 18.6213V4.5013C17.3334 4.14768 17.1929 3.80854 16.9428 3.55849C16.6928 3.30844 16.3536 3.16797 16 3.16797Z" fill="white" />
        </svg>
        Скачать образец типового договора
      </a>
    </div>
  </section>

  
  
 </main> 


<?php get_footer(); ?>