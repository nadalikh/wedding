<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuest;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuest $request)
    {
        try {
            $body = $request->only("mobile", "gender", "name", "withFamily", "quantity");
            $user = auth()->user();
            $body['quantity'] = intval($body['quantity']);
            $body['from'] = ($user->role == "sara") ? "bride" : (($user->role == "nadali") ? "nadali" : null);
            $guest = new Guest($body);
            $user->guests()->save($guest);
            return back()->with("success", "با موفقیت مهمان اضافه کردین");
        }catch(\Exception $e){
//            return back()->withErrors([$e->getMessage()]);
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }

    public function sendSms(Guest $guest){
        $nickName = ($guest->gender == "male") ? "جناب آقای": "سرکار خانم";
        $link = route('invite', ['guest' => $guest->mobile]);
        try {
            $curl = curl_init();
            curl_setopt_array($curl,
                array(
                    CURLOPT_URL => "http://api.ghasedaksms.com/v2/send/verify",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "type=1&receptor=$guest->mobile&template=weddingcard&param1=$nickName&param2=$guest->name&param3=$link",
                    CURLOPT_HTTPHEADER => array(
                        "apikey: 1Yk5EfVrxz8iAzGR+kk8e/KrDhLYPpr67bz9FZo4fGU",
                        "cache-control: no-cache",
                        "content-type: application/x-www-form-urlencoded",
                    )));
            curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
        }catch (\Exception $e ){
            dd($e->getMessage());
        }
        return back()->with("success", "پیام با موفقیت ارسال شد");
    }

    public function callTrigger(Guest $guest){
        $guest->called = !$guest->called;
        try {
            $guest->updateOrFail();
            return back()->with("success", "اپدیت شد به تماس گرفته شده");
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
}
