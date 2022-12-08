<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Account;
use Auth;
use Carbon\Carbon;

// Flutterwave Account Creation
trait FlutterVirtualCard{

    public function index($amount)
    {
        $ref = 'WALFY'.Carbon::now()->timestamp;
        $check = Account::where('user_id',Auth::id())->first();
        if (empty($check)) {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                "Authorization" => "Bearer FLWSECK-bb7ccbb28a318921f53dc239fd5e1cb1-X",
                ])->post('https://api.flutterwave.com/v3/virtual-cards', [
                    'currency' => "USD",
                    'amount' => $amount,
                    'debit_currency' => 'NGN',
                    "billing_name" => Auth::user()->first_name.''.Auth::user()->last_name,
                    "billing_address" => Auth::user()->address_line1,
                    "billing_city" => Auth::user()->city,
                    "billing_state" => Auth::user()->state,
                    "billing_postal_code" => $postal_code,
                    "billing_country" => Auth::user()->country,
                    "first_name" => Auth::user()->first_name,
                    "last_name" => Auth::user()->last_name,
                    "date_of_birth" => Auth::user()->dob,
                    "email" => Auth::user()->email,
                    "phone" => Auth::user()->phone_number,
                    "title" => Auth::user()->title,
                    "gender" => Auth::user()->gender,
                ]);

            // $data = $response->json('data');

            // //dd($data);

            // $update = Account::where('user_id',Auth::id())->first();
            // $update->account_number = $data['account_number'];
            // $update->bank_name = $data['bank_name'];
            // $update->reference = $data['order_ref'];
            // $update->status = $data['account_status'];
            // $update->user_id = Auth::id();
            // $update->save();
        }
    }
}
