<section>
    <header class="mb-4">
        <h2 class="text-lg font-medium">{{ __('Update Password') }}</h2>
        <p class="mt-1 text-sm">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <div class="form-control">
            <label class="label" for="update_password_current_password"><span class="label-text">@lang('Current Password')</span></label>
            <input id="update_password_current_password" name="current_password" type="password" class="input input-bordered" autocomplete="current-password" />
            @if($errors->updatePassword->has('current_password'))
                <p class="text-error text-sm mt-1">{{ $errors->updatePassword->first('current_password') }}</p>
            @endif
        </div>

        <div class="form-control">
            <label class="label" for="update_password_password"><span class="label-text">@lang('New Password')</span></label>
            <input id="update_password_password" name="password" type="password" class="input input-bordered" autocomplete="new-password" />
            @if($errors->updatePassword->has('password'))
                <p class="text-error text-sm mt-1">{{ $errors->updatePassword->first('password') }}</p>
            @endif
        </div>

        <div class="form-control">
            <label class="label" for="update_password_password_confirmation"><span class="label-text">@lang('Confirm Password')</span></label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="input input-bordered" autocomplete="new-password" />
            @if($errors->updatePassword->has('password_confirmation'))
                <p class="text-error text-sm mt-1">{{ $errors->updatePassword->first('password_confirmation') }}</p>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">{{ __('Save') }}</button>
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
