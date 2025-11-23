<x-guest-layout>
    <div class="card w-96 bg-base-100 shadow mx-auto mt-6">
        <div class="card-body">
            <h2 class="text-xl font-bold mb-2">@lang('Confirm Password')</h2>
            <p class="text-sm mb-3">{{ __('Please confirm your password before continuing.') }}</p>
            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-3">
                @csrf
                <div class="form-control">
                    <label class="label" for="password"><span class="label-text">@lang('Password')</span></label>
                    <input id="password" type="password" name="password" class="input input-bordered" required autocomplete="current-password" />
                    @error('password')<p class="text-error text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="text-right pt-2">
                    <button class="btn btn-primary">{{ __('Confirm') }}</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
