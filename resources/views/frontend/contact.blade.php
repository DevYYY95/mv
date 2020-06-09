@extends("frontend.header")

@section("content")
@if(session('status'))
	<div class="alert alert-success">
			{{ session('status')}}
		</div>
@endif
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<form action="store" method="post">
						<div class="form-group">
						    <label>Name</label>
						    <input type="text" class="form-control" placeholder="Name" name="name">
						</div>
					  	<div class="form-group">
						    <label>Email</label>
						    <input type="email" class="form-control" placeholder="Email" name="email">
					  	</div>
						<div class="form-group">
						    <label>Password</label>
						    <input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<div class="form-group">
						    <label>Mobile Number</label>
						    <input type="tel" class="form-control" placeholder="Mobile Number" name="phone_no">
						</div>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<button type="submit" class="btn btn-default" name="submit">Submit</button>
					</form>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>
@endsection