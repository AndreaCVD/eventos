<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use App\Models\UserEventAttendee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        // $events = DB::table('events')->get();

        $events = Event::all();

        $users = User::all();

        return view('my_components.index', ['events' => $events, 'users' => $users]);
    }

    public function myIndex(){
        $events = Event::where('user_id', Auth::user()->id)->get();
        
        // dd($events);

        return view('my_components.myevents', ['events' => $events]);
    }

    public function create(){
        return view('my_components.create');
    }

    public function store(Request $request){

        // dd(Auth::user()->id);
        $event = new Event();

        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->date = $request->get('date');
        $event->user_id = Auth::user()->id;

        $event->save();

        return redirect('/dashboard');
    }

    public function show($id){

        $event = Event::find($id);
        // dd($event);

        $userOwner = $event->user_id;
        // dd($userOwner);

        $owner = User::find($userOwner);

        $users = User::all();

        $participants = UserEventAttendee::where('event_id', $id)->get();

        return view('my_components.show', ['event' => $event, 'owner' => $owner, 'participants' => $participants, 'users' => $users]);

    }

    public function edit($id){
        $event = Event::find($id);

        $userOwner = $event->user_id;
        // dd($userOwner);

        $owner = User::find($userOwner);

        return view('my_components.edit', ['event' => $event, 'owner' => $owner]);
    }

    public function update(Request $request, int $id){
        // dd($request->get('location'));

        $event = Event::find($id);

        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->date = $request->get('date');

        $event->save();

        return redirect('events/myevents');
    }

    public function register($id){
        
        $event = Event::find($id);

        $users = User::all();


        return view('my_components.registerattendees', ['event' => $event, 'users' => $users]);
    }

    public function storeAttendee($idEvent, Request $request){
        // dd($request->get('attendees'));

        $model = new UserEventAttendee();

        $model->user_id = $request->get('attendees');
        $model->event_id = $idEvent;

        $model->save();

        return redirect('/dashboard');
    }
}
