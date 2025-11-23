<x-guest-layout>
    <div class="card w-96 bg-base-100 shadow mx-auto mt-6">
        <div class="card-body text-base-content">
            <h2 class="text-xl font-bold mb-2">@lang('Forgot Password')</h2>
            <p class="text-sm mb-3">{{ __('Forgot your password? Enter your email and we will send a reset link.') }}</p>
            @if (session('status'))
                <div class="alert alert-success mb-3">{{ session('status') }}</div>
            @endif
            <form method="POST" action="{{ route('password.email') }}" class="space-y-3">
                @csrf
                <div class="form-control">
                    <label class="label" for="email"><span class="label-text">@lang('Email')</span></label>
                    <input id="email" type="email" name="email" class="input input-bordered" value="{{ old('email') }}" required autofocus />
                    @error('email')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="text-right pt-2">
                    <button class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
