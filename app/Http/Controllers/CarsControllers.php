<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CarsControllers extends Controller
{
    public function trucks(){
        $trucks = DB::table('trucks')->get();

        return view('index', compact('trucks'));
    }

    public function addCars (){

        return view('addCars');

    }

    public function toAddCars(){

        $value = request('trucks');

        if($value==1){
            return view("trucks");
        }
        elseif($value==2){
            return view("cars");
        }
        elseif($value==3){
            return view("bus");
        }

    }

    public function toAddCarsTrucks (){

        $name=request('name');
        $price=request('price');
        $price_triler=request('price_triler');
        $lifting=request('lifting');

        $checkDB = DB::table('trucks')
        ->insert([
            'name'=>$name,
            'price'=>$price,
            'price_triler'=>$price_triler,
            'lifting'=>$lifting
        ]);

        return redirect('/?success');
    }
}
