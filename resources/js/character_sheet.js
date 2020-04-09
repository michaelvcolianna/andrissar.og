// Load needed vendor modules
window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Elements the script will access
let
    el_character = document.querySelector('#character_id'),
    el_csrf = document.querySelector('meta[name="csrf-token"]'),
    el_name_real = document.querySelector('#character_name'),
    el_name_clone = document.querySelector('#character_name_2'),
    el_inputs = document.querySelectorAll('input[name]'),
    el_textareas = document.querySelectorAll('textarea[name]')
    ;

// Updates the second character name field in real time
el_name_real.addEventListener('input', function() {
    el_name_clone.value = event.target.value;
}, false);

// Posts the form data to update the character on change
el_inputs.forEach(input => input.addEventListener('change', updateCharacter, false));
el_textareas.forEach(input => input.addEventListener('change', updateCharacter, false));

/**
 * Update character listener
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
