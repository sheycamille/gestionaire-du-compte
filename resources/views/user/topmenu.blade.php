@section('topbar')
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item ml-auto">
                <div class="upgrade-btn">
                    <a href="{{ route('refreshaccounts') }}" class="btn btn-primary">Refresh</a>
                </div>
            </li>

            <!-- Nav Item - Lang -->
            @if (App::getLocale() == 'en')
                <li class="nav-item no-arrow mx-1">
                    <a class="btn btn-warning text-white" href="{{ route('switchlang', 'fr') }}">FR</a>
                </li>
                <li class="nav-item no-arrow mx-1">
                    <a class="btn btn-danger text-white" href="{{ route('switchlang', 'es') }}">ES</a>
                </li>
            @elseif (App::getLocale() == 'fr')
                <li class="nav-item no-arrow mx-1">
                    <a class="btn btn-success text-white" href="{{ route('switchlang', 'en') }}">EN</a>
                </li>
                <li class="nav-item no-arrow mx-1">
                    <a class="btn btn-danger text-white" href="{{ route('switchlang', 'es') }}">ES</a>
                </li>
            @else
                <li class="nav-item no-arrow mx-1">
                    <a class="btn btn-success text-white" href="{{ route('switchlang', 'en') }}">EN</a>
                </li>
                <li class="nav-item no-arrow mx-1">
                    <a class="btn btn-primary text-white" href="{{ route('switchlang', 'FR') }}">FR</a>
                </li>
            @endif

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                {{-- <a class="" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                </a> --}}

                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display:flex;">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="margin-left: 0.5rem!important;">
                        {{ Auth::user()->name }}</span>
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('account.profile') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        @lang('message.dashboard.update_pfl')
                    </a>
                    <a class="dropdown-item" href="{{ route('changepassword') }}">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        @lang('message.topmenu.chg_pss')
                    </a>
                    <a class="dropdown-item" href="{{ route('notifications') }}">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        @lang('message.dashboard.notif')
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        @lang('message.topmenu.log')
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
@endsection
