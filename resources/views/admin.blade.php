@extends('master')
@section("content")
    <a href="{{route("admin.logout")}}"><i class="fa fa-sign-out text-2xl  text-red-900"></i></a>
    <form class="lg:w-1/2 md:w-2/3 sm:w-5/6  block m-auto my-5" method="post" action="{{route("guest.store")}}">
        @csrf
            <div class="mb-6">
                <label for="mobile" class="text-lg block mb-2 font-medium text-gray-900">موبایل</label>
                <input type="text" name="mobile" id="mobile" class="text-lg shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" style="direction: ltr">
            </div>
            <div class="mb-6">
                <label for="name" class="text-lg block mb-2  font-medium text-gray-900 dark:text-white">نام و نام خانوادگی</label>
                <input name="name" type="text" id="name" class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            </div>

            <fieldset class="my-4">
                <legend class="sr-only">gender</legend>
                <label class="text-lg block mb-2 font-medium text-gray-900">جنسیت</label>

                <div class="flex items-center mb-4">
                    <input id="gender-1" type="radio" name="gender" value="male" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                    <label for="gender-1" class="text-lg block ml-2 px-3 font-medium text-gray-900 dark:text-gray-300">
                        مرد
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="gender-2" type="radio" name="gender" value="female" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="gender-2" class="text-lg block px-3 ml-2 font-medium text-gray-900 dark:text-gray-300">
                        زن
                    </label>
                </div>
            </fieldset>

            <fieldset class="my-4">
                <legend class="sr-only">with</legend>
                <label class="text-lg block mb-2 font-medium text-gray-900">به همراه خانواده</label>

                <div class="flex items-center mb-4">
                    <input id="withFamily-1" type="radio" name="withFamily" value="1" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                    <label for="withFamily-1" class="text-lg block ml-2 px-3 font-medium text-gray-900 dark:text-gray-300">
                        با خانواده
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="withFamily-2" type="radio" name="withFamily" value="0" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="withFamily-2" class="text-lg block px-3 ml-2 font-medium text-gray-900 dark:text-gray-300">
                        بدون همراه
                    </label>
                </div>
                <div class="flex items-center mb-4">
                    <input id="withFamily-3" type="radio" name="withFamily" value="2" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="withFamily-3" class="text-lg block px-3 ml-2 font-medium text-gray-900 dark:text-gray-300">
                        با بانو
                    </label>
                </div>
            </fieldset>
        <div class="mb-6">
            <label for="quantity" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">تعداد دقیق مهمان ها</label>
            <input type="number" name="quantity" id="quantity" class=" bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="1" max="6" value="1" required>
        </div>

        <button type="submit" class="ms-font  text-lg m-auto block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ثبت مهمان</button>
    </form>

    <hr class="my-0.5 h-[2px]">
    <hr class="my-0.5 h-[2px]">
    <div class="mb-10">
        <p class="ms-font">تعداد مهمان های من: {{sizeof($guests)}}</p>
        <p class="ms-font">تعداد تمام مهمان ها: {{$allGuestsQuantity}}</p>
    </div>

    <form class="w-1/2 mb-10" method="get" action="{{route('admin')}}">
        <fieldset class="my-4">
            <label class="text-lg block mb-2 font-medium text-gray-900">فیلتر</label>

            <div class="flex items-center mb-4">
                <input id="filter-2" type="radio" name="filter" value="" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="filter-2" class="text-lg block px-3 ml-2 font-medium text-gray-900 dark:text-gray-300">
                    بدون فیلتر
                </label>
            </div>
            <div class="flex items-center mb-4">
                <input id="filter-1" type="radio" name="filter" value="messageSent" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                <label for="filter-1" class="text-lg block ml-2 px-3 font-medium text-gray-900 dark:text-gray-300">
                    پیام ارسال نشده ها
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input id="filter-2" type="radio" name="filter" value="called" class="text-lg w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="filter-2" class="text-lg block px-3 ml-2 font-medium text-gray-900 dark:text-gray-300">
                    تماس گرفته نشده ها
                </label>
            </div>

        </fieldset>
        <button type="submit" class="ms-font block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">اعمال فیلتر</button>
    </form>
    <table class="table-auto my-5 w-full">
        <thead >
        <tr class="mb-5 border-b-2">
            <th>#</th>
            <th>نام</th>
            <th>موبایل</th>
            <th>تعداد</th>
            <th>همراه</th>
            <th>جنسیت</th>
            <th>وضعیت تماس</th>
            <th>وضعیت ارسال</th>
            <th>لینک دعوت</th>
        </tr>
        </thead>
        <tbody>
            @foreach($guests as $guest)
                <tr class="border-b">
                    <td class="text-center">{{$guest->id}}</td>
                    <td class="text-center">{{$guest->name}}</td>
                    <td class="text-center"><a href="tel:{{$guest->mobile}}">{{$guest->mobile}}</a></td>
                    <td class="text-center">{{$guest->quantity}}</td>
                    <td class="text-center">{{($guest->withFamily == 0) ? "بدون همراه" : (($guest->withFamily == 1) ? "با خانواده" : "با بانو")}}</td>
                    <td class="text-center">{{($guest->gender == "male") ? "مرد" : "زن"}}</td>
                    <td class="text-center {{($guest->called) ? "pointer-events-none" : ""}}"><a href="{{(!$guest->called) ? route('guest.callTrigger', ['guest' => $guest->mobile]) : ""}}"><i class="fa fa-phone {{($guest->called) ? "" : "text-green-600"}}"></i></a></td>
                    <td class="text-center {{($guest->sentSms) ? "pointer-events-none" : ""}}"><a href="{{(!$guest->sentSms) ? route('guest.sendSms', ['guest' => $guest->mobile]) : ""}}"><i class="fa fa-send {{($guest->sentSms) ? "" : "text-green-600"}}"></i></a></td>
                    <td class="text-center"><button class="link_copy" value="{{route('invite', ['guest' => $guest->mobile])}}"><i class="fa fa-link text-green-600"></i></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
