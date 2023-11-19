@extends('layouts.app')
<style>
    ul.options {
        list-style-type: none;
        margin: 0;
        padding: 0;
        list-style: none;
        position: absolute;
        background: #e2e2f0;
        width: inherit;
        top: 39px;
    }
</style>
@section('content')
    <div class="main-content-container container-fluid px-4">
        <div class="page-header row no-gutters py-2">
            <div class="col-12 col-sm-4 text-sm-left mb-0 ml-3 py-2">
                <h3 class="page-title">Flight Search <span id="length_Hotel__booking_table"></h3>
            </div>
            <div class="col-12 px-3 py-3">
                <ol class="breadcrumb cyan lighten-4 p-3"
                    style="background-color:color-mix(in srgb,#cfd8dc 20%, white);width:100%;">
                    <li class=""><a class="black-text mt-2" style="text-decoration:none;"
                            href="{{ route('admin.home') }}">Dashboard</a><svg xmlns="http://www.w3.org/2000/svg"
                            width="17" height="16" fill="#cfd8dc" class="bi bi-caret-right-fill mx-2"
                            viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </li>
                    <li class=""><a class="black-text mt-2" style="text-decoration:none;"
                            href="{{ route('admin.flight') }}">Flight Bookings</a><svg xmlns="http://www.w3.org/2000/svg"
                            width="17" height="16" fill="#cfd8dc" class="bi bi-caret-right-fill mx-2"
                            viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </li>
                    <li class="active text-secondary" disabled>Flight Search</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <div class="container">
                            <form class="row">
                                <div class="col-4 btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                    <label class="btn btn-white active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked> One
                                        way </label>
                                    <label class="btn btn-white">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> Round Trip
                                    </label>
                                    <label class="btn btn-white">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> Mulit-city
                                    </label>
                                </div>
                                <div class="col-4">
                                </div>
                                <div class="form-group col-4">
                                    <select class="form-control" name="travelClass">
                                        <option selected disabled>Choose Travel Class...</option>
                                        <option value="ECONOMY">Economy</option>
                                        <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                        <option value="BUSINESS">Business</option>
                                        <option value="FIRST">First Class</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-2 d-flex flex-column">
                                        <label class="" style="font-size:14px;"> Adults</label>
                                        <input type="number" min="1" name="adults" class="form-control"
                                            placeholder="Adults" />
                                    </div>
                                    <div class="form-group col-3 d-flex align-items-end mt-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <span class="material-icons">
                                                        flight_takeoff
                                                    </span> </span>
                                            </div>
                                            <input type="text" class="form-control datalist_input" id="fromcity"
                                                name="originLocationCode" placeholder="From?" list="fromCites"
                                                aria-describedby="basic-addon1">
                                            <datalist id="fromCites">
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="form-group col-3 d-flex align-items-end">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <span class="material-icons">
                                                        flight_land
                                                    </span> </span>
                                            </div>
                                            <input type="text" class="form-control datalist_input" id="tocities"
                                                name="destinationLocationCode" placeholder="From?" list="ToCities"
                                                aria-describedby="basic-addon1">
                                            <datalist id="ToCities">
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="form-group col-3 d-flex flex-column">
                                        <label class="" style="font-size:14px;"> Departure Date</label>
                                        <input type="date" class="form-control" name="departureDate"
                                            placeholder="Departure Date" />
                                    </div>
                                    <div class="form-group col-1 d-flex align-items-end">

                                        <button type="button" class="py-2 btn btn-primary ">Search</button>
                                    </div>

                                </div>
                            </form>
                            <div class="container">
                                <h5>Search Flights</h5>
                                <div class="row rounded card-wrapper shadow py-3 px-2 mb-5" style="background:#fff;">
                                    <div class="col-9">
                                        <div class="card-container d-flex flex-row">
                                            <img width="200" height="140" class="rounded"
                                                src="https://www.london.ac.uk/sites/default/files/styles/max_1300x1300/public/2018-10/london-aerial-cityscape-river-thames_1.jpg?itok=6LenFxuz"
                                                alt=".." />
                                            <div class="card-content mx-2 w-100 d-flex flex-column justify-content-around">
                                                <div class="card-title-wrapper d-flex justify-content-between w-100">
                                                    <h6 class="card-title text-dark fs-5">
                                                        New York, Us
                                                    </h6>
                                                    <span class="card-date fw-light text-secondary">
                                                        8-7 April
                                                    </span>
                                                </div>
                                                <div class="time-wrapper d-flex justify-content-between">
                                                    <span class="fw-bold fs-6 d-flex align-items-center">
                                                        2:30 PM
                                                    </span>
                                                    <span>
                                                        <span class="material-icons fs-3">
                                                            connecting_airports
                                                        </span>
                                                    </span>
                                                    <span class="fw-bold fs-6 d-flex align-items-center">
                                                        6:30 AM
                                                    </span>
                                                </div>
                                                <div class="stop-detials d-flex justify-content-between px-1">
                                                    <span class="badge rounded-pill bg-dark">
                                                        STE
                                                    </span>
                                                    <span class="fs-6 fw-light text-secondary">
                                                        Direct
                                                    </span>
                                                    <span class="badge  rounded-pill bg-dark">
                                                        US
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 border-start">
                                        <div class="price-container d-flex justify-content-between flex-column h-100 py-2">
                                            <div class="d-flex justify-content-between">
                                                <h3 class="text-dark">
                                                    $345
                                                </h3>
                                                <div class="price-icon">
                                                    <button class="btn btn-sm btn-white" style="background:#e9ecef;">
                                                        <span class="material-icons">
                                                            luggage
                                                        </span>
                                                    </button>
                                                    <button class="btn btn-sm btn-white" style="background:#e9ecef;">
                                                        <span class="material-icons">
                                                            restaurant
                                                        </span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="btn-container">
                                                <a href="{{ route('admin.flight-order') }}" type="button"
                                                    class="btn btn-success mb-2">Veiw Deal </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row rounded card-wrapper shadow py-3 px-2 mb-5" style="background:#fff;">
                                    <div class="col-9">
                                        <div class="card-container d-flex flex-row">
                                            <img width="200" height="140" class="rounded"
                                                src="https://www.london.ac.uk/sites/default/files/styles/max_1300x1300/public/2018-10/london-aerial-cityscape-river-thames_1.jpg?itok=6LenFxuz"
                                                alt=".." />
                                            <div class="card-content mx-2 w-100 d-flex flex-column justify-content-around">
                                                <div class="card-title-wrapper d-flex justify-content-between w-100">
                                                    <h6 class="card-title text-dark fs-5">
                                                        New York, Us
                                                    </h6>
                                                    <span class="card-date fw-light text-secondary">
                                                        8-7 April
                                                    </span>
                                                </div>
                                                <div class="time-wrapper d-flex justify-content-between">
                                                    <span class="fw-bold fs-6 d-flex align-items-center">
                                                        2:30 PM
                                                    </span>
                                                    <span>
                                                        <span class="material-icons fs-3">
                                                            connecting_airports
                                                        </span>
                                                    </span>
                                                    <span class="fw-bold fs-6 d-flex align-items-center">
                                                        6:30 AM
                                                    </span>
                                                </div>
                                                <div class="stop-detials d-flex justify-content-between px-1">
                                                    <span class="badge rounded-pill bg-dark">
                                                        STE
                                                    </span>
                                                    <span class="fs-6 fw-light text-secondary">
                                                        Direct
                                                    </span>
                                                    <span class="badge  rounded-pill bg-dark">
                                                        US
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 border-start">
                                        <div class="price-container d-flex justify-content-between flex-column h-100 py-2">
                                            <div class="d-flex justify-content-between">
                                                <h3 class="text-dark">
                                                    $345
                                                </h3>
                                                <div class="price-icon">
                                                    <button class="btn btn-sm btn-white" style="background:#e9ecef;">
                                                        <span class="material-icons">
                                                            luggage
                                                        </span>
                                                    </button>
                                                    <button class="btn btn-sm btn-white" style="background:#e9ecef;">
                                                        <span class="material-icons">
                                                            restaurant
                                                        </span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="btn-container">
                                                <button type="button" class="btn btn-success mb-2">Veiw Deal </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row rounded card-wrapper shadow py-3 px-2 mb-5" style="background:#fff;">
                                    <div class="col-9">
                                        <div class="card-container d-flex flex-row">
                                            <img width="200" height="140" class="rounded"
                                                src="https://www.london.ac.uk/sites/default/files/styles/max_1300x1300/public/2018-10/london-aerial-cityscape-river-thames_1.jpg?itok=6LenFxuz"
                                                alt=".." />
                                            <div class="card-content mx-2 w-100 d-flex flex-column justify-content-around">
                                                <div class="card-title-wrapper d-flex justify-content-between w-100">
                                                    <h6 class="card-title text-dark fs-5">
                                                        New York, Us
                                                    </h6>
                                                    <span class="card-date fw-light text-secondary">
                                                        8-7 April
                                                    </span>
                                                </div>
                                                <div class="time-wrapper d-flex justify-content-between">
                                                    <span class="fw-bold fs-6 d-flex align-items-center">
                                                        2:30 PM
                                                    </span>
                                                    <span>
                                                        <span class="material-icons fs-3">
                                                            connecting_airports
                                                        </span>
                                                    </span>
                                                    <span class="fw-bold fs-6 d-flex align-items-center">
                                                        6:30 AM
                                                    </span>
                                                </div>
                                                <div class="stop-detials d-flex justify-content-between px-1">
                                                    <span class="badge rounded-pill bg-dark">
                                                        STE
                                                    </span>
                                                    <span class="fs-6 fw-light text-secondary">
                                                        Direct
                                                    </span>
                                                    <span class="badge  rounded-pill bg-dark">
                                                        US
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 border-start">
                                        <div class="price-container d-flex justify-content-between flex-column h-100 py-2">
                                            <div class="d-flex justify-content-between">
                                                <h3 class="text-dark">
                                                    $345
                                                </h3>
                                                <div class="price-icon">
                                                    <button class="btn btn-sm btn-white" style="background:#e9ecef;">
                                                        <span class="material-icons">
                                                            luggage
                                                        </span>
                                                    </button>
                                                    <button class="btn btn-sm btn-white" style="background:#e9ecef;">
                                                        <span class="material-icons">
                                                            restaurant
                                                        </span>
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="btn-container">
                                                <button type="button" class="btn btn-success mb-2">Veiw Deal </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const searchInput = $('#fromcity');
            const searchResults = $('#fromCites');
            searchInput.on('input', function(event) {
                const searchTerm = event.target.value;
                console.log(event.target.value, "outside");
                if (event.target.value.length >= 3) {
                    console.log(event.target.value.length, "inside");

                    $.ajax({
                        url: `http://127.0.0.1:8000/admin/search/cities/${searchTerm}`,
                        method: 'GET',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            console.log(response, "response")
                            var datalist = document.getElementById("fromCites");

                            datalist.innerHTML = ""; // Clear existing options

                            if (response.data.length > 1) { // Check if there's data available
                                response.data.forEach((element) => {
                                    var option = document.createElement("option");
                                    option.value = element.iataCode ? element.iataCode : "";
                                    option.text = element.name;
                                    option.classList.add('current');
                                    datalist.appendChild(option);
                                    console.log(option);
                                });
                            } else {
                                console.log("No cities available");
                            }

                        },
                        error: function() {}
                    });
                }
            });

        });
        $(document).ready(function() {
            const searchInput = $('#tocities');
            const searchResults = $('#ToCities');
            searchInput.on('input', function(event) {
                const searchTerm = event.target.value;
                console.log(event.target.value, "outside");
                if(event.target.value.length >= 3){
                                console.log(event.target.value.length, "inside");

                 $.ajax({
                    url: `http://127.0.0.1:8000/admin/search/cities/${searchTerm}`,
                    method: 'GET',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        console.log(response, "response")
                        var datalist = document.getElementById("ToCities");

                        datalist.innerHTML = ""; // Clear existing options

                        if (response.data.length > 1) { // Check if there's data available
                            response.data.forEach((element) => {
                                var option = document.createElement("option");
                                option.value = element.iataCode ? element.iataCode : "";
                                opionn.text = element.name;
                                 option.classList.add('current');
                                datalist.appendChild(option);
                                console.log(option);
                            });
                        } else {
                            console.log("No cities available");
                        }

                    },
                    error: function() {}
                });
                }
            });
            });
    </script>
@endsection
