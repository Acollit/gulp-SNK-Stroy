import { validateForms } from '../functions/validate-forms.js';
import Inputmask from "../../../node_modules/inputmask/dist/inputmask.es6.js";



const inputMask = new Inputmask('+7 (999) 999-99-99');
const phoneInputs = document.querySelectorAll('input[type="tel"]');

phoneInputs.forEach(input => inputMask.mask(input));


function thanks() {
  let graphModal = document.querySelector('.graph-modal');
  let modal = document.getElementById('modal');
  let modal2 = document.getElementById('modal2');
  let modal3 = document.getElementById('modal3');
  let page = document.querySelector('.page__body');
  modal.classList.remove('graph-modal-open');
  modal.classList.remove('fade');
  modal.classList.remove('animate-open');
  modal2.classList.remove('graph-modal-open');
  modal2.classList.remove('fade');
  modal2.classList.remove('animate-open');
  modal3.classList.add('graph-modal-open');
  modal3.classList.add('fade');
  modal3.classList.add('animate-open');
  graphModal.classList.add('is-open');




  setTimeout(function () {

    modal3.classList.remove('graph-modal-open');
    modal3.classList.remove('fade')
    modal3.classList.remove('animate-open')
    graphModal.classList.remove('is-open')
    page.classList.remove('disable-scroll')

  }, 3000);
}

function file() {
  let graphModal = document.querySelector('.graph-modal');
  let modal = document.getElementById('modal');
  let modal2 = document.getElementById('modal2');
  let modal4 = document.getElementById('modal4');
  let page = document.querySelector('.page__body');
  modal.classList.remove('graph-modal-open');
  modal.classList.remove('fade');
  modal.classList.remove('animate-open');
  modal2.classList.remove('graph-modal-open');
  modal2.classList.remove('fade');
  modal2.classList.remove('animate-open');
  modal4.classList.add('graph-modal-open');
  modal4.classList.add('fade');
  modal4.classList.add('animate-open');
  graphModal.classList.add('is-open');




  setTimeout(function () {

    modal4.classList.remove('graph-modal-open');
    modal4.classList.remove('fade')
    modal4.classList.remove('animate-open')
    graphModal.classList.remove('is-open')
    page.classList.remove('disable-scroll')

  }, 3000);
}


document.addEventListener('wpcf7mailsent', function (event) {
  thanks()
}, false);


document.addEventListener('wpcf7invalid', function (event) {
  console.log("CF7 invalid event:", event.detail);
  console.log("CF7 API Response:", event.detail.apiResponse);

  if (!event.detail.apiResponse || !Array.isArray(event.detail.apiResponse.invalid_fields)) {
    console.error("CF7: invalid_fields отсутствует или не массив", event.detail.apiResponse.invalid_fields);
    return;
  }

  console.log("CF7 invalid fields:", event.detail.apiResponse.invalid_fields);

  let fileField = event.detail.apiResponse.invalid_fields.find(field => field.field === 'file-528');

  if (fileField) {

    file(); // вызываем твою функцию
  }
}, false);












