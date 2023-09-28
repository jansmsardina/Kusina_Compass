<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Store Hours') }}
        </h2>
    </header>



    <form method="post" action="{{ route('hours.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="opening_time" :value="__('Opening Time')" />
            <x-text-input id="opening_time" name="opening_time" type="time" class="mt-1 block w-full" :value="old('opening_time', $user->opening_time)" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('opening_time')" />
        </div>
        
        <div>
            <x-input-label for="closing_time" :value="__('Closing Time')" />
            <x-text-input id="closing_time" name="closing_time" type="time" class="mt-1 block w-full" :value="old('closing_time', $user->closing_time)" required />
            <x-input-error class="mt-2" :messages="$errors->get('closing_time')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'hours-updated')
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
