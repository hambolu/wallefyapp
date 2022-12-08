@extends('layouts.main')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <h4 class="page-title">User Account</h4>
                <div class="row">

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <h5>Account Number : {{  $account_details->account_number ?? '' }}</h5>
                                        </div>
                                        <div class="form-group">
                                            <h5>Account Name : {{  $account_details->account_name ?? '' }}</h5>
                                        </div>
                                        <div class="form-group">
                                            <h5>Bank : {{  $account_details->bank_name ?? '' }}</h5>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="text-center">
                                            <img class="img-fluid" src="https://img.icons8.com/fluency/98/null/merchant-account.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>

</div>
@endsection

