<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProximityAlertController extends Controller
{
    public function checkProximity(Request $request)
    {
        Log::info('lat: ' . $request->lat . ', lng: ' . $request->lng . ', radius: ' . $request->radius);

        if (empty($request->lat) || empty($request->lng)) {
            return view('dashboard.alerts', [
                'data' => [
                    'within_range' => false,
                    'distance' => null
                ]
            ]);
        }

        $response = Http::post('http://127.0.0.1:5000/check_proximity', [
            'warehouse' => [14.5995, 120.9842],
            'delivery' => [$request->lat, $request->lng],
            'radius' => $request->radius ?? 250
        ]);

        $data = $response->json();

        // Ensure $data is always an array with expected keys
        if (!is_array($data) || !isset($data['within_range']) || !isset($data['distance'])) {
            $data = [
                'within_range' => false,
                'distance' => null
            ];
        }

        return view('dashboard.alerts', ['data' => $data]);
    }
}