const modalButtonOpen = document.querySelector('.mobile-modal__open-button');
const modalButtonClose = document.querySelector('.mobile-modal__close-button');
const modal = document.querySelector('.mobile-modal');

modalButtonOpen.addEventListener('click', function () {
    console.log('Open Modal');
    modal.classList.add('mobile-modal_active');
});

modalButtonClose.addEventListener('click', function () {
    console.log('Close Modal');
    modal.classList.remove('mobile-modal_active');
});