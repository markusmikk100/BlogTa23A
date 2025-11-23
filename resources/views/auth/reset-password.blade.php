<x-guest-layout>
    <div class="card w-96 bg-base-100 shadow mx-auto mt-6">
        <div class="card-body text-base-content">
            <h2 class="text-xl font-bold mb-2">@lang('Reset Password')</h2>
            <form method="POST" action="{{ route('password.store') }}" class="space-y-3">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-control">
                    <label class="label" for="email"><span class="label-text">@lang('Email')</span></label>
                    <input id="email" type="email" name="email" class="input input-bordered" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
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
                <div class="text-right pt-2">
                    <button class="btn btn-primary">{{ __('Reset Password') }}</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
