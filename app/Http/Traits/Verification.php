<?php

namespace App\Http\Traits;

use Flutterwave\EventHandlers\EventHandlers\EventHandlers\EventHandlers\EventHandlers\Bvn;


trait Verification {
    public function index($bvn){
        $bvn_number = $bvn;
        $bvn = new Bvn();
        $result = $bvn->verifyBVN($bvn_number);
        return $result;
    }
}

