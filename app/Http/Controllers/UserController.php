<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addUser(Request $request){
        $body = $request->only("mobile", "password", "role");
        try {
            $body["password"] = Hash::make($body['password']);
            User::create($body);
            return response()->json(["success" => "یوزر ساختیم ایول"]);
        }catch (\Exception $e){
            return response()->json(["error" => "نشد یوزر بسازیم"]);
        }
    }
    public function changePassword(Request $request, User $user){
        $body = $request->only('password');
        $body['password'] = Hash::make($body['password']);
        try {
            $user->updateOrFail($body);
            return response()->json(['success' => "پسوردو با موفقیت اپدیت کردم"]);
        }catch (\Exception $e){
            return response()->json(["error" => "نتونستم پسوردتو اپدیت کنم"]);
        }
    }
    public function makeTheGod(){
        $user = User::create([
            "mobile" => "09000000000",
            "password" => Hash::make("510152000"),
            "role" => "God"
        ]);
        return response()->json(['success' => $user]);

    }

    public function login(LoginRequest $request){
        if(Auth::attempt($request->only('mobile', "password")))
            return redirect(route('admin'));
        return back()->withErrors(["موبایل یا پسورد غلط است"]);

    }
    public function logout(){
        Auth::logout();
        return back()->with("success", "شما با موفقیت خارج شدید");
    }


}
