{{-- @extends('layouts.app')

@section('title', 'My Downloads')

@section('downloads-li', 'active')
@section('downloads', 'active')

@section('content')

    @include('user.sidebar')
    @include('user.topmenu')

    <!-- Main Content -->
    <div id="content">
        @include('user.topmenu')

        <!-- Begin Page Content -->
        <div class="container-fluid">

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

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">@lang('message.trader')</h1>
                <p class="text-center">@lang('message.trader_sub')</p>
            </div>

            <div class="row d-flex justify-content-center mb-5">
                <div class="col-lg-8">
                    <div class="card text-center">
                        <div class="card-header">
                            @lang('message.our_supported_platforms')
                        </div>
                        <div class="card-body mb-5">
                            <h4 class="mb-3">@lang('message.web_mobile_apps')</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="https://web.monetamarket.net" class="btn btn-primary"
                                        target="_blank">@lang('message.launch_webtrader')</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="https://play.google.com/store/apps/details?id=com.mtrader7.terminal"
                                        class="btn btn-primary" target="_blank">@lang('message.body.android') </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="https://apps.apple.com/app/mobiustrader-7/id1355359598"
                                        class="btn btn-primary" target="_blank">@lang('message.body.iphone')</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="mb-3">@lang('message.desktop_apps')</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="https://mobius-trader.s3.eu-north-1.amazonaws.com/MonetaMarket/MonetaMarket-Mobius.win.exe"
                                        class="btn btn-primary">@lang('message.body.windows')</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="https://mobius-trader.s3.eu-north-1.amazonaws.com/MonetaMarket/MonetaMarket-Mobius.mac.dmg"
                                        class="btn btn-primary">@lang('MacOS')</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="https://mobius-trader.s3.eu-north-1.amazonaws.com/MonetaMarket/MonetaMarket-Mobius.linux.AppImage"
                                        class="btn btn-primary">@lang('Linux')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.user')

@section('title', 'Downloads')

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
                <i class="mdi mdi-cloud-download"></i>
            </span> @lang('message.trader_sub')
        </h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <p class="card-title text-center">@lang('message.our_supported_platforms')</p>

                    </div>
                    <div class=" d-flex justify-content-around mb-4">
                        <a class="btn btn-outline-dark btn-icon-text" href="https://web.monetamarket.net" target="_blank">
                            <i class="mdi mdi-laptop-windows btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-left">
                                <small class="font-weight-light d-block">@lang('message.launch')</small> @lang('message._webtd') </span>
                        </a>
                        <a class="btn btn-outline-dark btn-icon-text" href="https://play.google.com/store/apps/details?id=com.mtrader7.terminal" target="blank">
                            <i class="mdi mdi-android btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-left">
                                <small class="font-weight-light d-block">@lang('message.get_')</small> @lang('message._google_play') </span>
                        </a>
                        <a class="btn btn-outline-dark btn-icon-text" href="https://apps.apple.com/app/mobiustrader-7/id1355359598" target="_blank">
                            <i class="mdi mdi-apple btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-left">
                                <small class="font-weight-light d-block">@lang('message.available_')</small> @lang('message._app_store') </span>
                        </a>
                    </div>
                    <div class=" d-flex justify-content-around">
                        <a class="btn btn-outline-dark btn-icon-text" href="https://mobius-trader.s3.eu-north-1.amazonaws.com/MonetaMarket/MonetaMarket-Mobius.win.exe">
                            <i class="mdi mdi-microsoft btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-left">
                                <small class="font-weight-light d-block">@lang('message.Down_w')</small> @lang('message._windows') </span>
                        </a>
                        <a class="btn btn-outline-dark btn-icon-text" href="https://mobius-trader.s3.eu-north-1.amazonaws.com/MonetaMarket/MonetaMarket-Mobius.mac.dmg">
                            <i class="mdi mdi-laptop-mac btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-left">
                                <small class="font-weight-light d-block">@lang('message.down_m')</small> @lang('message._mac') </span>
                        </a>
                        <a class="btn btn-outline-dark btn-icon-text" href="https://mobius-trader.s3.eu-north-1.amazonaws.com/MonetaMarket/MonetaMarket-Mobius.linux.AppImage">
                            <i class="mdi mdi-apple btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-left">
                                <small class="font-weight-light d-block">@lang('message.down_l')</small> @lang('message._linux') </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
