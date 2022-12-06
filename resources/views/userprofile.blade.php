@extends('layouts.main')
@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <h4 class="page-title">User Profile</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <div class="card-header">
                            {{-- <div class="row row-nav-line">
                                <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Timeline</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
                                </ul>
                            </div> --}}
                        </div>
                        <form action="/updateProfile" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <div class="form-group form-group-default">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name"  value="{{ Auth::user()->first_name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-group-default">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name ?? ''  }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email ?? ''  }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Account Type</label>
                                            <select class="form-control" id="entity" name="entity" onchange="showDiv('hidden_div', this)">
                                                <option value="INDIVIDUAL">Individual</option>
                                                <option value="BUSINESS">Buisness</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Gender</label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Phone</label>
                                            <input type="text" class="form-control"  name="phone_number" value="{{ Auth::user()->phone_number ?? '' }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Bvn</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->bvn ?? '' }}" name="bvn" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Account Number</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->account_number ?? '' }}" name="account_number" >
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Bank</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->bank ?? '' }}" name="bank" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" value="{{ Auth::user()->dob ?? '' }}" name="dob" >
                                        </div>
                                    </div>
                                </div>
                                <h4>IDENTITY</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Identity Type</label>
                                            <select class="form-control" id="gender" name="identity_type">
                                                <option value="NIN">NIN</option>
                                                <option value="INTERNATIONAL_PASSPORT">INTERNATIONAL PASSPORT</option>
                                                <option value="DRIVERS_LICENSE">DRIVERS LICENSE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Number</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->nin ?? '' }}" name="nin" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Upload Identity Image</label>
                                            <input type="file" class="form-control" value="{{ Auth::user()->identity_url ?? '' }}" name="identity_url" >
                                        </div>
                                    </div>


                                </div>
                                <h4>ADDRESS</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Country</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->country ?? '' }}" name="country" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Address </label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->address_line1 ?? '' }}" name="address_line1" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>LGA</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->lga ?? '' }}" name="lga" >
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
                                    {{-- <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Busness Name</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->business_name ?? '' }}" name="business_name" >
                                        </div>
                                    </div> --}}

                                </div>
                                <div id="hidden_div">

                                    <h4>Business</h4>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Business Type</label>
                                                <select class="form-control" id="business_type" name="business_type">
                                                    <option value="">Select Option</option>
                                                    <option value="limited_company">Limited Company</option>
                                                    <option value="business">Buisness Name</option>
                                                    <option value="incorprated_trustee">Incorprated Trustee</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Industry Type</label>
                                                <select class="form-control" id="industry_type" name="industry_type">
                                                    <option value="">Select Option</option>
                                                    <option value="agricultural">Agricultural</option>
                                                    <option value="ecommerce">Ecommerce</option>
                                                    <option value="ecommerce">Ecommerce</option>
                                                    <option value="financial services">Financial Service</option>
                                                    <option value="health">Health</option>
                                                    <option value="hospitality">Hospitality</option>
                                                    <option value="legal services">Legal Services</option>
                                                    <option value="logistics">Logistics</option>
                                                    <option value="manufacturing industry">Manufacturing Industry</option>
                                                    <option value="NGO">NGO</option>
                                                    <option value="others">Others</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>RC Number</label>
                                                <input type="text" class="form-control" value="{{ Auth::user()->rc_number ?? '' }}" name="rc_number" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" value="{{ Auth::user()->company_name ?? '' }}" name="company_name" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Date of Registration</label>
                                                <input type="date" class="form-control" value="{{ Auth::user()->registration_date ?? '' }}" name="registration_date" >
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-right mt-3 mb-3">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
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

