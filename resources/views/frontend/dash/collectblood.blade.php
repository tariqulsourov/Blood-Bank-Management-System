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

                        <form method="POST" action="{{ route('searchdonorandblood')}} ">

                            @csrf

                            <div class="form-group row">
                                <label for="nid_email" class="col-md-4 col-form-label text-md-right">{{ __('NID or Email') }}</label>

                                <div class="col-md-6">
                                    <input id="nid_email" type="text" class="form-control" name="nid_email" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_type" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                                <div class="col-md-6">
                                    <input id="blood_type" type="text" class="form-control" name="blood_type" required="">
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
                <br>
                <hr>
                <br>
                <div class="card">
                    <div class="card-header">{{ __('Donor Info') }}</div>
                    <div class="card-body">

                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="card">
                    <div class="card-header">{{ __('Blood Info') }}</div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
