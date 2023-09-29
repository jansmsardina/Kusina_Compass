<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Store Photo') }}
        </h2>

        <div>
            @if($storeUpdates && $storeUpdates->photo)
                <img src="{{ asset('public/storage/Uploads/ProfileUploads/' . $storeUpdates->photo) }}" alt="Product Image" class="img-thumbnail" style="max-width: 100px;">
            @else
                <img src="{{ asset('public/storage/Uploads/ProfileUploads/default.jpg') }}" alt="Default Image" class="img-thumbnail" style="max-width: 100px;">
            @endif
        </div>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your store photo") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('store.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-text-input id="photo" name="photo" type="file" class="mt-1 block w-full" :value="old('photo', $storeUpdates ? $storeUpdates->photo : '')" required autofocus autocomplete="photo" />
            <x-input-error class="mt-2" :messages="$errors->get('photo')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'photo-updated')
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
