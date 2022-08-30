<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Freeplace;
use Illuminate\Http\Request;
use App\Models\Masters;

class FreeplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freeplace = Freeplace::orderBy('id')->get();        
        return view('admin.freeplace.index',compact("freeplace"));
        
        
        // dd(gettype($freeplace));
        // return view('admin.freeplace.index',['freeplace'=> $freeplace]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masters = Masters::all();
        return view('admin.freeplace.create',['masters'=> $masters,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frplace = new Freeplace();
        $frplace->id_master= $request->mast;
        $frplace->time = $request->time;
        $frplace->save();
        return Redirect()->route('freeplace.index')->withSuccess("Время было успешнно добавлено");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Freeplace  $freeplace
     * @return \Illuminate\Http\Response
     */
    public function show(Freeplace $freeplace)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Freeplace  $freeplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Freeplace $freeplace)
    {
        $masters = Masters::all();
        return view('admin.freeplace.edit',['masters'=> $masters,'freeplace'=> $freeplace]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Freeplace  $freeplace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freeplace $freeplace)
    {
        $freeplace->id_master= $request->mast;
        $freeplace->time = $request->time;
        $freeplace->save();
        return Redirect()->route('freeplace.index')->withSuccess("Время было успешнно добавлено");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Freeplace  $freeplace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freeplace $freeplace)
    {
        $freeplace->delete();
        return Redirect()->route('freeplace.index')->withSuccess("Время было успешнно добавлено");
    }
}
