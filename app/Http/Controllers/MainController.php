<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use App\Models\Reviews;
use App\Models\Works;
use App\Models\Contacts;
use App\Models\Price;
use App\Models\Services;
use App\Models\Masters;
use App\Models\Freeplace;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $stock = Stock::all()->where('id','<',3);
        $contact = Contacts::find(1);
        $reviews = Reviews::orderBy('id','desc')->limit(4)->where('moder','=',1)->get();
        // dd($reviews);
        return view('home', compact('stock','reviews','contact'));
    }
       
    public function work(){
        $works = Works::orderBy('id')->limit(6)->get();
        $works->reverse(); 
        // dd(gettype($works));
        $contact = Contacts::find(1);
        return view('works', compact('works','contact'));
    }

    public function stock(){
        $stock = Stock::all();
        $contact = Contacts::find(1);
        return view('stocks',compact('stock','contact'));
    }
    public function contact(){
        $contact = Contacts::all();
        return view('contacts',compact('contact'));
    }
    public function about(){
        $contact = Contacts::all();
        return view('about',compact('contact'));
    }
    public function price(){
        $contact = Contacts::all();
        $price = Price::all();
        $typeSer = Services::all();
        return view('price',compact('contact','price','typeSer'));
    }


    public function addRewiews(Request $request){
        $request->validate([
            'name'  => 'required',
            'description'   => 'required',
            'avatar' => 'required',
        ]);
        $new_reviews = new Reviews();
       $new_reviews->name = $request->name;
       $new_reviews->description = $request->text;
       $new_reviews->avatar = $request->avatar;
       $new_reviews->date = date("d.m.y");
       $new_reviews->moder = 0;
       $new_reviews->save();
       return redirect()->back()->with('success','Ваш отзыв принят в обработку');;
    }




    public function adminPanel(){
        if(auth()->user()->role == 1){
           
         $stock_count = Stock::all() -> count();
        $works_count = Works::all() -> count();
        $masters_count = Masters::all() -> count();
        $freeplace_count = Freeplace::all() -> count();
        return view('admin.home.index', compact('stock_count','works_count','masters_count','freeplace_count'));

         }
         else{
             return redirect()->route('home');
         }
       
    }


    public function login_admin(Request $request)
    {
        $input= $request->all();
        $this->validate($request,[
            'login' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array(
            'name' => $input['login'],
            'password' => $input['password'],
        ))){
            if(auth()->user()->role == 1){
                return redirect()->route('adminIndex');
            }
            else{
                return redirect()->route('home');
            }
        }
        else{
            return redirect()->route('login')->with('error','Логин или пароль не верны');
        }
    }
    public function login()
    {
       return view('login');
    }
    public function adminIndex()
    {
        
    }
}

