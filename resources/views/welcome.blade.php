<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وقت عاشقی</title>
    @vite(["resources/js/app.js", "resources/css/app.css"])
</head>

<body>
{{--<audio  autoplay loop >--}}
{{--    <source src="{{asset("shad.mp3")}}" >--}}
{{--    Your browser does not support the audio element.--}}
{{--</audio>--}}

    <div class="w-full h-[100vh] relative overflow-hidden text-center flex items-center justify-center">
        <div class="w-full h-full "></div>

        <video autoplay loop>
            <source src="{{asset("my-video.mp4")}}" >
            Your browser does not support the video tag.
        </video>
{{--        <div class="ms-background w-full h-[100vh] absolute blur-sm ">--}}
{{--            <div class="ms-darkBackground w-full h-full"></div>--}}
{{--        </div>--}}


    </div>
    <div class="ms-card backdrop-filter backdrop-blur-lg  lg:w-1/2 h-[80vh] sm:w-5/6 w-full mx-auto rounded-lg  absolute position left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 overflow-y-scroll">

        <div class="intro">
            <p class="text-white mt-3 text-6xl text-center m-auto ">نادعلی  <img class="inline px-2" width="50" height="50" src="{{asset("icons8-love-50.png")}}" alt="two-hearts"/> سارا</p>
        </div>
        <div class="date mt-3 m-auto w-2/3 grid grid-cols-3 ">
            <div class="flex items-center justify-center text-center text-white h-[5vh] border-red-800 col-start-2 col-span-1 text-xl ">شهریور</div>
            <div class="flex items-center justify-center text-center row-start-2  text-white h-[5vh]  col-start-1 col-span-1 text-xl border-t border-b ">ساعت ۱۹</div>
            <div class="flex items-center justify-center text-center row-start-2  text-white h-[5vh]  col-start-2 col-span-1 text-xl">۳۱</div>
            <div class="flex items-center justify-center text-center row-start-2  text-white h-[5vh]  col-start-3 col-span-1 text-xl border-t border-b">جمعه</div>
            <div class="flex items-center justify-center text-center row-start-3  text-white h-[5vh]  col-start-2 col-span-1 text-xl">۱۴۰۲</div>
        </div>
        <h1 class="lg:text-2xl md:text-xl sm:text-xl text-white text-center m-auto p-3">دست در دست هم نهاده ایم</h1>
        <h1 class="lg:text-2xl md:text-xl sm:text-xl text-white text-center m-auto p-3 ">و در سپیده دم بزرگترین رویداد زندگی</h1>
        <h1 class="lg:text-2xl md:text-xl sm:text-xl text-white text-center m-auto p-3 ">جشن کوچکی اراستیم و شوق فشردن دستان شما</h1>
{{--        <h1 class="lg:text-2xl md:text-xl sm:text-xl text-white text-center m-auto p-3 "></h1>--}}
        <h1 class="lg:text-2xl md:text-xl sm:text-xl text-white text-center m-auto p-3 ">برایمان انتظاری است شیرین</h1>

        <div class="m-auto mt-14 grid grid-flow-col gap-5 text-center items-center justify-center auto-cols-max">
            <div class="flex flex-col text-[#FFDF00]">
                <span class="countdown font-mono text-2xl">
                  <span class="text-white" id="sec" style="--value:۰۰;"></span>
                </span>
                ثانیه
            </div>
            <div class="flex flex-col text-[#FFDF00]">
                <span class="countdown font-mono text-2xl">
                    <span class="text-white" id="min" style="--value:۰۰;"></span>
                </span>
                دقیقه
            </div>
            <div class="flex flex-col text-[#FFDF00]">
                <span class="countdown font-mono text-2xl">
                    <span class="text-white" id="hour" style="--value:۰۰;"></span>
                </span>
                ساعت
            </div>
            <div class="flex flex-col text-[#FFDF00] ">
                <span class="countdown font-mono text-2xl">
                    <span class="text-white" style="--value:۰۰;" id="day"></span>
                </span>
                روز
            </div>
        </div>

{{--            <img class="h-full w-full" src="{{asset('theCard.png')}}"/>--}}

        <div class="invite mt-14">
            <p class="text-white text-2xl text-center mt-14">جناب آقای نادعای خلیلی به همراه خانواده</p>
            <a target="_blank" href="https://goo.gl/maps/t9rrALoBoy4HJ3iw5" class="text-white text-center block text-2xl text-center mt-3 hover:text-[#FFDF00] transition-all ">آدرس: خیابان آزادی، خیابان جمالزاده، خیابان فاطمی، خیابان اعتمادزاده، تالار مروارید۲</a>
        </div>
    </div>

<script>
    var now = '{{\Illuminate\Support\Carbon::now()->format('Y-m-d H:i:s')}}'

</script>
</body>
</html>
