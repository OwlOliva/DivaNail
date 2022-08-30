<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masters;
use Illuminate\Http\Request;

class MastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Masters::orderBy('id')->get();
        
        return view('admin.masters.index',['masters'=>$masters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.masters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_master = new Masters();
        $new_master -> name = $request -> name;
        $new_master->photo = "../images/masters/".$_FILES['img']['name'];

        if (!empty($_FILES)){
            move_uploaded_file($_FILES['img']['tmp_name'],'images/masters/'.$_FILES['img']['name']);

        }
        $new_master -> save();

        return redirect() -> route('masters.index') -> withSuccess('Мастер был успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function show(Masters $masters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function edit(Masters $master)
    {
        return view('admin.masters.edit',['master'=>$master,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masters $master)
    {
        $master->name = $request -> name;
        $master->photo = "../images/masters/".$_FILES['imgRed']['name'];

        if (!empty($_FILES)){
            move_uploaded_file($_FILES['imgRed']['tmp_name'],'images/masters/'.$_FILES['imgRed']['name']);

        }
        if (!empty($_FILES['imgRed']['name']=="")){
            $master->phote = $request->imgHidden;

        }
        $master->save();
        return Redirect()->route('masters.index')->withSuccess("Запись была успешно обнавлена");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masters $master)
    {
        $master->delete();
        return redirect()->route('masters.index')->withSuccess('Мастер был успешно удален');
    }
}
