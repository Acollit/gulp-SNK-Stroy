

<div class="menu" data-menu>
      <div class="menu__content">
        
        <ul class="list-reset menu__list">
          <li class="menu__item">
            <a href="/" class="menu__link">Главная</a>
          </li>
      
          <li class="menu__item">
            <a href="/proekty/sruby-domov" class="menu__link">Каркасные дома</a>
          </li>
     
          <li class="menu__item">
            <a href="/doma-iz-brusa-pod-usadku" class="menu__sublink">Дома из бруса под усадку</a>
          </li>
          <li class="menu__item">
            <a href="/doma-iz-brusa-pod-klyuch" class="menu__sublink">Дома из бруса под ключ</a>
          </li>
          
          <li class="menu__item">
            <a href="/bani-iz-brusa-pod-usadku" class="menu__sublink">Бани из бруса под усадку</a>
          </li>
          <li class="menu__item">
            <a href="/bani-iz-brusa-pod-klyuch" class="menu__sublink">Бани из бруса под ключ</a>
          </li>
       
          <li class="menu__item">
            <a href="/galereya" class="menu__link">Галерея</a>
          </li>
          <li class="menu__item">
            <a href="/akczii" class="menu__link">Акции</a>
          </li>
          <li class="menu__item">
            <a href="/o-nas" class="menu__link">О нас</a>
          </li>
          <li class="menu__item">
            <a href="/garantiya" class="menu__link">Гарантия</a>
          </li>
         
          <li class="menu__item">
            <a href="/materinskiy-capital" class="menu__link">Материнский капитал</a>
          </li>
          <li class="menu__item">
            <a href="/tekhnologiya" class="menu__link">Технология</a>
          </li>
          <li class="menu__item">
            <a href="/vopros-otvet" class="menu__link">Вопрос/ответ</a>
          </li>
          <li class="menu__item">
            <a href="/stati" class="menu__link">Статьи</a>
          </li>
          <li class="menu__item">
            <a href="/kontakty" class="menu__link">Контакты</a>
          </li>
        


        
        </ul>

        <div class="menu__socials">
          <a href="https://wa.me/79116277070" target="_blank" class=" menu__social">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/wat.svg" class="image" width="30" height="30" alt="Whatsapp">
          </a>
          
          <a href="https://t.me/mihalych5353" target="_blank" class=" menu__social">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" class="image" width="30" height="30" alt="Telegram">
          </a>
          
        </div>
        
        <a href="tel:+79116277070" class="menu__phone">
          8 (911) 627-70-70
        </a>
        <a href="tel:+79167729900" class="menu__phone">8 (916) 772-99-00</a>
        <button class="btn-reset menu__btn" data-graph-path="modal">Расчёт
        </button>
      
      </div>
    </div>
    <div class="graph-modal">
      <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal" data-graph-target="modal">
        <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
        <div class="graph-modal__content">
          <p class="graph-modal__title">
            Быстрый расчёт стоимости
          </p>
          <p class="graph-modal__descr">
            За 20 секунд заполните основные параметры и получите СКИДКУ на все виды работ
          </p>
          <?php echo do_shortcode('[contact-form-7 id="e9b9fde" title="modal 1"]'); ?>
        </div> 
      </div>
      <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal2" data-graph-target="modal2">
        <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
        <div class="graph-modal__content">
          <p class="graph-modal__title">
            Собственный проект
          </p>
          <p class="graph-modal__descr">
            У Вас свой проект?
          </p>
          <div class="graph-modal__wrap">
            
            <div class="graph-modal__wrap-item">
              <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.8008 28H7.19922C3.58066 28 0.636719 25.0561 0.636719 21.4375V6.5625C0.636719 2.94394 3.58066 0 7.19922 0H14.8008C18.4193 0 21.3633 2.94394 21.3633 6.5625V21.4375C21.3633 25.0561 18.4193 28 14.8008 28ZM7.19922 2.1875C4.78684 2.1875 2.82422 4.15013 2.82422 6.5625V21.4375C2.82422 23.8499 4.78684 25.8125 7.19922 25.8125H14.8008C17.2132 25.8125 19.1758 23.8499 19.1758 21.4375V6.5625C19.1758 4.15013 17.2132 2.1875 14.8008 2.1875H7.19922ZM16.9883 8.25781C16.9883 7.65373 16.4986 7.16406 15.8945 7.16406H6.10547C5.50139 7.16406 5.01172 7.65373 5.01172 8.25781C5.01172 8.86189 5.50139 9.35156 6.10547 9.35156H15.8945C16.4986 9.35156 16.9883 8.86189 16.9883 8.25781ZM16.8242 22.5312V17.3359C16.8242 16.7319 16.3345 16.2422 15.7305 16.2422C15.1264 16.2422 14.6367 16.7319 14.6367 17.3359V22.5312C14.6367 23.1353 15.1264 23.625 15.7305 23.625C16.3345 23.625 16.8242 23.1353 16.8242 22.5312ZM6.32422 16.2422C5.56915 16.2422 4.95703 16.8543 4.95703 17.6094C4.95703 18.3644 5.56915 18.9766 6.32422 18.9766C7.07929 18.9766 7.69141 18.3644 7.69141 17.6094C7.69141 16.8543 7.07929 16.2422 6.32422 16.2422ZM11.0273 16.2422C10.2723 16.2422 9.66016 16.8543 9.66016 17.6094C9.66016 18.3644 10.2723 18.9766 11.0273 18.9766C11.7824 18.9766 12.3945 18.3644 12.3945 17.6094C12.3945 16.8543 11.7824 16.2422 11.0273 16.2422ZM6.32422 20.8906C5.56915 20.8906 4.95703 21.5027 4.95703 22.2578C4.95703 23.0129 5.56915 23.625 6.32422 23.625C7.07929 23.625 7.69141 23.0129 7.69141 22.2578C7.69141 21.5027 7.07929 20.8906 6.32422 20.8906ZM11.0273 20.8906C10.2723 20.8906 9.66016 21.5027 9.66016 22.2578C9.66016 23.0129 10.2723 23.625 11.0273 23.625C11.7824 23.625 12.3945 23.0129 12.3945 22.2578C12.3945 21.5027 11.7824 20.8906 11.0273 20.8906Z" fill="#914948" />
                <path d="M7.63672 12.9062C7.63672 13.6613 7.0246 14.2734 6.26953 14.2734C5.51446 14.2734 4.90234 13.6613 4.90234 12.9062C4.90234 12.1512 5.51446 11.5391 6.26953 11.5391C7.0246 11.5391 7.63672 12.1512 7.63672 12.9062ZM11.0273 11.5391C10.2723 11.5391 9.66016 12.1512 9.66016 12.9062C9.66016 13.6613 10.2723 14.2734 11.0273 14.2734C11.7824 14.2734 12.3945 13.6613 12.3945 12.9062C12.3945 12.1512 11.7824 11.5391 11.0273 11.5391ZM15.7305 11.5391C14.9754 11.5391 14.3633 12.1512 14.3633 12.9062C14.3633 13.6613 14.9754 14.2734 15.7305 14.2734C16.4855 14.2734 17.0977 13.6613 17.0977 12.9062C17.0977 12.1512 16.4855 11.5391 15.7305 11.5391Z" fill="#914948" />
              </svg>
              Выполним бесплатный расчёт
            </div>
            <div class="graph-modal__wrap-item">
              <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.0312 19.2483C19.9646 19.2483 17.5625 17.5668 17.5625 15.4202C17.5625 13.2736 19.9646 11.5921 23.0312 11.5921C26.0979 11.5921 28.5 13.2736 28.5 15.4202C28.5 17.5668 26.0979 19.2483 23.0312 19.2483ZM23.0312 13.7796C22.0789 13.7796 21.1626 14.0108 20.5173 14.4142C20.0297 14.7189 19.75 15.0856 19.75 15.4202C19.75 15.7548 20.0297 16.1214 20.5173 16.4262C21.1626 16.8295 22.0789 17.0608 23.0312 17.0608C23.9836 17.0608 24.8999 16.8295 25.5452 16.4262C26.0328 16.1214 26.3125 15.7548 26.3125 15.4202C26.3125 15.0856 26.0328 14.719 25.5452 14.4142C24.8999 14.0108 23.9836 13.7796 23.0312 13.7796ZM15.5391 26.9046C15.5391 26.3005 15.0494 25.8108 14.4453 25.8108H7.0625C4.65013 25.8108 2.6875 23.8482 2.6875 21.4358V10.2667C2.6875 9.09809 3.14255 7.99942 3.96894 7.17309L7.67478 3.46719C9.38065 1.76138 12.1562 1.76143 13.859 3.46413L17.5389 7.17298C18.0713 7.70542 18.4592 8.37031 18.6607 9.09563C18.8224 9.67767 19.4253 10.0183 20.0073 9.85677C20.5893 9.69511 20.9301 9.09224 20.7684 8.5102C20.4662 7.42214 19.8844 6.42485 19.0888 5.62921L15.4088 1.9203C12.8501 -0.638364 8.68677 -0.638255 6.128 1.9203L2.4221 5.62625C1.18261 6.86585 0.5 8.51375 0.5 10.2667V21.4358C0.5 25.0543 3.44394 27.9983 7.0625 27.9983H14.4453C15.0494 27.9983 15.5391 27.5086 15.5391 26.9046ZM10.7812 7.43581C10.0262 7.43581 9.41406 8.04792 9.41406 8.803C9.41406 9.55807 10.0262 10.1702 10.7812 10.1702C11.5363 10.1702 12.1484 9.55807 12.1484 8.803C12.1484 8.04792 11.5363 7.43581 10.7812 7.43581Z" fill="#914948" />
                <path d="M22.9766 27.9984C21.0953 27.9984 19.3137 27.4584 17.96 26.478C17.4708 26.1237 17.3615 25.4398 17.7157 24.9506C18.0701 24.4613 18.754 24.352 19.2432 24.7063C21.2669 26.1721 24.6863 26.1721 26.71 24.7063C27.1993 24.3519 27.8831 24.4613 28.2375 24.9506C28.5918 25.4398 28.4824 26.1236 27.9932 26.478C26.6394 27.4584 24.8578 27.9984 22.9766 27.9984ZM27.9931 22.103C28.4823 21.7487 28.5917 21.0648 28.2374 20.5756C27.8831 20.0863 27.1993 19.977 26.71 20.3313C24.6862 21.7971 21.2669 21.7971 19.2431 20.3313C18.754 19.977 18.0701 20.0863 17.7157 20.5756C17.3614 21.0648 17.4707 21.7486 17.96 22.103C19.3137 23.0834 21.0953 23.6234 22.9765 23.6234C24.8578 23.6234 26.6394 23.0834 27.9931 22.103Z" fill="#914948" />
              </svg>
              Предложим лучшую цену за 2 рабочих дня
            </div>
          </div>   
          <?php echo do_shortcode('[contact-form-7 id="95fbf2d" title="modal 2"]'); ?>
        
          
        </div>
      </div>
      <div class="graph-modal__container graph-modal__container--mini" role="dialog" aria-modal="true" id="modal3" data-graph-target="modal3">
        <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
        <div class="graph-modal__content">
          <p class="graph-modal__title">
            Спасибо за заявку!
          </p>
          <p class="graph-modal__descr">
            Мы свяжемся с Вами в ближайшее время.
          </p>
        </div>
      </div>
    </div>  
