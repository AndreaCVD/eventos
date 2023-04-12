<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create new event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form class="container-fluid p-3"
                    action="{{route('store')}}" method="POST">

                    <div class="row p-0 m-0 justify-content-between">
                        <!-- Europe -->
                        <!-- Country names and Country Name -->
                        <select class="form-select mb-3 py-3" id="location" name="location">
                            <option value="" selected disabled>Location:</option>
                            <option value="Aland Islands">Aland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Austria">Austria</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Italy">Italy</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                            <option value="Malta">Malta</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Norway">Norway</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Romania">Romania</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Spain">Spain</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>

                        <div class="form-floating mb-3 p-0">
                            <input type="text" class="form-control" id="floatingTitle" placeholder="input" name="title">
                            <label class="form-label" for="floatingTitle">Event title:</label>
                        </div>

                        <div class="form-floating mb-3 p-0">
                            <textarea type="text" class="form-control" id="floatingDescription" placeholder="input" rows="3" name="description"></textarea>
                            <label class="form-label" for="floatingDescription">Description of the event:</label>
                        </div>

                        <div class="col-lg-5 form-floating mb-3 p-0">
                            <input type="date" class="form-control" id="floatingDate" placeholder="input" name="date">
                            <label class="form-label" for="floatingDate">Date of the event</label>
                        </div>

                        <div class="col-lg-5 form-floating mb-3 p-0">
                            <input type="text" class="form-control" id="floatingUser" disabled value="{{ Auth::user()->name }}">
                            <label class="form-label" for="floatingUser">Owner</label>
                        </div>
                    </div>

                    <div class="row mt-4 justify-content-center">
                        @csrf    
                        <button type="submit" class="col-3 btn btn-light">Create event</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</x-app-layout>