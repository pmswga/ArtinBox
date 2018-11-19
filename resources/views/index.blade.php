@extends('layouts.app')

@section('content')

    <div class="ui internally stackable grid">
        <div class="row">
            <div class="two wide column"></div>
            @auth
                <div class="twelve wide column">
            @else
                <div class="eight wide column">
            @endauth
                <fieldset class="ui segment">
                    <legend><h3>Новости</h3></legend>
                    <div class="ui styled accordion" style="width: 100%">
                        <div class="title">
                            15.11.2018
                        </div>
                        <div class="content">
                            Content
                        </div>
                    </div>
                    <div class="ui styled accordion" style="width: 100%">
                        <div class="title">
                            15.11.2018
                        </div>
                        <div class="content">
                            Content
                        </div>
                    </div>
                    <div class="ui styled accordion" style="width: 100%">
                        <div class="title">
                            15.11.2018
                        </div>
                        <div class="content">
                            Content
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="four wide column">
                @guest
                    <fieldset class="ui segment">
                        <legend><h3>Войти</h3></legend>
                        <form class="ui form" method="POST" action="{{ route('login') }}">
                            <meta name="csrf-token" content="{{ csrf_token() }}">

                            <div class="field">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <button type="submit" class="ui primary button">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </form>
                    </fieldset>
                @endguest
            </div>
        </div>
    </div>

@endsection