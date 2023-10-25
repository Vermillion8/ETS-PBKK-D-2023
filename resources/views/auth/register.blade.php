<x-guest-layout>
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- SSN -->
    <div class="mt-4">
      <x-input-label for="ssn" :value="__('SSN')" />
      <x-text-input id="ssn" class="block mt-1 w-full" type="text" name="text" :value="old('ssn')" required autocomplete="ssn" />
      <x-input-error :messages="$errors->get('ssn')" class="mt-2" />
    </div>

    <!-- DOB -->
    <div class="mt-4">
      <x-input-label for="dob" :value="__('DOB')" />

      <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" required autocomplete="new-dob" />

      <x-input-error :messages="$errors->get('dob')" class="mt-2" />
    </div>

    <!-- Phone -->
    <div class="mt-4">
      <x-input-label for="phone" :value="__('Phone')" />
      <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
      <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>

    <!-- Specialty -->
    <div class="mt-4">
      <x-input-label for="specialty" :value="__('Specialty')" />
      <x-text-input id="specialty" class="block mt-1 w-full" type="text" name="specialty" :value="old('specialty')" required autocomplete="ssn" />
      <x-input-error :messages="$errors->get('specialty')" class="mt-2" />
    </div>



    <div class="flex items-center justify-end mt-4">
      <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
        {{ __('Already registered?') }}
      </a>

      <x-primary-button class="ml-4">
        {{ __('Register') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>