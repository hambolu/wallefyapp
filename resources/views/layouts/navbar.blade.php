<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg">

    <div class="container-fluid">
        <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-search pr-1">
                            <i class="fa fa-search search-icon"></i>
                        </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control">
                </div>
            </form>
        </div>
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            </li>

            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <li>
                        <div class="user-box">
                            <div class="avatar-lg"><img src="{{ asset('assets/img/profile.jpg') }}" alt="image profile" class="avatar-img rounded"></div>
                            <div class="u-text">
                                <h4>{{ Auth::user()->first_name ?? '' }}{{ Auth::user()->last_name ?? '' }}</h4>
                                <p class="text-muted">{{ Auth::user()->email }}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/profile">My Profile</a>
                        {{-- <a class="dropdown-item" href="#">My Balance</a> --}}
                        {{-- <a class="dropdown-item" href="#">Inbox</a> --}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/settings">Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>

<!-- End Navbar -->
