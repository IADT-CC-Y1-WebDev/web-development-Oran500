// 09-2: Games-style form validation (formHandler pattern)

let submitBtn = document.getElementById('submit_btn');
let gameForm = document.getElementById('game_form');
let errorSummaryTop = document.getElementById('error_summary_top');

let titleInput = document.getElementById('title');
let releaseDateInput = document.getElementById('release_date');
let genreIdInput = document.getElementById('genre_id');
let descriptionInput = document.getElementById('description');
let platformIdsInput = document.getElementsByName('platform_ids[]');
let imageInput = document.getElementById('image');

let titleError = document.getElementById('title_error');
let releaseDateError = document.getElementById('release_date_error');
let genreIdError = document.getElementById('genre_id_error');
let descriptionError = document.getElementById('description_error');
let platformIdsError = document.getElementById('platform_ids_error');
let imageError = document.getElementById('image_error');

let errors = {};

submitBtn.addEventListener('click', onSubmitForm);

function addError(fieldName, message) {
    errors[fieldName] = message;
}

function showErrorSummaryTop() {
    const messages = Object.values(errors);
    if (messages.length === 0) {
        errorSummaryTop.style.display = 'none';
        errorSummaryTop.innerHTML = '';
        return;
    }
    errorSummaryTop.innerHTML =
        '<strong>Please fix the following:</strong><ul>' +
        messages
            .map(function (m) {
                return '<li>' + m + '</li>';
            })
            .join('') +
        '</ul>';
    errorSummaryTop.style.display = 'block';
}

function showFieldErrors() {
    titleError.innerHTML = errors.title || '';
    releaseDateError.innerHTML = errors.release_date || '';
    genreIdError.innerHTML = errors.genre_id || '';
    descriptionError.innerHTML = errors.description || '';
    platformIdsError.innerHTML = errors.platform_ids || '';
    imageError.innerHTML = errors.image || '';
}

function isRequired(value) {
    return String(value).trim() !== '';
}

function isMinLength(value, min) {
    return String(value).trim().length >= min;
}

function isMaxLength(value, max) {
    return String(value).trim().length <= max;
}

function onSubmitForm(evt) {
    evt.preventDefault();

    errors ={};

    let titleMin = titleInput.dataset.minlength || 3;
    let titleMax = titleInput.dataset.maxlength || 255;
    let descMin = descriptionInput.dataset.maxLength || 10;

    //title validation
    if(!isRequired(titleInput.value)){
        addError('title', 'Title is Required!');
    }
    else if(!isMinLength(titleInput.value, titleMin)){
        addError('title', 'Title must be at least ' + titleMin + ' Characters!');
    }
    else if(!isMaxLength(titleInput.value, titleMax)){
        addError('title', 'Title cannot exceed ' + titleMax + ' Characters!');
    }

    if(!isRequired(releaseDateInput.value)){
        addError('release_date', 'Release Year is Required!');
    }

    if(!isRequired(genreIdInput.value)){
        addError('genre_id', 'Genre is Required!');
    }

    if(!isRequired(descriptionInput.value)){
        addError('description', 'Description is Required!');
    }
    else if(!isMinLength(descriptionInput.value, descMin)){
        addError('description', 'Description must be at least ' + descMin + ' Characters!');
    }

    let platformChecked = false;
    for(let i = 0; i < platformIdsInput; i++){
        if(platformIdsInput[i].checked){
            platformChecked = true;
            break;
        }
    }

    if(!platformChecked){
        addError('platform_ids', 'Select at least one Platform!');
    }

    if(!isRequired(imageInput.value)){
        addError('image', 'Image is Required!');
    }

    showFieldErrors();
    showErrorSummaryTop();
    
    if(Object.keys(errors).length == 0){
        // gameForm.submit();
        alert('Form data validated')
    }
}
