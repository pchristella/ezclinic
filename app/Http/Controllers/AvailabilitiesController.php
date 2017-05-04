<?php

namespace App\Http\Controllers;

use App\User;
use App\Availability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvailabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $availabilities = Availability::with('user')->paginate(5);

      return view('availability.index', compact('availabilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('availability.create');
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
          'date' => 'required',
          'starttime' => 'required',
          'endtime' => 'required',
      ]);

      $availability = new Availability;
      //$application->name = $request->name;
      $availability->date = $request->date;
      $availability->starttime = $request->starttime;
      $availability->endtime = $request->endtime;
      $availability->status = $request->status;
      $availability->user_id = Auth::user()->id;

      $availability->save();

      return redirect()->action('AvailabilitiesController@store')->withMessage('Availability has been successfully recorded!');
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
      $availability = Availability::findOrFail($id);
      return view('availability.edit', compact('availability'));
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
      $availability = Availability::findOrFail($id);
      $availability->date = $request->date;
      $availability->starttime = $request->starttime;
      $availability->endtime = $request->endtime;
      $availability->status = $request->status;

      //$appointment->user_id = Auth::user()->id;
      $availability->save();

      return redirect()->action('AvailabilitiesController@index')->withMessage('Availability has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $availability = Availability::findOrFail($id);
      $availability->delete();
      return back()->withError('Availability has been successfully canceled!');
    }

    public function availabilityUser()
    {
      $availabilities = Availability::with('user')->paginate(5);

      return view('appointment.index', compact('availabilities'));
    }
}
