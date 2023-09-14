<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    
    <li class="nav-item">
      <a class="nav-link @yield('dashboard-li')" href="{{ route('dashboard') }}">
        <span class="menu-title">@lang('message.dashboard.dash')</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">@lang('message.dashboard.trade')</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-buffer"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('account.liveaccounts') }}">@lang('message.dashboard.live')</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('account.demoaccounts') }}">@lang('message.dashboard.demo')</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">@lang('message.dashboard.deposits')</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-cash-multiple menu-icon"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('account.deposits') }}">@lang('message.dashboard.depo')</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('account.withdrawals') }}">@lang('message.dashboard.with')</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('account.downloads') }}">
        <span class="menu-title">@lang('message.dashboard.down')</span>
        <i class="mdi mdi-package-down menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('account.support') }}">
        <span class="menu-title">@lang('message.dashboard.sup')</span>
        <i class="mdi mdi-alert-circle-outline menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>