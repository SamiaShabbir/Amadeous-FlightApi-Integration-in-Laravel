@extends('layouts.main')

@section('content')
    <div class="card p-5">
        <h2 class="text-center">Flight Details</h2>
        <p>Flight ordered successfully</p>
        <ul class="list-group">
            <li class="list-group-item">
                <b>ID</b>: {{ $flight->data->id }}
            </li>

            <li class="list-group-item">
                <b>Reference</b>: {{ $flight->data->associatedRecords[0]->reference }}
            </li>
              <li class="list-group-item">
                <b>Source</b>: {{ $flight->data->flightOffers[0]->source }}
            </li>
             <li class="list-group-item">
                <b>TicketingDate</b>: {{ $flight->data->flightOffers[0]->lastTicketingDate }}
            </li>
             <li class="list-group-item">
                {{-- <b>Departure</b>: {{ $flight->data->flightOffers[0]->itineraries[0]->segmants }} --}}
            </li>
        </ul>
    </div>
            {{-- <a class="btn btn-primary" role="button" href="{{ route('viewOrder',['id'=>$flight->data->id]) }}" style="margin-left: 45%; margin-top: 10px;">View Order</a> --}}

@endsection
