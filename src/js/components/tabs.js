import GraphTabs from 'graph-tabs';

if (document.querySelector('.hit')) {
  const tabs = new GraphTabs('hit');
}

if (document.querySelector('.project-info')) {
  const tabs = new GraphTabs('info');
}
if (document.querySelector('.gallery')) {
  const tabs = new GraphTabs('gallery');
} if (document.querySelector('.tech')) {
  const tabs = new GraphTabs('tech');
  const tech2Button = document.getElementById('tech2');
  const breadTitle = document.querySelector('.bread__title');
  const breadDescr = document.querySelector('.bread__descr');

  // Функция для проверки и обновления текста
  function updateText() {
    if (tech2Button.classList.contains('tabs__nav-btn--active')) {
      breadTitle.textContent = 'Технология строительства дома из бруса: под усадку vs. “под ключ” - выбираем оптимальный вариант';
      breadDescr.textContent = 'Строительство дома из бруса – это традиционный и востребованный способ возведения экологичного и уютного жилья. Выбор между строительством под усадку и “под ключ” – одно из ключевых решений, влияющих на сроки, стоимость и конечный результат. Рассмотрим детально обе технологии, чтобы помочь вам сделать правильный выбор.';
    } else {
      // Вернуть исходный текст, если нужно
      breadTitle.textContent = 'Технология строительства каркасного дома: от проекта до заселения';
      breadDescr.textContent = 'Каркасный дом — это современная и популярная технология строительства, позволяющая возводить тёплые, экономичные и долговечные дома в короткие сроки. Основа конструкции — прочный деревянный каркас, заполненный эффективным утеплителем, что обеспечивает высокие теплоизоляционные характеристики. Рассмотрим подробнее этапы и особенности строительства каркасного дома';
    }
  }

  // Отслеживаем изменения класса
  const observer = new MutationObserver(updateText);
  observer.observe(tech2Button, {
    attributes: true,
    attributeFilter: ['class']
  });

  // Проверить сразу при загрузке
  updateText();


}


