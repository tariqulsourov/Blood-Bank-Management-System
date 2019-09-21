@extends('frontend.layout.dashformate')

@section('body')
    <h3 align="center">Send SMS for donation request</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Put Information') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{route('smssent')}}">

                            @csrf

                            <div class="form-group row">
                                <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Enter Phone No ') }}</label>

                                <div class="col-md-6">
                                    <input id="phonenumber" type="text" class="form-control" name="phonenumber" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Write Message') }}</label>

                                <div class="col-md-6">
                                    <textarea id="message" class="form-control" name="message" ></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __(' Send SMS ') }}
                                    </button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--//sms Form end-->

    <!--//donor info-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 align="center"> Donor Interested to donate at blood bank </h3>
                    <br/>
                    <table class="table table-bordered">

                            <tr>
                                <th>Name</th>
                                <th>Blood Group</th>
                                <th>Phone Number</th>

                            </tr>
                        @foreach($donor_to_send_sms as $row)
                            <tr>
                                <td>{{$row['name']}}</td>
                                <td>{{$row['blood_type']}}</td>
                                <td>{{$row['phone_no']}}</td>
                            </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection