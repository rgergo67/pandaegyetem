<x-prose-layout>

    @if ($errors->any())
        <div>
            <div class="font-medium text-red-600">
                {{ __('validation.error') }}
            </div>

            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" value="Jelszó" />

            <div class="mt-1 relative rounded-md shadow-sm">
                <x-input id="password" class="block mt-1 w-full pr-12"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                <div class="absolute inset-y-0 right-0 flex items-center top-0 py-2 pr-4 cursor-pointer" onclick="document.getElementById('show-password-icon').classList.toggle('hidden');document.getElementById('hide-password-icon').classList.toggle('hidden');document.getElementById('password').type=document.getElementById('password').type==='password'?'text':'password';">
                    <svg aria-hidden="true" class="w-6 text-gray-600 hover:text-gray-900" id="show-password-icon" data-prefix="far" data-icon="eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M288 144a110.94 110.94 0 00-31.24 5 55.4 55.4 0 017.24 27 56 56 0 01-56 56 55.4 55.4 0 01-27-7.24A111.71 111.71 0 10288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 000 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 000-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"/></svg>
                    <svg aria-hidden="true" class="w-6 text-gray-600 hover:text-gray-900 hidden" id="hide-password-icon" data-prefix="far" data-icon="eye-slash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M634 471L36 3.51A16 16 0 0013.51 6l-10 12.49A16 16 0 006 41l598 467.49a16 16 0 0022.49-2.49l10-12.49A16 16 0 00634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 00-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0023.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 01-44 60.2l37.74 29.5a333.7 333.7 0 0052.9-75.11 32.35 32.35 0 000-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0144.05-60.19l-37.74-29.5a333.6 333.6 0 00-52.89 75.1 32.35 32.35 0 000 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"/></svg>
                </div>
            </div>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">Emlékezz rám</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="btn bg-green-700">Belépés</button>
        </div>
    </form>
</x-prose-layout>
