@extends('frontend.layout.formate')
@section('signin')
    <a href="{{ route('frontend.login.donor_at_blood_banklogin') }}" >
        <i class="fas fa-lock"></i> Donor Sign In</a>
@endsection

@section('signup')
    <a href="{{ route('frontend.reg.donor_at_blood_bankreg') }}" >
        <i class="far fa-user"></i> Donor Registration </a>
@endsection

@section('body')
	<div class="row">
		<div class="col-md-12">
			<br/>
			<h3 align="center"> Donor Interested to donate at blood bank </h3>
			<br/>
			<table class="table table-bordered">
				<tr>
					<tr>
						<th>Name</th>
						<th>Blood Group</th>
						<th>Phone Number</th>
						<th>E-mail</th>
						<th>Police Station</th>
						<th>Post Office</th>
						<th>City</th>
					</tr>
				</tr>
					@foreach($donor_at_blood_bank as $row)
				<tr>
					<td>{{$row['name']}}</td>
					<td>{{$row['blood_type']}}</td>
					<td>{{$row['phone_no']}}</td>
					<td>{{$row['email']}}</td>
					<td>{{$row['police_station']}}</td>
					<td>{{$row['post_office']}}</td>
					<td>{{$row['city']}}</td>
				</tr>

				@endforeach
				
			</table>
		</div>
		
	</div>

@endsection