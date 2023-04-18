<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$event->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form class="container-fluid p-3"
                    action="{{route('store')}}" method="POST">

                    <div class="row p-0 m-0 justify-content-between">

                        <div class="form-floating mb-3 p-0">
                            <input type="text" class="form-control" id="floatingTitle" placeholder="input" name="title" disabled value="{{$event->location}}">
                            <label class="form-label" for="floatingTitle">Location:</label>
                        </div>

                        <div class="form-floating mb-3 p-0">
                            <input type="text" class="form-control" id="floatingTitle" placeholder="input" name="title" disabled value="{{$event->title}}">
                            <label class="form-label" for="floatingTitle">Event title:</label>
                        </div>

                        <div class="form-floating mb-3 p-0">
                            <textarea type="text" class="form-control" id="floatingDescription" placeholder="input" rows="3" name="description" disabled value="{{$event->description}}"></textarea>
                            <label class="form-label" for="floatingDescription">Description of the event:</label>
                        </div>

                        <div class="col-lg-5 form-floating mb-3 p-0">
                            <input type="text" class="form-control" id="floatingDate" placeholder="input" name="date" disabled value="{{$event->date}}">
                            <label class="form-label" for="floatingDate">Date of the event</label>
                        </div>

                        <div class="col-lg-5 form-floating mb-3 p-0">
                            <input type="text" class="form-control" id="floatingUser" disabled value="{{$owner->name}}">
                            <label class="form-label" for="floatingUser">Owner</label>
                        </div>
                    </div>

                    <div class="row mt-4 justify-content-center">
                        @csrf

                        @if($owner->id == Auth::user()->id)
                            <button href="" class="col-3 btn btn-light">Edit event</button>
                        @endif

                    </div>

                </form>

            </div>
        </div>
    </div>


</x-app-layout>