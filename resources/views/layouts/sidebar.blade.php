<x-public-layout>
    <div class="min-h-screen bg-gray-100">
        <x-public-navigation />

        <main>
            <div class="max-w-7xl mx-auto flex flex-wrap py-6">
                <section class="w-full lg:w-2/3 flex flex-col items-center px-3">
                    {{ $slot }}
                </section>
                <aside class="w-full lg:w-1/3 flex flex-col items-center px-3">
                    <x-sidebar.jobb-jegyek />
                    <x-sidebar.beosztom />
                </aside>
            </div>
        </main>

        <x-footer />
    </div>
</x-public-layout>
