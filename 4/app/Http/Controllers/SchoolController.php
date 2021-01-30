<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScoolTb;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $school =ScoolTb::orderBy('id','DESC')->get();

        return view('sc.index', compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',

        $sc = new ScoolTb;
        $sc->npsn = $request->npsn;
        $sc->name_school = $request->name;
        $sc->address = $request->address;
        $sc->logo_school= "https://ui-avatars.com/api/?name=".$request->name;
        $sc->school_level= $request->level;
        $sc->status_school=$request->status;
        $sc->user_id=1;
        $sc->save();

        // if ($sc) {
        //     return redirect()->route('sc.index')
        //     ->with('success', 'Berhasil Di Buat.');
        // }

        return redirect()->route('school.index')
        ->with('success', 'Berhasil Di Buat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = ScoolTb::findOrFail($id);
        return view('sc.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    $school = ScoolTb::findOrFail($id);
        return view('sc.edit', compact('school'));

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
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);
        $sc = ScoolTb::findOrFail($id);
        $sc->npsn = $request->npsn;
        $sc->name_school = $request->name;
        $sc->address = $request->address;
        $sc->logo_school = "https://ui-avatars.com/api/?name=" . $request->name;
        $sc->school_level = $request->level;
        $sc->status_school = $request->status;
        $sc->save();

        // return redirect()->route('school.index')
        //                 ->with('success','Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = ScoolTb::findOrFail($id);
        $school->delete();

        return redirect()->route('school.index')
        ->with('success',  'Berhasil Di Hapus');
    }
}
