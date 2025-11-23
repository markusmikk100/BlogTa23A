@extends('partials.layout')
@section('title', 'Login')
@section('content')
    @if (session('status'))
        <div class="alert alert-success mb-4">{{ session('status') }}</div>
    @endif
    <div class="card w-96 bg-base-100 shadow mx-auto">
        <div class="card-body">
            <h2 class="text-xl font-bold mb-2">@lang('Login')</h2>
            <form method="POST" action="{{ route('login') }}" class="space-y-3">
                @csrf
                <div class="form-control">
                    <label class="label" for="email"><span class="label-text">@lang('Email')</span></label>
                    <input id="email" type="email" name="email" class="input input-bordered" value="{{ old('email') }}" required autofocus autocomplete="username" />
                    @error('email')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="form-control">
                    <label class="label" for="password"><span class="label-text">@lang('Password')</span></label>
                    <input id="password" type="password" name="password" class="input input-bordered" required autocomplete="current-password" />
                    @error('password')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="flex items-center gap-2 mt-2">
                    <label class="cursor-pointer flex items-center gap-2">
                        <input name="remember" type="checkbox" class="checkbox checkbox-sm" />
                        <span>@lang('Remember me')</span>
                    </label>
                </div>
                <div class="flex items-center justify-between pt-2">
                    @if (Route::has('password.request'))
                        <a class="link" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                    @endif
                    <button class="btn btn-primary">{{ __('Log in') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
