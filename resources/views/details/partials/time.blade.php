<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Store Hours') }}
        </h2>
    </header>




    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('store.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="contact" :value="__('Opening Time')" />
            <x-text-input id="contact" name="contact" type="time" class="mt-1 block w-full" :value="old('opening_time', $storeUpdates->opening_time)" required autofocus autocomplete="contact" />
            <x-input-error class="mt-2" :messages="$errors->get('opening_time')" />
        </div>
        
        <div>
            <x-input-label for="contact" :value="__('Closing Time')" />
            <x-text-input id="contact" name="contact" type="time" class="mt-1 block w-full" :value="old('closing_time', $storeUpdates->closing_time)" required autofocus autocomplete="contact" />
            <x-input-error class="mt-2" :messages="$errors->get('closing_time')" />
        </div>
        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'store_hours-updated')
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
