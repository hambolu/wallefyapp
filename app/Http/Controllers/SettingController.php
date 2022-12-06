<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use Auth;

class SettingController extends Controller
{
    public function settings()
    {
        $setting = Settings::where('user_id',Auth::id())->first();
        return view('settings',compact('setting'));
    }
    public function updateSettings(Request $request)
    {
        $update = Settings::where('user_id',Auth::id())->first();
        $update->trade_name = $request->trade_name;
        $update->company_phone_number = $request->company_phone_number;
        $update->company_email = $request->company_email;
        $update->country = $request->country;
        $update->city = $request->city;
        $update->state = $request->state;
        // $update->address = $request->address;
        // $update->director_id_url = $request->director_id_url;
        $update->business_certificate_url = $request->business_certificate_url;
        $update->cac_no = $request->cac_no;
        $update->save();



        return back()->with('success','Updated Successfully!');;
    }
}
