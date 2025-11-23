<x-guest-layout>
    <div class="card w-96 bg-base-100 shadow mx-auto mt-6">
        <div class="card-body space-y-3">
            <h2 class="text-xl font-bold">@lang('Verify Email')</h2>
            <p class="text-sm">{{ __('Please verify your email address by clicking the link we sent. If you did not receive it, you can request another.') }}</p>
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success">{{ __('A new verification link has been sent to your email address.') }}</div>
            @endif
            <form method="POST" action="{{ route('verification.send') }}" class="text-right">
                @csrf
                <button class="btn btn-primary">{{ __('Resend Verification Email') }}</button>
            </form>
            <form method="POST" action="{{ route('logout') }}" class="text-right">
                @csrf
                <button type="submit" class="btn btn-ghost btn-sm">{{ __('Log Out') }}</button>
            </form>
        </div>
    </div>
</x-guest-layout>
