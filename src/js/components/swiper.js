import Swiper from 'swiper';
import { Navigation, Pagination, Thumbs } from 'swiper/modules';
Swiper.use([Navigation, Pagination, Thumbs]);

document.querySelectorAll('.tabs__panel').forEach((panel) => {
  const thumbsEl = panel.querySelector('.hit__thumbs');
  const swiperEl = panel.querySelector('.hit__swiper');
  const prevBtn = panel.querySelector('.hit__prev');
  const nextBtn = panel.querySelector('.hit__next');

  const thumbsSwiper = new Swiper(thumbsEl, {
    slidesPerView: 'auto',
    spaceBetween: 4,
  });

  const mainSwiper = new Swiper(swiperEl, {
    slidesPerView: 1,
    spaceBetween: 20,

    thumbs: {
      swiper: thumbsSwiper,
    },
  });

  // Навешиваем обработчики на все кнопки в текущем .tabs__panel
  panel.querySelectorAll('.hit__prev').forEach(btn => {
    btn.addEventListener('click', () => mainSwiper.slidePrev());
  });

  panel.querySelectorAll('.hit__next').forEach(btn => {
    btn.addEventListener('click', () => mainSwiper.slideNext());
  });

  // hit__slider внутри каждого слайда
  panel.querySelectorAll('.swiper-slide').forEach((slide) => {
    const sliderEl = slide.querySelector('.hit__slider');
    const sliderPrev = slide.querySelector('.hit__slider-prev');
    const sliderNext = slide.querySelector('.hit__slider-next');

    if (sliderEl && sliderPrev && sliderNext) {
      new Swiper(sliderEl, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
          prevEl: sliderPrev,
          nextEl: sliderNext,
        },
      });
    }
  });
});
const thumbsSwiper = new Swiper('.section-about__swiper', {
  slidesPerView: 'auto',
  spaceBetween: 4,
  navigation: {
    prevEl: '.section-about__prev',
    nextEl: '.section-about__next',
  },
});
const StocsSwiper = new Swiper('.stocs__swiper', {
  slidesPerView: 1,
  spaceBetween: 4,
  navigation: {
    prevEl: '.stocs__prev',
    nextEl: '.stocs__next',
  },

  pagination: {
    el: '.stocs__pag',
  }
});


const ProjectInnerThumbs = new Swiper('.project-inner__thumbs', {
  slidesPerView: 'auto',
  spaceBetween: 4,




});
const ProjectInnerSwiper = new Swiper('.project-inner__swiper', {
  slidesPerView: 1,
  spaceBetween: 10,
  navigation: {
    prevEl: '.project-inner__prev',
    nextEl: '.project-inner__next',
  },
  pagination: {
    el: ".project-inner__count",
    type: "fraction",
    renderFraction: function (currentClass, totalClass) {
      return `<span class="${currentClass}"></span> - <span class="${totalClass}"></span>`;
    },
    formatFractionCurrent: function (number) {
      return number < 10 ? "0" + number : number;
    },
    formatFractionTotal: function (number) {
      return number < 10 ? "0" + number : number;
    }
  },
  thumbs: {
    swiper: ProjectInnerThumbs,
  },

});
const SwiperPooular = new Swiper('.popular__swiper', {
  slidesPerView: 'auto',
  spaceBetween: 4,
});
const swiperGallery = new Swiper('.gallery__swiper', {
  slidesPerView: 'auto',
  spaceBetween: 4,



});
