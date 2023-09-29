<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Contact Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your contact number.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('store.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="contact" :value="__('contact')" />
            <x-text-input id="contact" name="contact" type="text" class="mt-1 block w-full" :value="old('contact', $storeUpdates->contact)" required autofocus autocomplete="contact" />
            <x-input-error class="mt-2" :messages="$errors->get('contact')" />
        </div>
        
        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'contact_number-updated')
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
