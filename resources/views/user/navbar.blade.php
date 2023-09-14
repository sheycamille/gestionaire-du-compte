<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('front/img/logo-white.png') }}"
                alt="homepage" class="logo light-logo" width="150px" height="150px" />
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                    alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <button onclick="window.location.href='{{ route('refreshaccounts') }}';" class="btn btn-warning btn-icon align-self-center me-3">
            <i class="mdi mdi-reload"></i>
        </button>
        <div class="btn-group align-self-center" role="group">
            @if (App::getLocale() == 'en')
            <button type="button" class="btn btn-outline-secondary btn-icon " onclick="window.location.href='{{ route('switchlang', 'fr') }}';">
                FR
            </button>
            <button type="button" class="btn btn-outline-secondary btn-icon " onclick="window.location.href='{{ route('switchlang', 'es') }}';">
                ES
            </button>
            @elseif (App::getLocale() == 'fr')
            <button type="button" class="btn btn-outline-secondary btn-icon " onclick="window.location.href='{{ route('switchlang', 'en') }}';">
                EN
            </button>
            <button type="button" class="btn btn-outline-secondary btn-icon " onclick="window.location.href='{{ route('switchlang', 'es') }}';">
                ES
            </button>
            @else
            <button type="button" class="btn btn-outline-secondary btn-icon " onclick="window.location.href='{{ route('switchlang', 'en') }}';">
                EN
            </button>
            <button type="button" class="btn btn-outline-secondary btn-icon " onclick="window.location.href='{{ route('switchlang', 'fr') }}';">
                FR
            </button>
            @endif
        </div>



        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">

                <a id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"
                    class=" position-relative nav-link dropdown-toggle">
                    <p class="text-black mb-0"><b>KYC</b></p>
                    @if (Auth::user()->account_verify)
                        <span
                            class="mb-4 text-black nav-profile-text position-absolute top-3 start-100 translate-middle badge rounded-pill bg-success">
                            Verified

                        </span>
                    @else
                        <span
                            class="mb-4 text-white nav-profile-text position-absolute top-3 start-100 translate-middle badge rounded-pill bg-danger">
                            Not Verified
                        </span>
                    @endif
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    @if (Auth::user()->account_verify)
                        <p class="dropdown-item"><b>KYC Status: Verified</b> <i
                                class="mdi mdi-check me-2 text-success"></i></p>
                    @else
                        <a class="dropdown-item" href="{{ route('account.verify') }}">
                            <i class="mdi mdi-account-check me-2 text-success"></i> Verify Account </a>
                    @endif


                </div>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('account.setting') }}">
                        <i class="mdi mdi-account-settings me-2 text-success"></i> Account </a>

                    <a class="dropdown-item" href="{{ route('withdrawaldetails') }}">
                        <i class="mdi mdi-cash me-2 text-success"></i> @lang('message.dashboard.with_info') </a>
                    <a class="dropdown-item" href="{{ route('referrals') }}">
                        <i class="mdi mdi-account-multiple-plus me-2 text-success"></i> @lang('message.dashboard.my_referrals') </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout me-2 text-primary"></i> @lang('message.topmenu.log') </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
            </li>

            <li class="nav-item dropstart">
                <a class="nav-link count-indicator " href="{{ route('notifications') }}" >
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count-symbol bg-danger"></span>
                </a>
                
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
