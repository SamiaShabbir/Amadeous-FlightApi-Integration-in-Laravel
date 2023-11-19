@extends('layouts.main')

@section('content')
    <div class="card p-5">
        <h2 class="text-center">Flight Details</h2>
        <ul class="list-group">
            <li class="list-group-item">Price: {{ $data->flightOffers[0]->price->total }}</li>
            <li class="list-group-item">Currency: {{ $data->flightOffers[0]->price->currency }}</li>
            <li class="list-group-item">AirlineValidateCode: {{ $data->flightOffers[0]->validatingAirlineCodes[0] }}</li>
            <li class="list-group-item">Departure Place: {{ $data->flightOffers[0]->itineraries[0]->segments[0]->departure->iataCode }}</li>
            <li class="list-group-item">Departure Time: {{ $data->flightOffers[0]->itineraries[0]->segments[0]->departure->at }}</li>
            <li class="list-group-item">Arrival Place: {{ $data->flightOffers[0]->itineraries[0]->segments[0]->arrival->iataCode }}</li>
            <li class="list-group-item">Arrival Time: {{ $data->flightOffers[0]->itineraries[0]->segments[0]->arrival->at }}</li>
            <li class="list-group-item">Class: {{ $data->flightOffers[0]->itineraries[0]->segments[0]->co2Emissions[0]->cabin }}</li>
        </ul>

        <h2 class="text-center mt-5">Booking Requirements</h2>
        <ul class="list-group">
            <li class="list-group-item">Email Address</li>
            <li class="list-group-item">Phone Number</li>
            <li class="list-group-item">Gender</li>
            <li class="list-group-item">Document</li>
        </ul>

        <form action="/api/order" method="POST" class="mt-3">
            @csrf

            <input type="hidden" value="{{ json_encode($data)}}" name="data">

            <button class="btn btn-primary form-control" type="submit">Order</button>
        </form>
    </div>
@endsection
