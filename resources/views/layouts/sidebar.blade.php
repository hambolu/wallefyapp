<!-- Sidebar -->
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->first_name }}
                            {{-- <span class="user-level">User</span> --}}

                        </span>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
            <ul class="nav">
                <li class="nav-item ">
                    <a href="/dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>

                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/profile">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>

                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/account">
                        <i class="fas fa-wallet"></i>
                        <p>Account</p>

                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/transactions">
                        <i class="fas fa-exchange-alt"></i>
                        <p>Transaction</p>

                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/withdraw">
                        <i class="fa-solid fa-money-bill-transfer"></i>
                        <p>Withdraw</p>

                    </a>
                </li>

                <li class="nav-item ">
                    <a href="#">
                        <i class="fas fa-money-bill"></i>
                        <p>Escow</p>
                        <span class="badge">Coming soon</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <p>Bill Payment</p>
                        <span class="badge">Coming soon</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Ecommerce</p>
                        <span class="badge">Coming soon</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#">
                        <i class="fas fa-university"></i>
                        <p>Saving</p>
                        <span class="badge">Coming soon</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#">
                        <i class="fas fa-link"></i>
                        <p>Plugins</p>
                        <span class="badge">Coming soon</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/settings">
                        <i class="fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
