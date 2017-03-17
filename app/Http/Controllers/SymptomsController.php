<?php

namespace App\Http\Controllers;

use App\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $symptoms = Symptom::with('user')->paginate(5);
      return view('symptom.index', compact('symptoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('symptom.create');
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
          'disease' => 'required',
      ]);

      $symptom = new Symptom;
      $symptom->disease = $request->disease;
      $symptom->user_id = Auth::user()->id;
      $symptom->save();

      return redirect()->action('SymptomsController@store')->withMessage('Post has been successfully added');
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
      $symptom = Symptom::findOrFail($id);
      return view('symptom.edit', compact('symptom'));
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
          'disease' => 'required',
      ]);

      $symptom = Symptom::findOrFail($id);
      $symptom->disease = $request->disease;
      $symptom->symptom = $request->symptom;
      $symptom->type = $request->type;
      $post->save();

      return redirect()->action('SymptomsController@index')->withMessage('Disease has been successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $symptom = Symptom::findOrFail($id);
      $symptom->delete();
      return back()->withError('Disease has been successfully deleted');

    }
}
