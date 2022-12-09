<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\PaymentTransaction;
use Carbon\Carbon;
use Auth;
use App\Notifications\SendNotification;
use Notification;

class TransactionController extends Controller
{
    //
    public function index(Request $request)
    {
        //dd('Bearer '.env('COLLECT_SCK'));
        $response = Http::withHeaders([
            'accept' => 'application/json',
                'Authorization' => 'Bearer '.env('COLLECT_SCK')
        ])->get(env('COLLECT_URL').'payments',[
            'customer'=> '9766'
        ]);
        $data = $response->json('data');
        $sum = 0;
        foreach ($data as $item) {
            $sum += $item['amount'];
        }

        return view('transaction',compact('data','sum'));
    }

    public function fundAccount(Request $request)
    {

        $user = User::first();

        // $ref = Carbon::now()->timestamp;


        // if ($request->method == 'card') {
        //     $response = Http::withHeaders([
        //         'accept' => 'application/json',
        //         'mono-sec-key' => env('testWALLET_SK_KEY'),
        //     ])->post(env('WALLET_URL').'wallets/fund',[
        //         "amount" => $request->amount,
        //         "type" => 'onetime-debit',
        //         "reference" => $ref,
        //         "description" => 'Funding wallet by' .Auth::user()->first_name,

        //     ]);
        //     $data = $response->json();
        //     dd($data);
        //     //return redirect();
        // }elseif($request->method == 'transfer')
        // {
        //     return redirect('/account');
        // }
        $user->deposit($request->amount);
        return redirect('/')->with('success','Fund Added Successfully!');
    }

    public function withdraw(Request $request)
    {
        //$withdraw = new Transaction();
        //$withdraw->amount = $request->amount;
        $body = 'Withdrawal Request From'.Auth::user()->first_name.' '.'with amount ₦'.$request->amount.' '.'to account number'.$request->account_number;
        $response = Http::post(env('SMS_URL'),[
            'api_key'=> env('SMS_API'),
            'to'=> env('admin_sms'),
            'from'=> 'Wallefy',
            'sms'=> $body,
            'type'=>'plain',
            'channel' => 'generic',
        ]);

        $details = [
            'subject'=>"Withdrawal Notification",
          'greeting' => 'Dear',
          'body' => $body

      ];

        Notification::send($user, new SendNotification($details));

        $user = User::first();
        $user->withdraw($request->amount);
        $data = $response->json();
        //dd($data);

        return redirect('/dashboard')->with('success','Withdraw Been Processed!');
    }

    public function api_payment(Request $request)
    {

        $ref = 'walfy_'.Carbon::now()->timestamp;
        $woo_pay = new PaymentTransaction();
        $woo_pay->amount = $request->amount;
        $woo_pay->email = $request->email;
        $woo_pay->reference = $ref;
        $woo_pay->order_id = $request->order_id;
        $woo_pay->callback_url = $request->callback_url;
        $woo_pay->status = 'pending';
        $woo_pay->save();

        $url = 'https://checkout.wallefy.com.ng/'.$woo_pay->reference;

        // return Redirect::to($url);

        return response()->json([
            "status" => 'success',
            "data" => array(
                'checkout_url' => $url
            ),
        ],200);

    }
}
