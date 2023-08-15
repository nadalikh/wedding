<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addUser(Request $request){
        $body = $request->only("mobile", "password", "role");
        try {
            $body["password"] = Hash::make($body['password']);
            User::create($body);
            return back()->with("success", "یوزر ساختیم ایول");
        }catch (\Exception $e){
            return back()->withErrors(["نشد یوزر بسازیم"]);
        }
    }
    public function changePassword(Request $request, User $user){
        $body = $request->only('password');
        $body['password'] = Hash::make($body['password']);
        try {
            $user->updateOrFail($body);
            return back()->with('success', "پسوردو با موفقیت اپدیت کردم");
        }catch (\Exception $e){
            return back()->withErrors("نتونستم پسوردتو اپدیت کنم");
        }
    }
    public function makeTheGod(){
        $user = User::create([
            "mobile" => "09394241452",
            "password" => Hash::make("510152000"),
            "role" => "God"
        ]);
    }


}
