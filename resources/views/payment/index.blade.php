<x-prose-layout>
    <x-seo title="Megrendelés" />

    <x-validation-errors class="mb-4" />
    <form method="POST" action="{{ route('payment.store') }}">
        @csrf
        <h4 class="font-bold text-lg mb-2">Számlázási adatok</h4>

        <div class="space-y-4">
            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                * <x-label for="email" value="E-mail (ide küldjük a könyvet)" />

                <x-input id="email" class="block mt-1 w-full"
                         type="text"
                         name="email"
                         :value="old('email')" />
            </div>

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                * <x-label for="billing_name" value="Számlázási név" />

                <x-input id="billing_name" class="block mt-1 w-full"
                         type="text"
                         name="billing_name"
                        :value="old('billing_name')" />
            </div>

            <!-- ZIP  -->
            <div class="col-span-6 sm:col-span-4">
                * <x-label for="billing_zip" value="Irányítószám" />

                <x-input id="billing_zip" class="block mt-1 w-full"
                         type="text"
                         name="billing_zip"
                         :value="old('billing_zip')" />
            </div>

            <!-- City  -->
            <div class="col-span-6 sm:col-span-4">
                * <x-label for="billing_city" value="Város" />

                <x-input id="billing_city" class="block mt-1 w-full"
                         type="text"
                         name="billing_city"
                         :value="old('billing_city')" />
            </div>

            <!-- Address  -->
            <div class="col-span-6 sm:col-span-4">
                * <x-label for="billing_address" value="Cím" />

                <x-input id="billing_address" class="block mt-1 w-full"
                         type="text"
                         name="billing_address"
                         :value="old('billing_address')" />
            </div>

            <!-- Tax number -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="billing_tax_number" value="Adószám (cég esetén)" />

                <x-input id="billing_tax_number" class="block mt-1 w-full"
                         type="text"
                         name="billing_tax_number"
                         :value="old('billing_address')" />
            </div>

            <div class="mt-4">
                <label>
                    <input type="checkbox" name="terms" class="h-4 w-4 text-indigo-600 border-gray-300 rounded mr-1" />
                    Elfogadom az <x-a href="{{ route('aszf') }}" target="_blank">ASZF-et és az adatkezelési tájékoztatót</x-a>.
                </label>
            </div>
            <button class="bg-green-500 mt-2 w-full justify-center btn" id="purchase_button">{{ config('pandaegyetem.price') }} Ft Fizetése bankkártyával</button>
            <p class="italic">Sikeres fizetés esetén a könyvet automatikusan elküldjük neked e-mailben. Amennyiben valami probléma merülne fel, a {{ config('mail.reply_to.address') }} címen tudsz segítséget kérni.</p>
            <div class="flex justify-center">
                <img src="{{ asset('images/barion.png') }}" />
            </div>
        </div>
    </form>
</x-prose-layout>
