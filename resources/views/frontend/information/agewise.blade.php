@extends('frontend.layout.formate')

@section('body')

<br>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Enter Age Range') }}</div>

                    <div class="card-body">

                        <form method="POST" action=" {{route('agebetween')}} ">

                            @csrf

                            <div class="form-group row">
                                <label for="age1" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>

                                <div class="col-md-6">
                                    <input id="age1" type="text" class="form-control" name="age1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age1=2" class="col-md-4 col-form-label text-md-right">{{ __('To') }}</label>

                                <div class="col-md-6">
                                    <input id="age2" type="text" class="form-control" name="age2">
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
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo "Total Donor : ".$totaldonor."<br>Donor Between age ".$age1." and age ".$age2." = ".$a. " = ".$percentige."%";?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<br>
<br>

    @endsection