<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        //dd('Bearer '.env('COLLECT_SCK'));
        $response = Http::withHeaders([
            'accept' => 'application/json',
                'Authorization' => 'Bearer '.env('COLLECT_SCK')
        ])->get(env('COLLECT_URL').'payments');
        $data = $response->json('data');

        $sum = 0;
        foreach ($data as $item) {
            if ($item['status'] == "success" ) {
                $sum += $item['amount'];
            }
            // $sum += $item['amount'];
        }

$user = User::all()->count();

        return view('admin.masteradmin',compact('data','sum','user'));
    }
}
