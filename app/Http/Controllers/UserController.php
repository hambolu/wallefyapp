<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Http\Traits\AccountCreation;

class UserController extends Controller
{
    use AccountCreation;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function updateProfile(Request $request)
    {

        $update = User::find(Auth::id());
        $update->first_name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->email = $request->email;
        $update->entity = $request->entity;
        $update->phone_number = $request->phone_number;
        $update->nin = $request->nin;
        $update->bvn = $request->bvn;
        $update->gender = $request->gender;
        $update->account_number = $request->account_number;
        $update->bank = $request->bank;
        $update->business_type = $request->business_type;
        $update->industry_type = $request->industry_type;
        $update->rc_number = $request->rc_number;
        $update->company_name = $request->company_name;
        $update->registration_date = $request->registration_date;
        $update->identity_type = $request->identity_type;
        $update->address_line1 = $request->address_line1;
        $update->lga = $request->lga;
        $update->city = $request->city;
        $update->state = $request->state;
        $update->dob = $dob = date("d-m-Y", strtotime($request->dob));;
        if ($request->file('identity_url')) {

            $file = $request->file('identity_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/upload_images'), $filename);

            $mono_file_url = url('') . "/public/upload/verify/$filename";

            $update->identity_url = $mono_file_url;
        }
        //dd($update);


        $update->save();

        $key = Str::random(20);
        $key2 = Str::random(20);

        if(Settings::where('user_id', Auth::id() )->exists())
        {}else{
        $api_key = new Settings();
        $api_key->secret_key = 'sk_live_'.$key;
        $api_key->public_key = 'pk_live_'.$key2;
        $api_key->user_id = Auth::id();
        $api_key->save();
        }


        //$accountcreation = $this->index();

        return back()->with('success','Update Successfully!');;
    }


}
