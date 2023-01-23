@extends('index')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />
@endpush
@section('content')
    <div class="ctn">
        <div class="login">
            <h1><a href="/">NVN</a></h1>
            <form method="post" action="{{route('user.regist')}}">
                @csrf
                <div class="nf-group">
                    <label for="">Email</label>
                    <input class="nf-input @error('email') invalid @enderror" type="text" name="email" autocomplete="off" value="{{old('email')}}">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="nf-group">
                    <label for="">{{__('buttons.username')}}</label>
                    <input class="nf-input @error('username') invalid @enderror" type="text" name="username" autocomplete="off" value="{{old('username')}}">
                </div>
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="nf-group">
                    <label for="">{{__('buttons.password')}}</label>
                    <input class="nf-input @error('password') invalid @enderror" type="password" name="password" autocomplete="off">
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="nf-group">
                    <button class="nf-submit">{{__('buttons.register')}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection