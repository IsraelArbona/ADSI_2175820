window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    // window.Popper = require('popper.js').default;

    window.$ = window.jQuery = require('jquery');

    require('bootstrap');

    require('../../node_modules/datatables.net/js/jquery.dataTables.js');
    require('../../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js');
    require('../../node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.js');
    require('../../node_modules/datatables.net-buttons/js/buttons.flash.js');
    require('../../node_modules/datatables.net-buttons/js/buttons.html5.js');
    require('../../node_modules/datatables.net-buttons/js/buttons.print');

    // pdfMake
    var pdfMake = require('../../node_modules/pdfmake/build/pdfmake.js');
    var pdfFonts = require('../../node_modules/pdfmake/build/vfs_fonts.js');
    pdfMake.vfs = pdfFonts.pdfMake.vfs;

    
} catch (e) {}

import * as $ from 'jquery';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
