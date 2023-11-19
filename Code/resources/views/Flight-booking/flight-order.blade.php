@extends('layouts.app')

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
                    <li class=""><a class="black-text mt-2" style="text-decoration:none;"
                            href="{{ route('admin.flight-search') }}">Flight Search</a><svg
                            xmlns="http://www.w3.org/2000/svg" width="17" height="16" fill="#cfd8dc"
                            class="bi bi-caret-right-fill mx-2" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </li>
                    <li class="active text-secondary" disabled>Flight Order</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="border-bottom">
                        <div class="container">
                            <form class="row d-flex justify-content-center">
                                <div class="card-header py-2 px-4 row">

                                    <h5 class="fs-4  py-1">
                                        Your Trip to Lahore
                                    </h5>
                                    <div class="d-flex flex-row col-12 justify-content-between">
                                        <span>
                                            Departure (Airline name)
                                        </span>

                                        <span>
                                            Fri, 08 Sept
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex col-7 border-end justify-content-between">
                                            <span class="fs-4">
                                                2:30 AM YK
                                                <br />
                                                <p class="fw-light" style="font-size: 1rem;max-width:160px;">
                                                    Fri, 01 Sep
                                                    Heathrow, T4, London (United Kingdom)
                                                </p>
                                            </span>
                                            <span>

                                            </span>
                                            <span class="fs-4" style="width:250px;">
                                                6:30 AM US
                                                <br />
                                                <p class="fw-light" style="font-size: 1rem;max-width:160px;">
                                                    Fri, 01 Sep
                                                    Heathrow, T4, London (United Kingdom)
                                                </p>
                                            </span>

                                        </div>
                                        <div class="col-5 d-flex flex-column justify-content-around">
                                            <span>
                                                5 hours 11 mins
                                            </span>
                                            <span class="d-flex align-items-center">
                                                <span class="material-icons">
                                                    airline_seat_recline_normal
                                                </span>
                                                Economy
                                            </span>
                                            <label class="fs-3">
                                                $3600
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-12" style="background:#fff;">
                                    <div calss="adult-container">
                                        <h6 class="px-1 py-3 fs-5 text-dark">
                                            Passenger Details
                                        </h6>
                                        <div class="adult-content row">
                                            <div class="form-group col-6">
                                                <label> 
                                                    First Name *
                                                </label>
                                                <input type="text" class="form-control" name="firstname"
                                                    placeholder="First Name" />
                                            </div>
                                            <div class="form-group col-6">
                                                <label>
                                                    Middle Name (Optional)
                                                </label>
                                                <input type="text" class="form-control" name="middlename"
                                                    placeholder="Middle Name" />
                                            </div>
                                            <div class="form-group col-8">
                                                <label>
                                                    Last Name *
                                                </label>
                                                <input type="text" class="form-control" name="lastname"
                                                    placeholder="Last Name" />
                                            </div>
                                            <div class="form-group col-4">
                                                <label>
                                                    Gender *
                                                </label>
                                                <select name="gender" class="form-control">
                                                    <option selected disabled>Choose Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>
                                                    Date of Birth *
                                                </label>
                                                <input type="date" class="form-control" name="dateofBirth"
                                                    placeholder="Date of Birth" />
                                            </div>
                                            <div class="form-group col-6">
                                                <label>
                                                    Seats Available *
                                                </label>
                                                <select name="number" class="form-control">
                                                    <option selected disabled>Choose Seat</option>
                                                    <option>A34</option>
                                                    <option>A67</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>
                                                    Documents (Passport) *
                                                </label>
                                                <input type="file" class="form-control" name="document" />
                                            </div>
                                            <label class="fs-5 text-dark">
                                                Billing and contact details
                                            </label>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label>
                                                        Email *
                                                    </label>
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="Email" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>
                                                        Phone Number *
                                                    </label>
                                                    <input type="text" class="form-control" name="phonenumber"
                                                        placeholder="Phone Number" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <label>
                                                        Device Type *
                                                    </label>
                                                    <input type="text" class="form-control" name="devicetype"
                                                        placeholder="Device type" />
                                                </div>
                                                <div class="form-group col-12">
                                                   <a type="button" href="{{route("admin.flight-search")}}" class="btn btn-dark text-light mb-2"> Cancel</a>
                                                   <button type="button" class="btn btn-success mb-2">Place Order </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
