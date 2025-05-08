import noUiSlider from 'nouislider';

if (document.querySelector('.catalog__filter')) {
  let sizeRange = { min: 0, max: 0, min2: null, max2: null };
  let floorFilter = '';
  let priceRange = {
    min_price: 300000,
    max_price: 4000000
  };

  // Инициализация слайдера цены
  const priceSlider = document.getElementById('price-slider');
  noUiSlider.create(priceSlider, {
    start: [priceRange.min_price, priceRange.max_price],
    connect: true,
    range: {
      min: priceRange.min_price,
      max: priceRange.max_price
    },
    step: 10000,
    tooltips: [true, true],
    format: {
      to: value => Math.round(value),
      from: value => Math.round(value)
    }
  });

  const priceMinSpan = document.getElementById('price-min');
  const priceMaxSpan = document.getElementById('price-max');

  // Обновление значений цены при изменении слайдера
  priceSlider.noUiSlider.on('update', (values, handle) => {
    if (handle === 0) {
      priceMinSpan.innerText = formatPrice(values[0]);
      priceRange.min_price = parseInt(values[0]);
    } else {
      priceMaxSpan.innerText = formatPrice(values[1]);
      priceRange.max_price = parseInt(values[1]);
    }
  });

  // Отправка запроса при изменении слайдера
  priceSlider.noUiSlider.on('change', () => {
    sendFilterRequest();
  });

  const size1Input = document.getElementById('size-1');
  const size2Input = document.getElementById('size-2');

  // Обработка изменения значений в полях размера
  const handleSizeChange = () => {
    const leftValue = size1Input.value.trim();
    const rightValue = size2Input.value.trim();

    const leftParts = leftValue.split('x').map(part => parseFloat(part.replace(',', '.')) || 0);
    const rightParts = rightValue.split('x').map(part => parseFloat(part.replace(',', '.')) || 0);

    sizeRange.min = leftParts[0] || 0;
    sizeRange.max = leftParts[0] || 0;

    if (leftParts.length > 1) {
      sizeRange.min2 = leftParts[1] || 0;
      sizeRange.max2 = leftParts[1] || 0;
    }
    if (rightParts.length > 1) {
      sizeRange.min2 = rightParts[1] || 0;
      sizeRange.max2 = rightParts[1] || 0;
    }

    sendFilterRequest();
  };

  size1Input.addEventListener('input', handleSizeChange);
  size2Input.addEventListener('input', handleSizeChange);

  document.querySelectorAll('input[name="Этажность"]').forEach(radio => {
    radio.addEventListener('change', function () {
      floorFilter = this.value;
      sendFilterRequest();
    });
  });

  function formatPrice(value) {
    return Number(value).toLocaleString('ru-RU');
  }

  function sendFilterRequest() {
    const productsContainer = document.querySelector('.catalog__content');
    const categoryId = productsContainer?.id || '';

    const filterData = {
      size_min: sizeRange.min,
      size_max: sizeRange.max,
      size_min2: sizeRange.min2 || null,
      size_max2: sizeRange.max2 || null,
      floor: floorFilter,
      min_price: priceRange.min_price,
      max_price: priceRange.max_price,
      category: categoryId
    };

    fetch('/wp-admin/admin-ajax.php?action=filter_products', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(filterData)
    })
      .then(response => response.json())
      .then(data => {
        displayProducts(data);
      })
      .catch(error => console.error('Ошибка:', error));
  }

  function displayProducts(products) {
    const productsContainer = document.querySelector('.catalog__content');
    productsContainer.innerHTML = '';

    if (products.length > 0) {
      products.forEach(product => {
        const productItem = document.createElement('a');
        productItem.classList.add('catalog__item');
        productItem.href = product.permalink;
        productItem.setAttribute('aria-label', product.name);

        productItem.innerHTML = `
          <img loading="lazy" src="${product.image}" class="catalog__img image" width="323" height="200" alt="${product.name}">
          <div class="catalog__info">
            <span class="catalog__name">${product.name}</span>
            <div class="catalog__size">
              <img loading="lazy" src="https://snk-stroy.ru/wp-content/themes/CHK/assets/img/catalog-size.svg" class="catalog__size-img image" width="18" height="18" alt="svg">
              ${product.size || ''}
            </div>
          </div>
          <span class="catalog__price">${formatPrice(product.price)} ₽</span>
          <div  class="catalog__link">
            <img loading="lazy" src="https://snk-stroy.ru/wp-content/themes/CHK/assets/img/catalog-link.svg" class="catalog__link-img image" width="28" height="28" alt="Ссылка">
          </div>
        `;
        productsContainer.appendChild(productItem);
      });
    } else {
      productsContainer.innerHTML = '<p class="catalog__false">Товары не найдены</p>';
    }
  }

  // Добавляем кнопку сброса фильтров
  const resetButton = document.getElementById('reset');

  resetButton.addEventListener('click', () => {
    // Сбрасываем значения в фильтрах
    priceSlider.noUiSlider.set([400000, 2000000]); // Сброс слайдера цены
    size1Input.value = '';
    size2Input.value = '';
    sizeRange = { min: 0, max: 0, min2: null, max2: null };
    floorFilter = '';

    // Сбрасываем радио-кнопки этажности
    document.querySelectorAll('input[name="Этажность"]').forEach(radio => {
      radio.checked = false;
    });

    // Отправляем обновленный запрос
    sendFilterRequest();
  });

  // Первоначальная загрузка товаров
  sendFilterRequest();
}
