<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;

use Calendar;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class EventController extends Controller
{
    public function index()
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $event = Event::all();
        return view('events')->with('events', $event);
    }

    public function store(Request $request)
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $this->allslots = array('Casual Package', 'Serious Package', 'Commited Package');

        $this->validate($request, [
            'title' => ['required', 'string', 'max:255', Rule::in($this->allslots)],
            'start' => 'required',
            'end' => 'required',
            'color' => 'required',
            'textColor' => 'required',
        ]);

        $event = new Event;
        $event->title = $request->input('title');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->user_id = auth()->user()->id;
        $event->color = $request->input('color');
        $event->textColor = $request->input('textColor');
        $event->save();

        return redirect('/events')->with('success', 'Reservation Created');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        if (Auth::user()->hasAnyRole('admin') || (auth()->user()->id === $event->user_id)) {
            return view('events')->with('events', $event);
        }
        return redirect('/events')->with('error', 'Unauthorized Page');
    }

    public function history()
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        if (Auth::user()->hasAnyRole('admin')) {
            $event = Event::all();
        } else {
            $event = Event::where('user_id', Auth::user()->id)->get();
        }

        return view('userhistory')->with('events', $event);
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        if (auth()->user()->id === $event->user_id || Auth::user()->hasAnyRole('admin')) {
            $event->delete();
            return redirect('/events')->with('success', 'Reservation Deleted');
        }

        return redirect('/events')->with('error', 'Unauthorized Page');
    }
}
