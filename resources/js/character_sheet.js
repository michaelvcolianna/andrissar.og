// Load needed vendor modules
window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Elements the script will access
let
    timeout = null,
    el_csrf = document.querySelector('meta[name="csrf-token"]'),
    el_character = document.querySelector('#character_id'),
    el_name_real = document.querySelector('#character_name'),
    el_name_clone = document.querySelector('#character_name_2'),
    el_checks = document.querySelectorAll('input[type="checkbox"][name]'),
    el_inputs = document.querySelectorAll('input[type="text"][name], textarea[name]')
    ;

// Updates the second character name field in real time
el_name_real.addEventListener('input', function() {
    el_name_clone.value = event.target.value;
}, false);

// Updates the character on checkbox change
el_checks.forEach(input => input.addEventListener('input', function() {
    updateCharacter();
}, false));

// Updates the character after done typing in a text field
el_inputs.forEach(input => input.addEventListener('input', function() {
    typingDelay();
}, false));

/**
 * Input event typing delay
 *
 * Waits 750ms after the last input event before firing the update function.
 *
 * @return void
 */
function typingDelay()
{
    clearTimeout(timeout);

    timeout = setTimeout(function() {
        updateCharacter();
    }, 750);
}

/**
 * Update character event
 *
 * Sends an asynchronous request to the update controller with the current form
 * values so they can be saved.
 *
 * @return void
 */
function updateCharacter()
{
    // Obtain the FormData object
    var formData = new FormData(document.querySelector('#sheet'));

    // POST to the character update URL with the FormData and CSRF token
    axios({
        method: 'post',
        url: '/character/' + el_character.value,
        data: formData,
        headers: {
            'X-CSRF-TOKEN': el_csrf.getAttribute('content')
        }
    })
    .then(function() {})
    .catch(function() {});
}
