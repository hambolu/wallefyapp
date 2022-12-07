<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Account;
use Auth;

// Collect Account Creation
trait CollectAccountCreation{

    public function index()
    {
        $check = Account::where('user_id',Auth::id())->first();
        if (empty($check)) {

            $response = Http::post(env('WALLET_URL').'reserved_accounts', [

                'Authorization' => 'Bearer '.env('COLLECT_SCK'),
                'accept' => 'application/json',
                'content-type' => 'application/json',
                
                    'email' => Auth::user()->email,
                    'bvn' => Auth::user()->bvn,
                    'account_name' => Auth::user()->first_name.''.Auth::user()->first_name,
                    'phone_number' => Auth::user()->phone_number

              ]);

            $data = $response->json('data');
              dd($data);
            $update = Account::where('user_id',Auth::id())->first();
            $update->account_name = $data['account_name'];
            $update->account_number = $data['account_number'];
            $update->bank_code = $data['bank_code'];
            $update->bank_name = $data['bank_name'];
            $update->reference = $data['reference'];
            $update->status = $data['status'];
            $update->virtual_account_id = $data['id'];
            $update->user_id = Auth::id();
            $update->save();
        }


    }
}
