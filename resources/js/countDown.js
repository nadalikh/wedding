import $ from "jquery";
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

const audio = document.getElementById("audio")
$("#music").on("click", function(){
    console.log(audio.paused);
     if(audio.paused)
        audio.play();
     else
         audio.pause();
})

