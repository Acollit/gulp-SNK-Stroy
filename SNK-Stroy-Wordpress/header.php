









<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title> </title>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/EuclidSquare-Medium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/EuclidSquare-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Gilroy-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Gilroy-Medium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Gilroy-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Gilroy-Semibold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
   <script src="https://api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU"></script>
  <?php wp_head() ?>
</head>

<body class="page__body">
  <div class="site-container">
    <header class="header">
      <div class="container">
        <div class="header__content">
          <div class="header__wrapper">
            <button class="btn-reset burger" aria-label="Открыть меню" aria-expanded="false" data-burger>
              <span class="burger__line"></span>
            </button>
            <a href="/" class="header__logo">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="image" width="36" height="36" alt="logo">
              <p class="header__logo-text">
                Строй<span>Лайк53</span>
              </p>
            </a>

            <nav class="header__nav">
              <ul class="list-reset header__list">
                <li class="header__list-item">
                  <a class="header__list-link">Проекты
                    <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.64645 3.64645C3.84171 3.84171 4.15829 3.84171 4.35355 3.64645L7.14645 0.853552C7.46143 0.53857 7.23835 0 6.79289 0H1.20711C0.761654 0 0.538571 0.538571 0.853553 0.853553L3.64645 3.64645Z"
                        fill="#CDCDCD" />
                    </svg>
                  </a>
                  <div class="header__sublist">
                    <div class="header__subitem">
                      <a href="/karkasnye-doma" class="header__sublink">Каркасные дома</a>
                    </div>
                    <div class="header__inner header__inner--one">
                      <a class="header__sublink ">Дома из бруса
                        <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M3.64645 3.64645C3.84171 3.84171 4.15829 3.84171 4.35355 3.64645L7.14645 0.853552C7.46143 0.53857 7.23835 0 6.79289 0H1.20711C0.761654 0 0.538571 0.538571 0.853553 0.853553L3.64645 3.64645Z"
                            fill="#CDCDCD" />
                        </svg>
                      </a>
                      <div class="header__over">
                        <a href="/doma-iz-brusa-pod-usadku" class="header__sublink">Дома из бруса под усадку</a>
                        <a href="/doma-iz-brusa-pod-klyuch" class="header__sublink">Дома из бруса под ключ</a>
                      </div>

                    </div>
                    <div class="header__inner header__inner--two">
                      <a class="header__sublink header__sublink--two">Бани из бруса
                        <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M3.64645 3.64645C3.84171 3.84171 4.15829 3.84171 4.35355 3.64645L7.14645 0.853552C7.46143 0.53857 7.23835 0 6.79289 0H1.20711C0.761654 0 0.538571 0.538571 0.853553 0.853553L3.64645 3.64645Z"
                            fill="#CDCDCD" />
                        </svg>
                      </a>
                      <div class="header__over">
                        <a href="/bani-iz-brusa-pod-usadku" class="header__sublink">Бани из бруса под усадку</a>
                        <a href="/bani-iz-brusa-pod-klyuch" class="header__sublink">Бани из бруса под ключ</a>
                      </div>
                    </div>

                  </div>
                </li>
                <li class="header__list-item">
                  <a href="/galereya" class="header__list-link">Галерея</a>
                </li>
                <li class="header__list-item">
                  <a href="/akczii" class="header__list-link">Акции</a>
                </li>
                <li class="header__list-item">
                  <a class="header__list-link">Компания
                    <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3.64645 3.64645C3.84171 3.84171 4.15829 3.84171 4.35355 3.64645L7.14645 0.853552C7.46143 0.53857 7.23835 0 6.79289 0H1.20711C0.761654 0 0.538571 0.538571 0.853553 0.853553L3.64645 3.64645Z"
                        fill="#CDCDCD" />
                    </svg>
                  </a>
                  <div class="header__sublist">
                    <div class="header__subitem">
                      <a href="/o-nas" class="header__sublink">О нас</a>
                    </div>
                    <div class="header__subitem">
                      <a href="/garantiya" class="header__sublink">Гарантия</a>
                    </div>
                    <div class="header__subitem">
                      <a href="/materinskiy-capital" class="header__sublink">Материнский капитал</a>
                    </div>
                    <div class="header__subitem">
                      <a href="/ipoteka" class="header__sublink">Ипотека</a>
                    </div>
                    <div class="header__subitem">
                      <a href="/vopros-otvet" class="header__sublink">Вопрос-ответ</a>
                    </div>
                    <div class="header__subitem">
                      <a href="/stati" class="header__sublink">Статьи</a>
                    </div>
                    <div class="header__subitem">
                      <a href="/otzyvy" class="header__sublink">Отзывы</a>
                    </div>
                    <div class="header__subitem">
                      <a href="/tehnologiya" class="header__sublink">Технология</a>
                    </div>
                    
                  </div>
                </li>
                <li class="header__list-item">
                  <a href="/kontakty" class="header__list-link">Контакты</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header__box">
            <div class="header__socials">
              <a href="#">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/wat.svg" class="image" width="45" height="54" alt="svg">
              </a>
              <a href="#">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" class="image" width="45" height="54" alt="svg">
              </a>
            </div>
            <div class="header__socials">
              <a href="#">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" class="image" width="45" height="54" alt="svg">
              </a>
              <a href="#">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" class="image" width="45" height="54" alt="svg">
              </a>
            </div>
            <button class="btn-reset header__btn" data-graph-path="modal">
              Расчёт
            </button>
          </div>

        </div>

      </div>
    </header>




















