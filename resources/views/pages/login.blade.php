@extends('index')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />
@endpush
@section('content')
    <div class="ctn">
        <div class="login">
            <h1><a href="/">NVN</a></h1>
            <form method="post" action="{{route('user.login')}}">
                @csrf
                <div class="nf-group">
                    <label for="">{{__('buttons.username')}}</label>
                    <input class="nf-input" type="text" name="username" autocomplete="off">
                </div>
                <div class="nf-group">
                    <label for="">{{__('buttons.password')}}</label>
                    <input class="nf-input" type="password" name="password" autocomplete="off">
                </div>
                <div class="login-bottom">
                    <a href="/register">{{__('buttons.create_account')}}</a>
                    <button class="nf-submit">{{__('buttons.lc_login')}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection