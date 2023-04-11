<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        $events = DB::table('events')->get();

        return view('index', ['events' => $events]);
    }
}
