<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold">{{ __('Dashboard') }}</h2>
    </x-slot>

    <div class="max-w-md mx-auto my-6">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <p>{{ ("You're logged in!") }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
