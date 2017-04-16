<?php

namespace App\Http\Controllers;

use App\User;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $appointments = Appointment::with('user')->paginate(5);

      return view('appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointment.create');
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
          'app_type' => 'required',
          'app_date' => 'required',
          'app_time' => 'required',
      ]);

      $appointment = new Appointment;
      //$application->name = $request->name;
      $appointment->app_type = $request->app_type;
      $appointment->app_date = $request->app_date;
      $appointment->app_time = $request->app_time;
      $appointment->user_id = Auth::user()->id;

      $appointment->save();

      return redirect()->action('AppointmentController@store')->withMessage('Appointment has been successfully recorded!');
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
      $appointment = Appointment::findOrFail($id);
      return view('appointment.edit', compact('appointment'));
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
          'app_type' => 'required',
          'app_date' => 'required',
          'app_time' => 'required',
      ]);

      $appointment = Appointment::findOrFail($id);
      $appointment->app_type = $request->app_type;
      $appointment->app_date = $request->app_date;
      $appointment->app_time = $request->app_time;

      //$appointment->user_id = Auth::user()->id;
      $appointment->save();

      return redirect()->action('AppointmentController@index')->withMessage('Appointment has been successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $appointment = Appointment::findOrFail($id);
      $appointment->delete();
      return back()->withError('Appointment has been successfully canceled!');
    }
}
