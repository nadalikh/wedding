/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
import 'flowbite';
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
    console.log(number);
    return number
}

var d1 = new Date(now)
var d2 = new Date("2023-09-22 19:00:00")
var dif = d2 - d1;
var dayEl = document.getElementById("day")
var minEl = document.getElementById("min")
var hourEl = document.getElementById("hour")
var secEl = document.getElementById("sec")
// To calculate the time difference of two dates
setInterval(function () {
    dif -= 1000;
    var hour ,  min , day ;
    hour = min = day = 0;
    var sec = Math.floor(dif/1000)
    min += Math.floor(sec / 60)
    sec %= 60
    hour += Math.floor(min / 60)
    min %= 60
    day += Math.floor(hour / 24)
    hour %= 24
    day %= 365
    // console.log(date1,"sec: "+sec, "min: " + min,"hour: " + hour ,"day: " + day);
    dayEl.setAttribute("style","--value:"+day+";")
    minEl.setAttribute("style","--value:"+min+";")
    hourEl.setAttribute("style","--value:"+hour+";")
    secEl.setAttribute("style","--value:"+sec+";")
}, 1000);


