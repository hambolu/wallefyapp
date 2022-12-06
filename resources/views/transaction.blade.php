@extends('layouts.main')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <h4 class="strong">All Transaction</h4>
            <div class="table-responsive">
            <table id="example" class="table table-striped dt-responsive nowrap" >
                <thead>
                    <tr>
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
                        <td>{{ $item['channel'] }}</td>
                        <td>₦{{ $item['amount']/100 }}</td>
                        <td>{{ $item['description'] }}</td>
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

