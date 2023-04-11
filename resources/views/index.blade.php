<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Eventos index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <table class="m-1 table table-hover">
                    <thead>
                        <tr>
                            <th>Title:</th>
                            <th>Author:</th>
                            <th>Description:</th>
                            <th>Location:</th>
                            <th>Date:</th>
                            <th>user_id:</th>
                            <th>created_at:</th>
                            <th>updated_at:</th>
                        </tr>
                    </thead>

                    @foreach($events as $event)
                    <tbody>
                        <tr>
                            <td>{{$event->id}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->location}}</td>
                            <td>{{$event->date}}</td>
                            <td>{{$event->user_id}}</td>
                            <td>{{$event->created_at}}</td>
                            <td>{{$event->updated_at}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>


            </div>
        </div>
    </div>

</x-app-layout>