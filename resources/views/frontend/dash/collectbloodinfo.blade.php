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
                    <div class="card-header">{{ __('Donor Information') }}</div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                            <tr>
                                <th>NID</th>
                                <th>Name</th>
                                <th>Blood Group</th>
                                <th>Phone Number</th>
                                <th>Last Donation Date</th>
                            </tr>
                            </tr>
                            @foreach($donorinfo as $row)
                                <tr>
                                    <td>{{$row['NID']}}</td>
                                    <td>{{$row['name']}}</td>
                                    <td>{{$row['blood_type']}}</td>
                                    <td>{{$row['phone_no']}}</td>
                                    <td>{{$row['last_donation_date']}}</td>
                                </tr>

                            @endforeach

                        </table>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="card">
                        <div class="card-header">{{ __('Blood Bag Information') }}</div>
                        <div class="card-body">

                            <table class="table table-bordered">
                                <tr>
                                <tr>
                                    <th>Bag ID</th>
                                    <th>Branch ID</th>
                                    <th>Blood Group</th>
                                    <th>Stored Date</th>
                                    <th>Expire Date</th>
                                </tr>
                                </tr>
                                @foreach($bloodinfo as $row1)
                                    <tr>
                                        <td>{{$row1['bag_id']}}</td>
                                        <td>{{$row1['branch_id']}}</td>
                                        <td>{{$row1['blood_type']}}</td>
                                        <td>{{$row1['stored_date']}}</td>
                                        <td>{{$row1['exp_date']}}</td>
                                    </tr>

                                @endforeach

                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
