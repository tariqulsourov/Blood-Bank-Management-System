@extends('frontend.layout.formate')
@section('signin')
    <a href="{{ route('frontend.login.direct_donorlogin') }}" >
        <i class="fas fa-lock"></i> Donor Sign In</a>
    @endsection

@section('signup')
    <a href="{{ route('frontend.reg.direct_donorreg') }}" >
        <i class="far fa-user"></i> Donor Registration </a>
    @endsection

@section('body')
	<div class="row">
		<div class="col-md-12">
			<br/>
			<h3 align="center"> Donor List,Who want to donate directly to patient </h3>
			<br/>
			<table class="table table-bordered">
				<tr>
					<th>Name</th>
					<th>Blood Group</th>
					<th>Phone Number</th>
					<th>E-mail</th>
					<th>Police Station</th>
					<th>Post Office</th>
					<th>City</th>
				</tr>
				@foreach($direct_donor as $row)
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
