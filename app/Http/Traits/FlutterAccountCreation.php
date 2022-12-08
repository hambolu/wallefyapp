<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Account;
use Auth;
use Carbon\Carbon;

// Flutterwave Account Creation
trait FlutterAccountCreation{

    public function index()
    {
        $ref = 'WALFY'.Carbon::now()->timestamp;
        $check = Account::where('user_id',Auth::id())->first();
        if (empty($check)) {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                "Authorization" => "Bearer FLWSECK-bb7ccbb28a318921f53dc239fd5e1cb1-X",
                ])->post('https://api.flutterwave.com/v3/virtual-account-numbers', [
                    'email' => Auth::user()->email,
                    'bvn' => Auth::user()->bvn,
                    'tx_ref' => $ref,
                    'is_permanent' => true,
                ]);

            $data = $response->json();

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
