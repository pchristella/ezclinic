<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::with('user')->paginate(5);

      return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'img' => 'required',
          'title' => 'required',
          'content' => 'required',
          'eventdate' => 'required',
          'eventtime' => 'required',
      ]);

      $event = new Event;
      $event->img = $request->img;
      $event->title = $request->title;
      $event->content = $request->content;
      $event->eventdate = $request->eventdate;
      $event->eventtime = $request->eventtime;
      $event->user_id = Auth::user()->id;
      $event->save();

      return redirect()->action('EventsController@store')->withMessage('Event has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $event= Event::findOrFail($id);
      return view('event.edit', compact('events'));
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
      $this->validate($request, [
        'img' => 'required',
        'title' => 'required',
        'content' => 'required',
        'eventdate' => 'required',
        'eventtime' => 'required',
      ]);

      $event = Event::findOrFail($id);
      $event->img = $request->img;
      $event->title = $request->title;
      $event->content = $request->content;
      $event->eventdate = $request->eventdate;
      $event->eventtime = $request->eventtime;

      $event->save();

      return redirect()->action('EventsController@index')->withMessage('Disease has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $event = Event::findOrFail($id);
      $event->delete();
      return back()->withError('Event has been successfully deleted');
    }
}
