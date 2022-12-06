@extends('layouts.main')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <h4 class="page-title">Settings</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        {{-- <div class="card-header">
                            <div class="row row-nav-line">
                                <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Timeline</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
                                </ul>
                            </div>
                        </div> --}}
                        <form action="/updateSettings" method="post">
                            @csrf

                            <div class="card-body">
                                {{-- <div class="row mt-3">
                                    <div class="col-md-3">
                                        <div class="form-group form-group-default">
                                            <label>Trade Name</label>
                                            <input type="text" class="form-control" name="trade_name"  value="{{ Auth::user()->trade_name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-group-default">
                                            <label>Company Email</label>
                                            <input type="email" class="form-control" name="company_email" value="{{ Auth::user()->company_email ?? ''  }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Company Phone Number</label>
                                            <input type="text" class="form-control" name="company_phone_number" value="{{ Auth::user()->company_phone_number ?? ''  }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">


                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Country</label>
                                            <input type="text" class="form-control"  name="country" value="{{ Auth::user()->country ?? '' }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>City</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->city ?? '' }}" name="city" >
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>State</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->state ?? '' }}" name="state" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Address</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->address ?? '' }}" name="address" >
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>CAC No</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->cac_no ?? '' }}" name="cac_no" >
                                        </div>
                                    </div>

                                </div> --}}
                                <h5>API KEYS</h5>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Screte Key</label>
                                            <input type="text" class="form-control text-black" value="{{ $setting->secret_key ?? '' }}" name="secret_key"  disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Public Key</label>
                                            <input type="text" class="form-control text-black" value="{{ $setting->public_key ?? '' }}" name="public_key" disabled>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="text-right mt-3 mb-3">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div> --}}
                            </div>
                    </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile card-secondary">
                        <div class="card-header" style="background-image: url('assets/img/blogpost.jpg')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">{{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? ''}}</div>
                                <div class="job">{{ Auth::user()->email ?? '' }}</div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

