const formElement = document.querySelector('.form-main');
const inputName = document.querySelector('.form-main__name');
const inputAdress = document.querySelector('.form-main__adress');
const inputPhone = document.querySelector('.form-main__phone');
const inputEmail = document.querySelector('.form-main__email');

const handleInputName = (evt) => {
    const inputElement = evt.target;
    validateInput(inputName, isValidName(inputName.value));
}

const handleInputAdress = (evt) => {
    const inputElement = evt.target;
    validateInput(inputAdress, isValidAdress(inputAdress.value));
}

const handleInputPhone = (evt) => {
    const inputElement = evt.target;
    validateInput(inputPhone, isValidPhone(inputPhone.value));
}

const handleInputEmail = (evt) => {
    const inputElement = evt.target;
    validateInput(inputEmail, isValidEmail(inputEmail.value));
}

const handleSubmit = (evt) => {
    evt.preventDefault();

    isValidName(inputName.value) ? hideInputError(inputName) : showInputError(inputName);
    isValidAdress(inputAdress.value) ? hideInputError(inputAdress) : showInputError(inputAdress);
    isValidPhone(inputPhone.value) ? hideInputError(inputPhone) : showInputError(inputPhone);
    isValidEmail(inputEmail.value) ? hideInputError(inputEmail) : showInputError(inputEmail);


    if (isValidName(inputName.value) && isValidAdress(inputAdress.value)
        && isValidPhone(inputPhone.value) && isValidEmail(inputEmail.value)) {
        formElement.submit();
    }
}

const validateInput = (element, isValid) => {
    if (!isValid && element.value.trim() !== '') {
        showInputError(element);
    } else {
        hideInputError(element);
    }
}

const showInputError = (element) => {
    const spanError = document.querySelector(`.${element.id}-error`);
    spanError.classList.add('form-main__span-active');
    element.classList.add('form-main__input-error');
};

const hideInputError = (element) => {
    const spanError = document.querySelector(`.${element.id}-error`);
    spanError.classList.remove('form-main__span-active');
    element.classList.remove('form-main__input-error');
};

const isValidName = (text) => {
    if (text.length > 40) {
        return false
    }
    const regex = /^[а-яёЁ А-Я\-]+$/i;
    return regex.test(text);
};

const isValidAdress = (text) => {
    if (text.length > 70) {
        return false
    }
    const regex = /^[а-яёЁ А-Я 0-9\.\-]+$/i;
    return regex.test(text);
};

const isValidPhone = (text) => {
    if (text.length > 10) {
        return false
    }
    const regex = /^[0-9\+]+$/i;
    return regex.test(text);
};

const isValidEmail = (email) => {
    if (email.length > 30) {
        return false
    }
    const regex = /@.*\./;
    return regex.test(email);
};


formElement.addEventListener('submit', handleSubmit);
inputName.addEventListener('input', handleInputName);
inputAdress.addEventListener('input', handleInputAdress);
inputPhone.addEventListener('input', handleInputPhone);
inputEmail.addEventListener('input', handleInputEmail);
