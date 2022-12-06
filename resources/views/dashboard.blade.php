@extends('layouts.main')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <a href="#" class="btn btn-sm btn-success ml-4 float-left " data-toggle="modal" data-target="#basicModal">Fund Account</a>
                <a href="#" class="btn btn-sm btn-info ml-4 float-left " data-toggle="modal" data-target="#withdrawModal">Withdraw</a>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                                        <i class="fas fa-university"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Balance</p>
                                        <h4 class="card-title">₦{{ number_format($balance)  }}</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-money-bill"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Escow</p>
                                        <h4 class="card-title">0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-success bubble-shadow-small">
                                        <i class="far fa-chart-bar"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Sales</p>
                                        <h4 class="card-title">0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="far fa-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Order</p>
                                        <h4 class="card-title">0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <h4 class="strong">Latest Transaction</h4>
    <div class="container">
@include('layouts.fundaccount')
@include('layouts.withdraw')





    <div class="table-responsive">
        <table id="example" class="table table-striped dt-responsive nowrap" >
            <thead>
                <tr>

                    <th>Amount</th>
                    <th>Type</th>
                    <th>Transaction ID</th>
                    <th>Currency</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trans as $item)

                <tr>

                    <td>₦{{ $item->amount }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->uuid }}</td>
                    <td>{{ $item['currency'] }}</td>

                    <td>
                        @if ($item->confirmed == '1')
                        <span class="badge bg-success">Success</span>

                        @else
                        <span class="badge bg-danger">Failed</span>
                        @endif
                        </td>
                </tr>
                @empty

                @endforelse

            </tfoot>
        </table>
        </div>
        </div>
    </div>


</div>
@endsection

