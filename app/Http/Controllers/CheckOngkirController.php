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
        $availableCouriers = ['jne', 'tiki'];
        $originCityId = 152;
        $results = [];

        foreach ($availableCouriers as $courier) {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => http_build_query([
                    'origin'      => $originCityId,
                    'destination' => $request->city_destination,
                    'weight'      => $request->weight,
                    'courier'     => $courier,
                ]),
                CURLOPT_HTTPHEADER => [
                    "key: " . env('RAJAONGKIR_API_KEY'),
                    "content-type: application/x-www-form-urlencoded",
                ],
            ]);

            $response = curl_exec($curl);

            if (curl_errno($curl)) {
                $error = curl_error($curl);
                curl_close($curl);
                return response()->json(['error' => "cURL Error: $error"], 500);
            }

            curl_close($curl);

            $data = json_decode($response, true);

            $destinationProvince = $data['rajaongkir']['destination_details']['province'] ?? null;

            if (
                isset($data['rajaongkir']['results'][0]) &&
                isset($data['rajaongkir']['results'][0]['costs'])
            ) {
                $results[$courier] = [
                    'destination_province' => $destinationProvince,
                    'costs' => $data['rajaongkir']['results'][0]['costs']
                ];
            } else {
                $results[$courier] = [
                    'destination_province' => $destinationProvince,
                    'costs' => [
                        ['service' => '-', 'description' => '-', 'cost' => [['value' => 0, 'etd' => '-', 'note' => 'Data not found']]]
                    ]
                ];
            }

        }

        return response()->json($results);
    }

}
