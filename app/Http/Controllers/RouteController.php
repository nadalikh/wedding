<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Auth\GenericUser;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function admin(Request $request){
//        dd($);
        $guests = match ($request->filter ?? "") {
            "messageSent" => auth()->user()->notSentMessages(),
            "called" => auth()->user()->notCalled(),
            default => auth()->user()->myGuests(),
        };

        $allGuestsQuantity = Guest::all()->count();
        return view("admin", compact("guests", "allGuestsQuantity"));
    }
    public function login(){
        return view('login');
    }
    public function welcome(Guest $guest){
        return view('welcome',  compact("guest"));
    }
}
