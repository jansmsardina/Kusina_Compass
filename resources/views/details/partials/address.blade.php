<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Address') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('store.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="address" :value="__('Store Address')" />
            <x-text-input id="contact" name="contact" type="text" class="mt-1 block w-full" :value="old('opening_time', $storeUpdates->address)" required autofocus autocomplete="contact" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
        
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'store_address-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
