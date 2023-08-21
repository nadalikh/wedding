/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
import 'flowbite';
import $ from "jquery";
import Swal from 'sweetalert2';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

function toPersian(number){
    number = number.replace("0", "۰")
    number = number.replace("1", "۱")
    number = number.replace("2", "۲")
    number = number.replace("3", "۳")
    number = number.replace("4", "۴")
    number = number.replace("5", "۵")
    number = number.replace("6", "۶")
    number = number.replace("7", "۷")
    number = number.replace("8", "۸")
    number = number.replace("9", "۹")
    return number
}

$(".link_copy").on('click', function(){
    navigator.clipboard.writeText(this.value);
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'لینک کپی شد',
        showConfirmButton: false,
        timer: 1500
    })
});

if (typeof error !== 'undefined') {
    Swal.fire({
        title: error,
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        },
        timer: 2000,
        showConfirmButton: false,
        icon: 'error'
    })
}
if (typeof success !== 'undefined') {
    Swal.fire({
        title: success,
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        },
        timer: 2000,
        showConfirmButton: false,
        icon: 'success'
    })
}
if (typeof success_ok !== 'undefined') {
    Swal.fire({
        title: success_ok,
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        },
        showConfirmButton: true,
        icon: 'success'
    })
}

// A $( document ).ready() block.
$( document ).ready(function() {
    $(".preloader").addClass("hidden")
});







