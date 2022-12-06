@extends('layouts.main')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>

            </div>
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Users</p>
                                        <h4 class="card-title">{{ $user }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
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
                                        <h4 class="card-title">₦{{ number_format($sum/100) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
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
                                        <h4 class="card-title">₦0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
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
                                        <h4 class="card-title">₦0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
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
                                        <h4 class="card-title">₦0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="example" class="table table-striped dt-responsive nowrap" >
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Customer Email</th>
                            <th>Channel</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Reference</th>
                            <th>Currency</th>
                            <th>Fee</th>
                            <th>Short Code</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)

                        <tr>
                            <td>{{ $item['customer']['first_name'] }}{{ $item['customer']['last_name'] }}</td>
                            <td>{{ $item['customer']['email'] }}</td>
                            <td>{{ $item['channel'] }}</td>
                            <td>₦{{ $item['amount']/100 }}</td>
                            <td>{{ substr($item['description'], 0,10) }}</td>
                            <td>{{ $item['reference'] }}</td>
                            <td>{{ $item['currency'] }}</td>
                            <td>₦{{ 0.25 * $item['amount']/100 }}</td>
                            <td>{{ $item['short_code'] }}</td>
                            <td>
                                @if ($item['status'] == 'success')
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

