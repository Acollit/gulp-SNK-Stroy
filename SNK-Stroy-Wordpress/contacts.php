      
<?php get_header(); ?>
<?php 
/* Template Name: contacts */
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
                  <a class="bread__sublist-link">Контакты</a>
                </li>
              </ul>
            </div>

            <h1 class="bread__title">
              Контакты
            </h1>
          </div>
        </div>
      </section>

      <section class="contacts">
        <div class="container">
          <div class="contacts__content">
            <div class="contacts__inner">

              <div class="contacts__item">
                <div class="contacts__box">
                  <p class="contacts__descr">
                    Номер телефона
                  </p>
                  <a href="" class="contacts__link">8 (906) 200-78-88</a>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-svg.svg" class="image" width="24" height="42" alt="svg">
              </div>
              <div class="contacts__item">
                <div class="contacts__box">
                  <p class="contacts__descr">
                    Номер телефона
                  </p>
                  <a href="" class="contacts__link">8 (921) 199-90-30</a>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-svg.svg" class="image" width="24" height="42" alt="svg">
              </div>
              <div class="contacts__item">
                <div class="contacts__box">
                  <p class="contacts__descr">
                    Электронная почта
                  </p>
                  <a href="mailto:infosnk@mail.ru" class="contacts__link">infosnk@mail.ru</a>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/mail-svg.svg" class="image" width="24" height="42" alt="svg">
              </div>
              <div class="contacts__item">
                <div class="contacts__box">
                  <p class="contacts__descr">
                    Офис и производственная база
                  </p>
                  <a href="" class="contacts__link">Новгородская область, г. Пестово, ул. Первомайская, д. 15</a>
                </div>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/address-svg.svg" class="image" width="24" height="42" alt="svg">
              </div>
              <div class="contacts__socials">
                <a href="#" class="contacts__btn">
                  <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M1.97991 19.6042L39.6895 5.06467C41.4398 4.43237 42.9684 5.49163 42.4012 8.13815L42.4045 8.13489L35.9838 38.3841C35.5079 40.5287 34.2335 41.0502 32.4507 40.0398L22.673 32.8336L17.9568 37.377C17.4353 37.8984 16.9953 38.3385 15.985 38.3385L16.6792 28.3879L34.8007 12.0167C35.5894 11.3224 34.6247 10.9313 33.5849 11.6223L11.1906 25.7219L1.53665 22.7103C-0.55905 22.0454 -0.604679 20.6146 1.97991 19.6042Z"
                      fill="white" />
                  </svg>
                </a>
                <a href="#" class="contacts__btn">
                  <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M37.6465 6.47168C33.9541 2.77198 29.0506 0.503079 23.8204 0.0742273C18.5903 -0.354624 13.3779 1.08481 9.12329 4.13288C4.86873 7.18096 1.85212 11.637 0.617608 16.6973C-0.616908 21.7576 0.0119333 27.089 2.3907 31.7298L0.0556433 42.9765C0.0314145 43.0884 0.0307283 43.2041 0.0536279 43.3163C0.0765276 43.4285 0.12252 43.5349 0.188729 43.6286C0.28572 43.771 0.42417 43.8805 0.585588 43.9427C0.747006 44.0049 0.923711 44.0168 1.0921 43.9767L12.2028 41.3641C16.8675 43.6643 22.2035 44.248 27.2614 43.0115C32.3192 41.7749 36.7708 38.7982 39.824 34.6111C42.8773 30.424 44.3342 25.2981 43.9354 20.1453C43.5367 14.9926 41.3082 10.1473 37.6465 6.47168ZM34.1822 33.9023C31.6274 36.4297 28.3376 38.0981 24.7765 38.6723C21.2153 39.2465 17.5623 38.6977 14.3322 37.1031L12.7835 36.3429L5.97193 37.9433L5.9921 37.8592L7.40362 31.0576L6.64543 29.5732C4.995 26.3576 4.41279 22.7062 4.9822 19.1421C5.55161 15.5781 7.24343 12.2842 9.8153 9.73247C13.0469 6.52746 17.4293 4.727 21.9987 4.727C26.5682 4.727 30.9506 6.52746 34.1822 9.73247C34.2097 9.76378 34.2393 9.79319 34.2709 9.82049C37.4624 13.0338 39.2441 17.3684 39.2275 21.8795C39.2109 26.3906 37.3973 30.7123 34.1822 33.9023Z"
                      fill="white" />
                    <path
                      d="M33.5778 28.9154C32.7429 30.2197 31.4242 31.8161 29.7667 32.2122C26.863 32.9083 22.4066 32.2362 16.8613 27.1069L16.7928 27.0469C11.917 22.5618 10.6506 18.8289 10.9571 15.8682C11.1265 14.1878 12.538 12.6674 13.7277 11.6752C13.9158 11.5159 14.1389 11.4026 14.379 11.3441C14.6192 11.2857 14.8698 11.2838 15.1108 11.3386C15.3519 11.3934 15.5766 11.5034 15.7671 11.6598C15.9576 11.8162 16.1086 12.0147 16.208 12.2393L18.0026 16.2403C18.1193 16.4997 18.1625 16.7858 18.1277 17.0677C18.0929 17.3496 17.9813 17.6169 17.805 17.8407L16.8976 19.009C16.7029 19.2502 16.5854 19.5437 16.5603 19.8517C16.5351 20.1598 16.6034 20.4682 16.7565 20.7374C17.2646 21.6216 18.4826 22.9219 19.8336 24.1262C21.35 25.4865 23.0317 26.7308 24.0964 27.1549C24.3813 27.2704 24.6945 27.2986 24.9957 27.2358C25.2968 27.1731 25.5722 27.0223 25.7862 26.8029L26.8388 25.7506C27.0419 25.5519 27.2944 25.4102 27.5707 25.3399C27.847 25.2696 28.1372 25.2733 28.4116 25.3505L32.6744 26.5508C32.9095 26.6223 33.1251 26.7463 33.3045 26.9132C33.484 27.0801 33.6226 27.2854 33.7097 27.5136C33.7969 27.7418 33.8303 27.9867 33.8075 28.2297C33.7846 28.4726 33.706 28.7072 33.5778 28.9154Z"
                      fill="white" />
                  </svg>
                </a>
              </div>

            </div>

            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts-map.webp" class="contacts__img image" width="653" height="464"
              alt="img">
          </div>
        </div>
      </section>

    </main>

<?php get_footer(); ?>