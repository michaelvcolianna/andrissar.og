// Load needed vendor modules
window._ = require('lodash');

// Elements the script will access
let
    el_characters = document.querySelectorAll('.character')
    ;

// Updates the character on checkbox change
el_characters.forEach(div => div.addEventListener('click', function() {
    flipPage(event);
}, false));

/**
 * Flip character sheet page
 *
 * Sends an asynchronous request to the update controller with the current form
 * values so they can be saved.
 *
 * @param  event
 * @return void
 */
function flipPage(event)
{
    // Get the overall character
    let character = event.target.closest('.character');

    // Find the page number
    let page = parseInt(character.querySelector('.on').getAttribute('rel'));

    // Close the page
    character.querySelector('.on').classList.remove('on');

    // Open new page
    if(page > 2)
    {
        page = 0;
    }
    page = (page + 1);
    character.querySelector('.page--' + page).classList.add('on');
}
