window._ = require('lodash');

/**
 * Load the axios HTTP library.
 */

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
