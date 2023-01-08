<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::all();
        // dd($data);
        return view('monitoring',compact('data'));
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function insert(Request $request)    
    {
        // dd($request->all());
        $data = Project::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotoleader/', $request->file('image')->getClientOriginalName());
             $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
       Project::create($request->all());
       $request->validate([
     'image' => 'required|image|max:2048',
    ]);
    return redirect()->route('project');

    $request->validate([
        'progres' => 'required|numeric|min:0|max:100',
    ]);

    $progres = $request->input('progres');
    $project = Project::find($progres); // Ambil data project dari database
    $project->progres = $progres; // Update nilai progress
    $project->save(); // Simpan perubahan ke database

    return redirect()->back()->with('success', 'Progress berhasil diperbarui!');
}
    public function tampilkandata($id){
        $data =Project::find($id);

        if ($data === null) {
            // $data diinisialisasi dengan instance dari kelas Project dengan properti-properti default
            $data = new Project;
        }
        return view('tampilkandata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = project::find($id);
        $data->update($request->all());
        return redirect()->route('project');
    }
    
    public function delete($id){
    $data = project::find($id);
    $data->delete();
    return redirect()->route('project');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('images');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
