<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="container-fluid max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="pt-4 row justify-content-around">

                <a style="width: 120px; height:120px"
                    href="/events">
                    <button class=" w-100 h-100 btn btn-outline-dark">All Events</button>
                </a>

                <button class="btn btn-outline-dark" style="width: 120px; height:120px">
                    <a href="">My Events</a>
                </button>

                <button class="btn btn-outline-dark" style="width: 120px; height:120px">
                    <a href="">Create</a>
                </button>

            </div>

        </div>
    </div>

</x-app-layout>