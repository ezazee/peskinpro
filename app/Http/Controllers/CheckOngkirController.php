<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province; 
use App\Models\City;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CheckOngkirController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'province_id');
        return view('backend.pages.ongkir', compact('provinces'));
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');
        return response()->json($city);
    }

    public function check_ongkir(Request $request)
    {
        $availableCouriers = ['jne', 'tiki', 'pos'];
        $originCityId = 152;
        $results = [];
        foreach ($availableCouriers as $courier) {
            $cost = RajaOngkir::ongkosKirim([
                'origin'        => $originCityId, 
                'destination'   => $request->city_destination, 
                'weight'        => $request->weight, 
                'courier'       => $courier
            ])->get();
        
            if ($cost) {
                $results[$courier] = $cost;
            }
        }   

        // dd($cost);
        return response()->json($results);
    }
}
