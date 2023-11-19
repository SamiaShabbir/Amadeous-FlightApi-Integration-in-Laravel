<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class ViewOrder extends Controller
{
  public function __invoke (Request $request, Client $client,$id)
    {
        $url = 'https://test.api.amadeus.com/v1/booking/flight-orders/eJzTd9f3CnTzCXAFAAtjAmg%3D';

        if (session('access_token')) {
            $access_token = session('access_token');
        } else {
            $access_token = app('App\Http\Controllers\AccessTokenController')->__invoke($client)->access_token;
            session(['access_token' => $access_token]);
        }

        $travelers = [];

        for ($i = 1; $i <= $request['passengers']; $i++) {
            $travelers[] = [
                'id' => $i,
                'travelerType' => 'ADULT'
            ];
        }

        $data = [
            'originDestinations' => [
                [
                    'id' => 1,
                    'originLocationCode' => $request['from'],
                    'destinationLocationCode' => $request['to'],
                    'departureDateTimeRange' => [
                        'date' => $request['date']
                    ]
                ]
            ],
            'travelers' => $travelers,
            'sources' => [
                'GDS'
            ]
        ];

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token
                ],
                'json' => $data
            ]);

            $response = $response->getBody();
            $response = json_decode($response);

            return view('search')->with('flights', $response->data);
        } catch (GuzzleException $exception) {
            return $exception;
        }
    }
}
