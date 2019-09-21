@extends('frontend.layout.dashformate')

@section('body')
    <h1 align="center">Hello Admin</h1>
    <br>
    <hr>

    <h3 align="center">Blood receiver Information</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Put Information') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('store')}} ">

                            @csrf

                            <div class="form-group row">
                                <label for="NID" class="col-md-4 col-form-label text-md-right">{{ __('NID') }}</label>

                                <div class="col-md-6">
                                    <input id="NID" type="text" class="form-control" name="NID" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="branch_id" class="col-md-4 col-form-label text-md-right">{{ __('Branch ID') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="branch_id" id="branch_id">

                                        <option>1</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_type" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                                <div class="col-md-6">
                                    <input id="blood_type" type="text" class="form-control" name="blood_type" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_bag_quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                                <div class="col-md-6">
                                    <input id="blood_bag_quantity" type="text" class="form-control" name="blood_bag_quantity" required="">
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
