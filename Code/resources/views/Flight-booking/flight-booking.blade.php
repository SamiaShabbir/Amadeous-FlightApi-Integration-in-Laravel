@extends('layouts.app')
   
@section('content')
<div class="main-content-container container-fluid px-4">
        <div class="page-header row no-gutters py-2">
            <div class="col-12 col-sm-4 text-sm-left mb-0 ml-3 py-2">
                <h3 class="page-title">Flight Bookings Table <span id="length_Hotel__booking_table"></h3>
            </div>
            <div class="col-12 px-3 py-3">
                <ol class="breadcrumb cyan lighten-4 p-3"
                    style="background-color:color-mix(in srgb,#cfd8dc 20%, white);width:100%;">
                    <li class=""><a class="black-text mt-2" style="text-decoration:none;"
                            href="{{ route('admin.home') }}">Home</a><svg xmlns="http://www.w3.org/2000/svg" width="17"
                            height="16" fill="#cfd8dc" class="bi bi-caret-right-fill mx-2" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                        </li>
                    <li class="active text-secondary" disabled>Flight Bookings</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <div class="row p-0 m-0 align-items-end"">
                            <div class="pb-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 ">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">search</i>
                                        </span>
                                    </span>
                                    <input id="search_input" type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <div class="pb-3 col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6 ">
                                <span style="font-size: 11px">Date from</span>
                                <input id="date_from_input" type="date" class="form-control" placeholder="Password">
                            </div>
                            <div class="pb-3 col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6  ">
                                <span style="font-size: 11px">Date to</span>

                                <input id="date_to_input" type="date" class="form-control" placeholder="Password">
                            </div>
                            <div class="pb-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-8 ">
                                <button type="button" class="btn btn-primary">
                                    <span class="material-icons fs-6">
                                        filter_alt
                                    </span>
                                    Apply Filter</button>
                                <button type="button" class="btn btn-dark" onclick="reset()">
                                    <span class="material-icons fs-6">
                                        close
                                    </span>
                                    Reset</button>
                            </div>
                            <div class="pb-3 col-xl-2 col-lg-8  col-md-6 col-sm-6 col-4 d-flex flex-row-reverse ">
                                <a type="button" class="btn btn-primary"
                                    href="{{route('admin.flight-search')}}">
                                    <span class="material-icons fs-6">add</span>
                                    Add New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table id="myTable" class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">First Name</th>
                                    <th scope="col" class="border-0">Country</th>
                                    <th scope="col" class="border-0">City</th>
                                    <th scope="col" class="border-0">Phone</th>
                                    <th scope="col" class="border-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="hotel_bookings">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const table_hotel = document.getElementById('hotel_bookings');

        const tableData = [{
                "td1": "1",
                "td2": "Ali",
                "td3": "Russian Federation",
                "td4": "Gdańsk",
                "td5": "107-0339",
                "td6": "-"
            },
            {
                "td1": "2",
                "td2": "Clark",
                "td3": "Estonia",
                "td4": "Borghetto di Vara",
                "td5": "1-660-850-1647",
                "td6": "-"
            },
            {
                "td1": "3",
                "td2": "Jerry",
                "td3": "Cyprus",
                "td4": "Braunau am Inn",
                "td5": "214-4225",
                "td6": "-"
            },
            {
                "td1": "4",
                "td2": "Clark",
                "td3": "Estonia",
                "td4": "Borghetto di Vara",
                "td5": "1-660-850-1647",
                "td6": "-"
            },
            {
                "td1": "5",
                "td2": "Jerry",
                "td3": "Cyprus",
                "td4": "Braunau am Inn",
                "td5": "214-4225",
                "td6": "-"
            },
            {
                "td1": "6",
                "td2": "Clark",
                "td3": "Estonia",
                "td4": "Borghetto di Vara",
                "td5": "1-660-850-1647",
                "td6": "-"
            },
            {
                "td1": "7",
                "td2": "Jerry",
                "td3": "Cyprus",
                "td4": "Braunau am Inn",
                "td5": "214-4225",
                "td6": "-"
            },
            {
                "td1": "8",
                "td2": "Clark",
                "td3": "Estonia",
                "td4": "Borghetto di Vara",
                "td5": "1-660-850-1647",
                "td6": "-"
            },
            {
                "td1": "9",
                "td2": "Jerry",
                "td3": "Cyprus",
                "td4": "Braunau am Inn",
                "td5": "214-4225",
                "td6": "-"
            },
            {
                "td1": "10",
                "td2": "Clark",
                "td3": "Estonia",
                "td4": "Borghetto di Vara",
                "td5": "1-660-850-1647",
                "td6": "-"
            },
            {
                "td1": "11",
                "td2": "Jerry",
                "td3": "Cyprus",
                "td4": "Braunau am Inn",
                "td5": "214-4225",
                "td6": "-"
            },
            {
                "td1": "12",
                "td2": "Clark",
                "td3": "Estonia",
                "td4": "Borghetto di Vara",
                "td5": "1-660-850-1647",
                "td6": "-"
            },
            {
                "td1": "13",
                "td2": "Jerry",
                "td3": "Cyprus",
                "td4": "Braunau am Inn",
                "td5": "214-4225",
                "td6": "-"
            }
        ]
        // Iterate over the table data and create rows with cells
        tableData.forEach(function(rowData) {
            // Create a new row
            var row = document.createElement("tr");

            // Create cells and populate them with data
            for (var key in rowData) {
                console.log(rowData)
                if (rowData.hasOwnProperty(key)) {
                    var cell = document.createElement("td");
                    cell.textContent = rowData[key];
                    row.appendChild(cell);
                }
            }
            console.log(table_hotel)
            // Append the row to the tbody
            table_hotel.appendChild(row);
        });
    </script>
@endsection