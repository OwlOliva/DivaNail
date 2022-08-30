<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Works;
use Illuminate\Http\Request;


class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Works::all();
        return view('admin.works.index',['works'=>$works]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Works();

        $work->img = "../images/gallery/".$_FILES['img']['name'];

        if (!empty($_FILES)){
            move_uploaded_file($_FILES['img']['tmp_name'],'../images/gallary/'.$_FILES['img']['name']);

        }
        $work->save();
        return Redirect()->back()->withSuccess("Статя была успешно добавленна!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function show(Works $works)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function edit(Works $work)
    {
        return view('admin.works.edit',['work'=>$work,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Works $work)
    {
     
        $work->img = "../images/gallary/".$_FILES['imgRed']['name'];

        if (!empty($_FILES)){
            move_uploaded_file($_FILES['imgRed']['tmp_name'],'images/gallary/'.$_FILES['imgRed']['name']);

        }
        if (!empty($_FILES['imgRed']['name']=="")){
            $work->img = $request->imgHidden;

        }
        $work->save();
        return Redirect()->back()->withSuccess("Статя была успешно обнавленна!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function destroy(Works $work)
    {
        $work->delete();
        return redirect()->back()->withSuccess('Статья была успешно удалена');
    }
}
