<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label for="firstName" :value="__('First Name')" />
            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="firstName" />
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="lastName" :value="__('Last Name')" />
            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autocomplete="lastName" />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="genre" :value="__('Genre')" />
            <select id="genre" name="genre" class="block mt-1 w-full" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <select id="role" name="role" class="block mt-1 w-full" required onchange="toggleAdditionalFields()">
                <option value="">Select Role</option>
                <option value="doctor">Doctor</option>
                <option value="patient">Patient</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Additional Fields for Patient -->
        <div id="additionalFields" style="display: none;">
            <!-- CIN -->
            <div class="mt-4">
                <x-input-label for="CIN" :value="__('CIN')" />
                <x-text-input id="CIN" class="block mt-1 w-full" type="text" name="CIN" :value="old('CIN')" autocomplete="CIN" />
                <x-input-error :messages="$errors->get('CIN')" class="mt-2" />
            </div>


            <!-- Address -->
            <div class="mt-4">
                <x-input-label for="Address" :value="__('Address')" />
                <x-text-input id="Address" class="block mt-1 w-full" type="text" name="Address" :value="old('Address')" autocomplete="Address" />
                <x-input-error :messages="$errors->get('Address')" class="mt-2" />
            </div>

            <!-- Photo -->
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script>
    function toggleAdditionalFields() {
        var roleSelect = document.getElementById('role');
        var additionalFields = document.getElementById('additionalFields');

        if (roleSelect.value === 'patient') {
            additionalFields.style.display = 'block';
        } else {
            additionalFields.style.display = 'none';
        }
    }

    // Initial check on page load
    toggleAdditionalFields();
</script>
