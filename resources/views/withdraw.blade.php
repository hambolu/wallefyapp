@extends('layouts.main')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <h4 class="strong">All Transaction</h4>

            <form action="/withdraw" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" id="amount" min="1000" class="form-control" value="{{ old('amount') }}">
                    @error('amount')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="recipient">Account Number</label>
                    <input type="text" name="account_number" id="account_number" class="form-control" value="{{ old('account_number') }}">
                    @error('account_number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <input type="submit" value="Withdraw" class="btn btn-primary">
            </form>
        </div>
    </div>


</div>
@endsection

