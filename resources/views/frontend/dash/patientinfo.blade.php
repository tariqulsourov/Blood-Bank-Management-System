@extends('frontend.layout.dashformate')

@section('body')
    <h3 align="center">Patient Information</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Put Information') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('patientstore')}} ">

                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="gender" id="gender">

                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control" name="age" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_type" class="col-md-4 col-form-label text-md-right">{{ __('Blood type') }}</label>

                                <div class="col-md-6">
                                    <input id="blood_type" type="text" class="form-control" name="blood_type" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                                <div class="col-md-6">
                                    <input id="quantity" type="text" class="form-control" name="quantity" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="reason" class="col-md-4 col-form-label text-md-right">{{ __('Reason') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="reason" name="reason">

                                        <option>road_accident</option>
                                        <option>heart_operation</option>
                                        <option>child_delivery</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="receiver_NID" class="col-md-4 col-form-label text-md-right">{{ __('Receiver_NID') }}</label>

                                <div class="col-md-6">
                                    <input id="receiver_NID" type="text" class="form-control" name="receiver_NID" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date" required="">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __(' Submit... ') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection