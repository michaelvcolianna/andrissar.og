window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let
    el_character = document.querySelector('#character_id'),
    el_name_real = document.querySelector('#character_name'),
    el_name_clone = document.querySelector('#character_name_2'),
    el_inputs = document.querySelectorAll('input[type="text"][name]'),
    el_textareas = document.querySelectorAll('textarea[name]'),
    el_checks = document.querySelectorAll('input[type="checkbox"][name]')
    ;

// Updates the secondary character name field in real time
el_name_real.addEventListener('input', function() {
    el_name_clone.value = event.target.value;
}, false);

// @todo Axios submit to update easy fields
el_inputs.forEach(input => input.addEventListener('change', apiPost, false));
el_textareas.forEach(input => input.addEventListener('change', apiPost, false));
el_checks.forEach(input => input.addEventListener('change', apiPost, false));

function apiPost()
{
    var formData = new FormData(document.querySelector('#pages'));
    for(var pair of formData.entries())
    {
        console.log(pair[0] + ': ' + pair[1]);
    }
}