<footer class="footer">
  <a href="#top" id="topBtn" class="footer__gotop btn-reset"><img loading="lazy"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-totop.svg" class="image" width="60" height="60"
      alt="to top"></a>
      <div class="section-container">
        <div class="container">
          <div class="footer__content">
            <div class="footer__box">
              <a href="/" class="footer__logo">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-2.svg" class="image" width="36" height="36" alt="svg">
                <p class="footer__logo-text">
                  СтройЛайк53
                </p>
              </a>
              <div class="footer__contacts">
                <a href="" class="footer__phone">8 (906) 200-78-88</a>
                <a href="" class="footer__phone">8 (921) 199-90-30</a>
                <a href="" class="footer__mail">infosnk@mail.ru</a>
                <div class="footer__socials">
                  <a href="">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/wat.svg" class="image" width="43" height="43" alt="svg">
                  </a>
                  <a href="">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" class="image" width="43" height="43" alt="svg">
                  </a>
                </div>
              </div>
              
            </div>
            <div class="footer__wrapper">
              <div class="footer__item">
                <p class="footer__name">
                  Проекты
                </p>
                <ul class="list-reset footer__list">
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Каркасные дома</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Дома из бруса под усадку</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Дома из бруса под ключ</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Баня из бруса под усадку</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Баня из бруса под ключ</a>
                  </li>
                </ul>
              </div>
              <div class="footer__item">
                <p class="footer__name">
                  Заказчику
                </p>
                <ul class="list-reset footer__list">
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Галерея</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Акции</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Контакты</a>
                  </li>

                </ul>
              </div>
              <div class="footer__item">
                <p class="footer__name">
                  Компания
                </p>
                <ul class="list-reset footer__list">
                  <li class="footer__list-item">
                    <a href="" class="footer__link">О нас</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Гарантия</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Ипотека</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Материнский капитал</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Технология</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Отзывы</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Вопрос/ответ</a>
                  </li>
                  <li class="footer__list-item">
                    <a href="" class="footer__link">Статьи</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer__contacts footer__contacts--two">
              <div class="footer__wrap">
                <a href="" class="footer__phone">8 (906) 200-78-88</a>
                <a href="" class="footer__phone">8 (921) 199-90-30</a>
                <a href="" class="footer__mail">infosnk@mail.ru</a>
              </div>
              
              <div class="footer__socials">
                <a href="">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/wat.svg" class="image" width="43" height="43" alt="svg">
                </a>
                <a href="">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" class="image" width="43" height="43" alt="svg">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </footer>
    <?php wp_footer() ?>
  </div>
</body>

</html>