<x-layouts.base>
    <x-navigation.navbar></x-navigation>
    <x-navigation.sidebar></x-navigation>
    <main class="lg:ml-72 h-auto pt-14 lg:pt-0">
        <div class="w-full px-6 py-6 mx-auto">
            {{ $slot }}
        </div>
    </main>

    {{-- <main class="ease-soft-in-out lg:ml-64 h-auto max-h-screen rounded-xl transition-all duration-200 ">
        <x-navigation.navbar></x-navigation>
        <div class="w-full px-6 py-6 mx-auto">
            {{ $slot }}
        </div>
    </main> --}}
</x-layouts>