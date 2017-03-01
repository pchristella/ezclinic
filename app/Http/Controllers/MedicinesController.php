<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $medicines = Medicine::with('user')->paginate(5);
     return view('medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.create');
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
          'desc' => 'required',
      ]);

      $medicine = new Medicine;
      $medicine->desc = $request->desc;
      $medicine->user_id = Auth::user()->id;
      $medicine->save();

      return redirect()->action('MedicinesController@store')->withMessage('Medicine has been successfully added');
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
      $medicine = Medicine::findOrFail($id);
     return view('medicine.edit', compact('medicine'));
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
          'desc' => 'required',
      ]);

      $medicine = Medicine::findOrFail($id);
      $medicine->desc = $request->desc;
      $medicine->save();

      return redirect()->action('MedicinesController@index')->withMessage('Post has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $medicine = Medicine::findOrFail($id);
      $medicine->delete();
      return back()->withError('Post has been successfully deleted');
    }
}
