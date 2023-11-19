@extends('layouts.app')

@section('content')
    <div class="my-4 px-4 py-2">
    <div class="row px-3 py-1">
            <ol class="breadcrumb cyan lighten-4 p-3" style="background-color:color-mix(in srgb,#cfd8dc 20%, white);width:100%;">
                                    <li class=""><a class="black-text mt-2" style="text-decoration:none;" href="">Home</a><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" fill="#cfd8dc" class="bi bi-caret-right-fill mx-2" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg></li>
                                    <li class=""><a class="black-text mt-2" style="text-decoration:none;" href="">Flight Bookings</a><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" fill="#cfd8dc" class="bi bi-caret-right-fill mx-2" viewBox="0 0 16 16">
  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
</svg></li>
                                    <li class="active text-secondary" disabled>Add Flight</li>
                                </ol>
            </div>
        <!-- <button type="button" class="mb-2 btn btn-sm btn-outline-primary mr-1"
            onclick="location.href='}'">
            <span class="material-icons fs-6">
                arrow_back
            </span>
            Go Back
        </button> -->
        <div class="card card-small my-3">
            <div class="card-header border-bottom">
                <h6 class="m-0">Add Hotel</h6>
            </div>
            <form>
                <div class="row m-0 p-3">
                    <div class="col-6 p-2">
                        <input type="text" class="form-control" placeholder="Hotel Name">
                    </div>
                    <div class="col-6 p-2">
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col-6 p-2">
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                    <div class="col-6 p-2">
                        <input type="number" min="0" class="form-control" placeholder="Rooms">
                    </div>
                    <div class="col-6 p-2">
                        <input type="text" class="form-control" placeholder="Any">
                    </div>
                    <div class="col-6 p-2">
                        <select id="inputState" class="form-control">
                            <option selected="">Choose Stars...</option>
                            <option>1 star</option>
                            <option>2 star</option>
                            <option>3 star</option>
                            <option>4 star</option>
                            <option>5 star</option>
                        </select>
                    </div>
                    <div class="col-6 p-2">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-6 p-2 ">
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="formsRadioDefault1" name="radioGroup" class="custom-control-input">
                            <label class="custom-control-label" for="formsRadioDefault1">Internet</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="formsRadioDefault2" name="radioGroup" class="custom-control-input">
                            <label class="custom-control-label" for="formsRadioDefault2">No Internet</label>
                        </div>
                    </div>
                    <div class="col-6 p-2 ">
                        <div class="custom-control custom-toggle custom-toggle-sm mb-1">
                            <input type="checkbox" id="customToggle1" name="customToggle1" class="custom-control-input">
                            <label class="custom-control-label" for="customToggle1">Breakfast</label>
                        </div>
                        <div class="custom-control custom-toggle custom-toggle-sm mb-1">
                            <input type="checkbox" id="customToggle2" name="customToggle2" class="custom-control-input">
                            <label class="custom-control-label" for="customToggle2">Lunch</label>
                        </div>
                        <div class="custom-control custom-toggle custom-toggle-sm mb-1">
                            <input type="checkbox" id="customToggle3" name="customToggle3" class="custom-control-input">
                            <label class="custom-control-label" for="customToggle3">Dinner</label>
                        </div>

                    </div>
                </div>
                <button type="button" class="mb-2 btn btn-md btn-success mx-4">Submit</button>
            </form>
        </div>
    </div>
@endsection
