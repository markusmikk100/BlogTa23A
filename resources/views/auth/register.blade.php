@extends('partials.layout')
@section('title', 'Register')
@section('content')
    <div class="card w-96 bg-base-100 shadow mx-auto">
        <div class="card-body">
            <h2 class="text-xl font-bold mb-2">@lang('Register')</h2>
            <form method="POST" action="{{ route('register') }}" class="space-y-3">
                @csrf
                <div class="form-control">
                    <label class="label" for="name"><span class="label-text">@lang('Name')</span></label>
                    <input id="name" type="text" name="name" class="input input-bordered" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    @error('name')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="form-control">
                    <label class="label" for="email"><span class="label-text">@lang('Email')</span></label>
                    <input id="email" type="email" name="email" class="input input-bordered" value="{{ old('email') }}" required autocomplete="username" />
                    @error('email')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="form-control">
                    <label class="label" for="password"><span class="label-text">@lang('Password')</span></label>
                    <input id="password" type="password" name="password" class="input input-bordered" required autocomplete="new-password" />
                    @error('password')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="form-control">
                    <label class="label" for="password_confirmation"><span class="label-text">@lang('Confirm Password')</span></label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="input input-bordered" required autocomplete="new-password" />
                    @error('password_confirmation')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="flex items-center justify-between pt-2">
                    <a class="link" href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                    <button class="btn btn-primary">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
