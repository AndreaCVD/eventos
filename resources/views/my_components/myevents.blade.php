<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <table class="m-1 table table-hover">
                    <thead>
                        <tr>
                            <th>Title:</th>
                            <th>Location:</th>
                            <th>Date:</th>
                            <th>Owner:</th>
                            <th></th>

                        </tr>
                    </thead>

                    @foreach($events as $event)
                    <tbody>
                        <tr>
                            <td>{{$event->title}}</td>
                            <td>{{$event->location}}</td>
                            <td>{{$event->date}}</td>
                            <td>{{Auth::user()->name}}</td>


                            <td class="d-flex justify-content-end pe-4">
                                <a href="/events/{{$event->id}}">
                                    <button class="btn btn-primary">+Info</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>


            </div>
        </div>
    </div>

</x-app-layout>