@extends('layouts.main')

@section('content')
    <div class="card p-5">
        <h2 class="text-center">Search Flights</h2>
        <form action="/api/search" class="mt-3" method="POST">
            @csrf

            <div class="row">
                <div class="form-group col-6">
                    {{-- <input type="text" class="form-control" placeholder="From" name="from" required> --}}
                    <select type="text" class="form-control" placeholder="From" name="from" required>
                    <option value="BOS">Boston</option>
                    <option value="AAR">Aarhus</option>
                    <option value="ALF">Alta</option>
                    <option value="BJZ">Badajoz</option>
                </select>
                </div>

                <div class="form-group col-6">
                    <select type="text" class="form-control" placeholder="To" name="to" required>
                    <option value="BLR">Bangalore</option>
                    <option value="BNP">Bannu</option>
                    <option value="CNS">Cairns</option>
                    <option value="DXB">Dubai</option>
                </select>
                </div>

                <div class="form-group col-6 mt-3">
                    <input type="date" class="form-control" placeholder="Departure Date" name="date" required>
                </div>

                <div class="form-group col-6 mt-3">
                    <input type="number" class="form-control" placeholder="Passengers" name="passengers" required>
                </div>

                <div class="form-group col-12 mt-3">
                    <button class="btn btn-primary form-control" type="submit">Search</button>
                </div>
            </div>
        </form>

        @if(isset($flights) && count($flights) > 0)
            <h2 class="text-center mt-5">{{ count($flights) }} Results</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Depature From</th>
                    <th scope="col">Depature At</th>
                    <th scope="col">Arrival At</th>
                    <th scope="col">Arrival time</th>
                    <th scope="col">Number Of Stops</th>
                    <th scope="col">Airline Codes</th>
                    <th scope="col">Traveler Pricings</th>
                    <th scope="col">Price (EUR)</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                        <tr onclick="document.getElementById('{{ 'form'.$flight->id }}').submit()">
                            <th scope="row">{{ $flight->id }}</th>
                            <td>{{ $flight->itineraries[0]->duration }}</td>
                            <td>{{ $flight->itineraries[0]->segments[0]->departure->iataCode }}</td>
                            <td>{{ $flight->itineraries[0]->segments[0]->departure->at }}</td>
                            <td>{{ $flight->itineraries[0]->segments[0]->arrival->iataCode }}</td>
                            <td>{{ $flight->itineraries[0]->segments[0]->arrival->at }}</td>
                            <td>{{ $flight->itineraries[0]->segments[0]->numberOfStops }}</td>
                            <td>{{ $flight->validatingAirlineCodes[0] }}</td>
                            <td>{{ $flight->travelerPricings[0]->fareDetailsBySegment[0]->cabin }}</td>
                            <td>{{ $flight->price->total }}</td>
                        </tr>

                        <form action="/api/price" hidden id="{{ 'form' . $flight->id }}" method="POST">
                            @csrf

                            <input type="hidden" name="flight" value="{{ json_encode($flight) }}">
                        </form>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
