@extends('layouts.user')

@section('title', 'My Profile')

@section('content')

    @if (Session::has('message'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>
                    <p class="alert-message">{{ Session::get('message') }}</p>
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
                <i class="mdi mdi-account-settings"></i>
            </span> Profile
        </h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Profile Information</h4>
                    <form class="form-sample" action="{{ route('userprofile') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">@lang('message.first_name')</label>
                                    <input class="form-control" id="first_name" type="text" name="first_name"
                                        placeholder="@lang('message.first_name')" value="{{ Auth::user()->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">@lang('message.last_name')</label>
                                    <input class="form-control" id="last_name" type="text" name="last_name"
                                        placeholder="@lang('message.last_name')" value="{{ Auth::user()->last_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">@lang('message.body.email') </label>
                                    <input class="form-control" id="email" type="text" name="email"
                                        placeholder="@lang('message.body.enter_email')" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">@lang('message.dob')</label>
                                    <input class="form-control" id="dob" type="date" name="dob"
                                        placeholder="@lang('message.dob')" value="{{ Auth::user()->dob }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">@lang('message.body.phone')</label>
                                    <input class="form-control" id="phone" type="text" name="phone"
                                        placeholder="@lang('message.body.enter_phone')" value="{{ Auth::user()->phone }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postal-code">@lang('message.body.zip') /
                                        @lang('message.postal_code')</label>
                                    <input class="form-control" id="postal-code" type="text" placeholder="Zip Code"
                                        name="zip_code" value="{{ Auth::user()->zip_code }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">@lang('message.register.country')</label>
                                    <select name="country" id="country" class="form-control country-select" required>
                                        <option>@lang('message.register.chs')</option>
                                        @foreach ($countries as $country)
                                            <option @if (Auth::user()->country_id == $country->id || Auth::user()->country_id == $country->name) selected @endif
                                                value="{{ $country->id }}">
                                                {{ ucfirst($country->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">@lang('message.address')</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ Auth::user()->address }}" id="address"
                                        placeholder="@lang('message.address')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">@lang('message.register.state')</label>
                                    <input type="text" class="form-control" name="state"
                                        value="{{ Auth::user()->state }}" id="state"
                                        placeholder="@lang('message.register.enter_stt')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">@lang('message.body.city')</label>
                                    <input type="text" class="form-control" name="town"
                                        value="{{ Auth::user()->town }}" id="town"
                                        placeholder="@lang('message.register.town')">
                                </div>
                            </div>
                        </div>
                        <a type="submit" class="btn btn-gradient-primary me-2">@lang('message.body.submit')</a>
                        <a type="submit" class="btn btn-gradient-success me-2" href="{{ route('changepassword') }}">@lang('message.topmenu.chg_pss')</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
