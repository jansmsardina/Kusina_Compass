<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Contact Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Make sure to input your active contact number(s)") }}
        </p>
    </header>

    <form method="post" action="{{ route('details.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Contact Number Input -->
        <div>
            <x-input-label for="contact_numbers" :value="__('Contact Numbers')" />
            <input id="contact_numbers" name="contact_numbers" type="text" class="mt-1 block w-full" :value="old('contact_numbers', implode('/', $user->contact_numbers))" required autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('contact_numbers')" />
            <p class="text-sm text-gray-600">Separate multiple numbers with forward slashes (/).</p>
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
