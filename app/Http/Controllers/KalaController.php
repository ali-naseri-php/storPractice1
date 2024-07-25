<?php

namespace App\Http\Controllers;

use App\Models\Kala;
use App\Models\Store;
use Illuminate\Http\Request;
class KalaController extends Controller
{
    public function index()
    {
        $kalas = Kala::all();


        return view('welcome', ['kalas' => $kalas]);

    }

    public function new()
    {
        return view('new-kala');

    }

    public function store(Request $request)
    {
        $file_name = time() . "." . $request->image->extension();
        $kala = new Kala();
        $kala->name = $request->name;
        $kala->price = $request->price;
        $kala->grouping = $request->grouping;
        $kala->images = $file_name;
        $kala->save();
        $request->image->move(public_path('images'), $file_name);
        return redirect('');


    }

    public function addKala(Request $request,Kala $kala,)
    {
//        dd($request->number);
        $store = new Store();
        $store->kala = $kala->id;
        $store->number=$request->number;
        $store->user = auth()->user()->id;
        $store->save();
        return redirect('');
    }

    public function user()
    {
        $kalas=Kala::join('stores','stores.kala','=','kalas.id')->where('stores.user','=',auth()->user()->id)->get();
//       dd($kalas);
        return view('dashboard',array('kalas'=>$kalas));

    }

    public function admin()
    {


        $kalas = Kala::all();
        return view('admin-kala', ['kalas' => $kalas]);

    }

    public function del(Kala $kala)
    {
        $kala->delete();
        return redirect('');

    }

    public function serch(Request $request)
    {
        $kalas = Kala::where('name', '=', $request->name)->get();

        return view('welcome', ['kalas' => $kalas]);

    }

    public function usersKalaDel(Store $store)
    {

        $store->delete();

        return redirect()->back();
    }
}





