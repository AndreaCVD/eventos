<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        // $events = DB::table('events')->get();

        $events = Event::all();

        $users = User::all();

        return view('my_components.index', ['events' => $events, 'users' => $users]);
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

        return view('my_components.show', ['event' => $event, 'owner' => $owner]);

    }
}
