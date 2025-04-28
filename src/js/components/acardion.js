document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll(".quest__item");
  items.forEach(el => {
    el.addEventListener('click', e => {
      const self = e.currentTarget;
      const btn = self.querySelector(".quest__btn");
      const text = self.querySelector(".quest__text");
      const title = self.querySelector(".quest__subtitle");
      // Закрываем все остальные элементы
      items.forEach(item => {
        if (item !== self) {
          const otherText = item.querySelector(".quest__text");
          const otherBtn = item.querySelector(".quest__btn");
          const otherTitle = item.querySelector(".quest__subtitle");
          otherText.classList.remove('quest__text--active');
          item.classList.remove('quest__item--active');
          otherBtn.classList.remove('quest__btn--active');
          otherTitle.classList.remove('quest__subtitle--active');
          otherText.style.maxHeight = null;
        }
      });

      // Переключаем состояние текущего элемента
      text.classList.toggle('quest__text--active');
      self.classList.toggle('quest__item--active');
      btn.classList.toggle('quest__btn--active');
      title.classList.toggle('quest__subtitle--active');
      if (text.classList.contains('quest__text--active')) {
        text.style.maxHeight = text.scrollHeight + 'px';
      } else {
        text.style.maxHeight = null;
      }
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll(".tech__item");
  items.forEach(el => {
    el.addEventListener('click', e => {
      const self = e.currentTarget;
      const btn = self.querySelector(".tech__btn");
      const text = self.querySelector(".tech__text");
      const title = self.querySelector(".tech__subtitle");
      // Закрываем все остальные элементы
      items.forEach(item => {
        if (item !== self) {
          const otherText = item.querySelector(".tech__text");
          const otherBtn = item.querySelector(".tech__btn");
          const otherTitle = item.querySelector(".tech__subtitle");
          otherText.classList.remove('tech__text--active');
          item.classList.remove('tech__item--active');
          otherBtn.classList.remove('tech__btn--active');
          otherTitle.classList.remove('tech__subtitle--active');
          otherText.style.maxHeight = null;
        }
      });

      // Переключаем состояние текущего элемента
      text.classList.toggle('tech__text--active');
      self.classList.toggle('tech__item--active');
      btn.classList.toggle('tech__btn--active');
      title.classList.toggle('tech__subtitle--active');
      if (text.classList.contains('tech__text--active')) {
        text.style.maxHeight = text.scrollHeight + 'px';
      } else {
        text.style.maxHeight = null;
      }
    });
  });
});








document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".graph-modal__block").forEach(block => {
    const fileInput = block.querySelector(".graph-modal__file");
    const fileText = block.querySelector(".graph-modal__file-text");

    fileInput.addEventListener("change", function () {
      fileText.textContent = fileInput.files.length > 0 ? fileInput.files[0].name : "Не выбран ни один файл";
    });
  });
});

