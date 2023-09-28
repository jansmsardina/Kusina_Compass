<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Store Address') }}
        </h2>

    
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('address.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="opening_time" :value="__('Store address')" />
            <x-text-input id="opening_time" name="opening_time" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'address-updated')
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
