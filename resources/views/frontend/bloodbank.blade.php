@extends('frontend.layout.formate')
@section('signin')
    <a href="{{ route('frontend.login.external_blood_banklogin') }}" >
        <i class="fas fa-lock"></i> Blood Bank Sign In</a>
@endsection

@section('signup')
    <a href="{{ route('frontend.reg.external_blood_bankreg') }}" >
        <i class="far fa-user"></i> Blood Bank Registration </a>
@endsection

@section('body')
	<div class="row">
		<div class="col-md-12">
			<br/>
			<h3 align="center"> External Blood Bank Information </h3>
			<br/>
			<table class="table table-bordered">
				<tr>
					<th>Name</th>
					<th>Phone Number</th>
					<th>E-mailr</th>
					<th>Police Station</th>
					<th>Post Office</th>
					<th>City</th>
					<th>Blood Group</th>
					<th>Blood Bag Quantity</th>
				</tr>
				@foreach($external_blood_bank as $row)
				<tr>
					<td>{{$row['name']}}</td>
					<td>{{$row['phone_no']}}</td>
					<td>{{$row['email']}}</td>
					<td>{{$row['police_station']}}</td>
					<td>{{$row['post_office']}}</td>
					<td>{{$row['city']}}</td>
					<td>{{$row['blood_type']}}</td>
					<td>{{$row['blood_bag_quantity']}}</td>
				</tr>
				@endforeach
				
			</table>
		</div>
		
	</div>

@endsection