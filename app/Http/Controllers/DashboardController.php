<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $user = User::first();
        $balance = $user->balance ?? 0;
        //dd($balance);

        $trans = Transaction::latest(20);
        //$d = $user->transactions();
        //dd($d);

        return view('dashboard',compact('balance','trans'));
    }
}
