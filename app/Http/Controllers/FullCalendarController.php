<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Response, Redirect;

class FullCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id', 'title', 'start', 'end']);
            return Response::json($data);
        }
        return view('fullcalendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $insertArr = [
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end
        ];
        $event = Event::insert($insertArr);
        return Response::json($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title, 'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);

        return Response::json($event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // FIXME: ADD AUTHORIZATION, CRUCIAL
        // Attempt to destroy the requested Event from the database
        $event = Event::where('id', $request->id)->delete();
        if ($event) {
            return Response::json(sprintf('Event with id %u has been deleted succesfully.', $request->id), 200);
        }

        // We have failed to delete the resource
        return Response::json(sprintf('Event with id %u has NOT been deleted.', $request->id), 204);
    }
}
