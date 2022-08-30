<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Masters;
use App\Models\Freeplace;
use App\Models\Services;
use App\Models\Price;
use App\Models\Recording;

class RecordController extends Controller
{

    public function index()
    {
        $service = Services::all()->where('id', '<', 3);
        $price = Price::all()->where('type_services', '<', 3);
        return view('record.service', compact('price'));
    }

    public function master(Request $request)
    {
        $request->validate([
            'serviceId'  => 'required',          
        ]);
        $masters = Masters::orderBy('id','desc')->get();
        $serv = $request->serviceId;
        return view('record.master', compact('masters', 'serv'));
    }

    public function dataRecode(Request $request)
    {
        $request->validate([
            'masterId'   => 'required',
        ]);
        $mast = $request->masterId;
        $freeplace = 0;

        if (isset($request->valueDay)) {
            $valueDay = $request->valueDay;
            $freeplace = Freeplace::where('day', '=', $valueDay)->where('id_master', '=', $mast)->get();
        }
        if ($request->ajax()) {
            return view('order-by', [
                'freeplace' => $freeplace
            ])->render();
        }
        $serv = $request->serviceId;
        if ($freeplace != null) {
            dd($freeplace);
        }
        return view('record.data', [
            'freeplace' => $freeplace,
            'serv' => $serv,
            'mast' => $mast,
        ]);
    }

    // public function dataR(){

    //     $valueDay = $request->valueDay;
    //     $freeplace= Freeplace::all()->where('day','=',$valueDay);
    //     return response()->json(['success'=>'Laravel ajax example is being processed.','freeplace'=>$freeplace]);
    // }

    public function recod(Request $request)
    {   $valueDay = $_POST['valueDay'];
        $mast = $_POST['master'];
        // dd($mast);
        // $valueDay = $request->valueDay;
        
        $freeplace = Freeplace::all()->where('day', '=', $valueDay)->where('id_master', '=', $mast);
        // $serv = $request->serviceId;
         return $freeplace ;
        //  response()->json(array('freeplace' => $freeplace), 200)
       // view('order-by', [
        //     'freeplace' => $freeplace,
        //     // 'serv' => $serv,
        //     // 'mast' => $mast,
        // ])->render();
        // response()->json(array('freeplace' => $freeplace), 200);
        // json(string|array $data = array(), int $status = 200, array $headers = array(), int $options)
        // view('record.data',compact('freeplace','serv','mast' ,'valueButton'));
    }

    public function recode(Request $request)
    {

        $mast = $request->masterId;
        $serv = $request->serviceId;
        $timeId = $request->timeId;
        $masters = Masters::find($mast);
        $service = Price::find($mast);
        $timee = Freeplace::find($timeId);
        return view('record.record', compact('masters', 'service', 'timee', 'serv', 'mast'));
    }

    public function recodeBase(Request $request)
    {
        $request->validate([
            'name_user'   => 'required',
            'tel_user'   => 'required',
            'tel_user'   => 'timeRec',
        ]);
        $mast = $request->masterId;
        $serv = $request->serviceId;
        $timeId = $request->timeId;

        $reco = new Recording();
        $reco->id_master = $mast;
        $reco->time = $request->timeRec;
        $reco->name_user = $request->name_user;
        $reco->tel_user = $request->tel;
        $reco->service=$request->serv;
        $reco->price=$request->pric;
        $reco->save();

        $food = Freeplace::find($timeId)->delete();
        return redirect()->route('home')->with('message','Вы были успешно записаны');
    }
}
