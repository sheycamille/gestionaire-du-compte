@extends('layouts.user')

@section('title', 'Dashboard')

{{-- @section('dashboard', 'active')
@section('dashboard-li', 'active') --}}

@section('content')

    @if (Session::has('getAnouc') && Session::get('getAnouc') == 'true')
        @if (\App\Models\Setting::getValue('enable_annoc') == 'on')
            <h5 id="ann" class="op-7 mb-4">
                {{ \App\Models\Setting::getValue('newupdate') }}</h5>
            <script type="text/javascript">
                var announment = $("#ann").html();
                console.log(announment);
                swal({
                    title: "Annoucement!",
                    text: announment,
                    icon: "info",
                    buttons: {
                        confirm: {
                            text: "Okay",
                            value: true,
                            visible: true,
                            className: "btn btn-info",
                            closeModal: true
                        }
                    }
                });
            </script>
        @endif
        {{ session()->forget('getAnouc') }}
    @endif

    @if (Session::has('message'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>
                    <p class="alert-message">{!! Session::get('message') !!}</p>
                </div>
            </div>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    @foreach ($errors->all() as $error)
                        <i class="fa fa-warning"></i> {{ $error }}
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> @lang('message.dashboard.dash')
        </h3>
        
    </div>

    <div class="btn-group mb-4">
        <button type="button" href="{{ route('refreshaccounts') }}" class="btn btn-success me-2">@lang('message.dashboard.update_balances')</button>
        <button type="button" href="{{ route('account.deposits') }}"
            class="btn btn-primary me-2">@lang('message.body.depo')</button>
        <button type="button" href="{{ route('account.withdrawals') }}" class="btn btn-info me-2">
            @lang('message.body.withdraw_funds')</button>
        <button type="button" href="{{ route('account.liveaccounts') }}"
            class="btn btn-warning me-2">@lang('message.body.open')</button>
    </div>

    <div class="row">
        <div class="col-md stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('user/images/dashboard/circle.svg') }}" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">@lang('message.body.deposited')<i
                            class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">
                        @if (!empty($deposited))
                            {{ \App\Models\Setting::getValue('currency') }}{{ $deposited }}
                        @else
                            {{ \App\Models\Setting::getValue('currency') }}0.00
                        @endif
                    </h2>

                </div>
            </div>
        </div>
        <div class="col-md stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('user/images/dashboard/circle.svg') }}" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">@lang('message.body.balance')<i
                            class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">
                        {{ \App\Models\Setting::getValue('currency') }}{{ number_format($total_balance, 2, '.', ',') }}
                    </h2>

                </div>
            </div>
        </div>
        <div class="col-md stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('user/images/dashboard/circle.svg') }}" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> @lang('message.body.bonus') <i
                            class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ \App\Models\Setting::getValue('currency') }}
                        {{ number_format($total_bonus, 2, '.', ',') }}</h2>

                </div>
            </div>
        </div>
        <div class="col-md stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('user/images/dashboard/circle.svg') }}" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">@lang('message.body.credit') <i
                            class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ \App\Models\Setting::getValue('currency') }}
                        {{ number_format($total_credit, 2, '.', ',') }}</h2>

                </div>
            </div>
        </div>
    </div>

    </div>

@endsection
