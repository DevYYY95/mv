@extends("frontend.header")

@section("content")
@if(session('status'))
	<div class="alert alert-success">
			{{ session('status')}}
		</div>
@endif
<div class="promotion-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
				<h1>Promotion Items</h1>
				<p>
					We have promotion package for every weekend. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>***If you fully interested ,to get our information item please fill bellow form.</p>
				<strong> If you already sign in, don't need to sign up again. We will send inform every week to your email.</strong>
			</div>
		</div>
		<div class="row form-section">
			<div class="col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
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
		</div>
	</div>
</div>

@endsection