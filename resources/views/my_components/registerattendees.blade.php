<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Register attendees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form class="container-fluid p-3" action="{{ route('attendees.store', $event->id ) }}" method="POST">
                    @csrf
                    @method("PUT")

                    <div class="row p-0 m-0 justify-content-between align-items-center">

                        <div class="col-5">
                            <label class="form-label">Users to register:</label>
                            <select class="form-select w-100" aria-label="Default select example" name="attendees">

                                @foreach($users as $user)

                                    <option value="{{$user->id}}">{{$user->name}}</option>

                                @endforeach

                            </select>
                            <p class="fst-italic text-center">Hold Ctrl to select more than one user</p>
                        </div>

                        <div class="col-5 text-center">
                            <input type="text" value="{{$event->title}}" disabled>
                        </div>

                    </div>

                    <div class="row p-0 m-0 justify-content-center">
                        <div class="col-2 pt-4">
                            <button class="btn btn-success w-100">Register</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

</x-app-layout>