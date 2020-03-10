<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Attendee;

class ApiController extends Controller
{
    public function events() {
        $events = Event::with('sessions')->get();
        return $events;
    }
    public function registrations() {
        return 'click';
    }
    public function login(Request $request) {
        return $request;
    }
    public function profile(Request $request) {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'linkedin_url' => '',
            'photo' => ''
        ]);
        Attendee::create($data);
        return $request;
    }
}
