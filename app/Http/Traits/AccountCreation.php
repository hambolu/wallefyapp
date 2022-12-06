<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Auth;


trait AccountCreation{

    public function index()
    {
        if (empty(Auth::user()->account_holder_id)) {

            $body = array(

                "entity" => Auth::user()->entity,
                "first_name" => Auth::user()->first_name,
                "last_name" => Auth::user()->last_name,

                "address" => array(
                    "address_line1" => Auth::user()->address_line1,
                    "city" => Auth::user()->city,
                    "state" => Auth::user()->state,
                    "lga" => Auth::user()->lga,
                ),

                "phone" => Auth::user()->phone_number,
                "bvn" => Auth::user()->bvn,

                "dob" => array(
                    "date" => Auth::user()->dob,
                ),

                "identity" => array(
                    "type" => Auth::user()->identity_type,
                    "number" => Auth::user()->nin,
                    "url" => Auth::user()->identity_url,
                ),

        );


            $key = env('WALLET_SK_KEY');
            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, env('WALLET_URL').'accountholders');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_ENCODING, '');
            curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
            curl_setopt($curl, CURLOPT_TIMEOUT, 0);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(
                $curl,
                CURLOPT_HTTPHEADER,
                array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    "mono-sec-key: $key",
                )
            );

            $data = curl_exec($curl);
            curl_close($curl);


            // $response = Http::withHeaders([
            //     'Content-Type: application/json',
            //     'Accept' => 'application/json',
            //     'mono-sec-key' => env('WALLET_SK_KEY'),
            // ])->post(env('WALLET_URL').'accountholders',[
            //     "entity" => Auth::user()->entity,
            //     "first_name" => Auth::user()->first_name,
            //     "last_name" => Auth::user()->last_name,
            //     "address" => Auth::user()->address_line1,
            //     "phone" => Auth::user()->phone_number,
            //     "type" => Auth::user()->identity_type,
            //     "number" => Auth::user()->nin,
            //     "url" => Auth::user()->identity_url,
            // ]);
            $account_holder_id = json_decode($data);
            dd($account_holder_id);

            $updateId = User::find(Auth::id());
            $updateId->account_holder_id = $account_holder_id['id'];
            $updateId->save();
            dd($data);
        }

    }
}
