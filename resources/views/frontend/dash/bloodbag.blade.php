@extends('frontend.layout.dashformate')

@section('body')
    <h3 align="center">Blood Bag Information</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Put Information') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('bloodbagstore')}} ">

                            @csrf

                            <div class="form-group row">
                                <label for="branch_id" class="col-md-4 col-form-label text-md-right">{{ __('Branch ID') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="branch_id" name="branch_id">

                                        <option>1</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_type" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="blood_type" name="blood_type">

                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>O+</option>
                                        <option>O-</option>

                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="stored_date" class="col-md-4 col-form-label text-md-right">{{ __('Store Date') }}</label>

                                <div class="col-md-6">
                                    <input id="stored_date" type="date" class="form-control" name="stored_date" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exp_date" class="col-md-4 col-form-label text-md-right">{{ __('Store Date') }}</label>

                                <div class="col-md-6">
                                    <input id="exp_date" type="date" class="form-control" name="exp_date" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="donated_by" class="col-md-4 col-form-label text-md-right">{{ __('Donor NID') }}</label>

                                <div class="col-md-6">
                                    <input id="donated_by" type="text" class="form-control" name="donated_by" required="">
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
