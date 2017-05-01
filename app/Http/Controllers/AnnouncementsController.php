<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $announcements = Announcement::with('user')->paginate(5);
      return view('announcement.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcement.create');
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
          'title' => 'required',
          'content' => 'required',

      ]);

      $announcement = new Announcement;
      $announcement->title = $request->title;
      $announcement->content = $request->content;
      //$symptom->type = $request->type;
      $announcement->user_id = Auth::user()->id;
      $announcement->save();

      return redirect()->action('AnnouncementsController@store')->withMessage('Announcement has been successfully added');
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
      $announcement = Announcement::findOrFail($id);
      return view('announcement.edit', compact('announcement'));
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
    
      $announcement = Announcement::findOrFail($id);
      $announcement->title = $request->title;
      $announcement->content = $request->content;
      //$symptom->type = $request->type;
      //$announcement->user_id = Auth::user()->id;
      $announcement->save();

      return redirect()->action('AnnouncementsController@index')->withMessage('Announcement has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $announcement = Announcement::findOrFail($id);
      $announcement->delete();
      return back()->withError('Announcement has been successfully deleted');
    }
}
