@extends('master')
@section("content")
        <h1 class="my-4 text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            ورود ادمین
        </h1>
        <form class="lg:w-1/2 md:w-2/3 sm:w-5/6   block m-auto mt-5 space-y-4 md:space-y-6" action="{{route('admin.login')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="mobile" class=" text-xl block mb-2 font-medium text-gray-900 dark:text-white">موبایل</label>
                <input style="direction: ltr" type="mobile" name="mobile" id="mobile" class="text-lg bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="09*********" required="">
            </div>
            <div class="mb-4">
                <label for="password" class="text-xl block mb-2 text-sm font-medium text-gray-900 dark:text-white">پسورد</label>
                <input style="direction: ltr" type="password" name="password" id="password" placeholder="••••••••" class="text-lg bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <button type="submit" class="text-lg block w-[300px] m-auto block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ورود</button>

        </form>

        @if($errors->any())
            <script>
                var error = '{{$errors->first()}}'
            </script>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <script>
                var success = '{{\Illuminate\Support\Facades\Session::get('success')}}'
            </script>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('success_ok'))
            <script>
                var success_ok = '{{\Illuminate\Support\Facades\Session::get('success_ok')}}'
            </script>
        @endif
@endsection
