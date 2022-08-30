<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('admin.stock.index',['stocks'=> $stocks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock();
        $stock->title= $request->title;
        $stock->discount= $request->discount;
        $stock->description= $request->descr;
        $stock->date_start = $request->data_st;
        $stock->date_end = $request->data_end;
        $stock->photo= "../images/".$_FILES['img']['name'];

        if (!empty($_FILES)){
            move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$_FILES['img']['name']);

        }
        $stock->save();
        return Redirect()->route('stock.index')->withSuccess("Статя была успешно добавленна!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        return view('admin.stock.edit',['stock'=> $stock]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        $stock->title= $request->title;
        $stock->discount= $request->discount;
        $stock->description= $request->descr;
        $stock->date_start = $request->data_st;
        $stock->date_end = $request->data_end;

        $stock->photo= "../images/".$_FILES['imgRed']['name'];

        if (!empty($_FILES)){
            move_uploaded_file($_FILES['imgRed']['tmp_name'],'images/'.$_FILES['imgRed']['name']);

        }
        if (!empty($_FILES['imgRed']['name']=="")){
            $work->photo = $request->imgHidden;

        }

       

        
        $stock->save();
        return Redirect()->route('stock.index')->withSuccess("Статя была успешно добавленна!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stock.index')->withSuccess('Статья была успешно удалена');
    }
}
