<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cinema Point</title>
	<link rel="apple-touch-icon" sizes="57x57" href="upload/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="upload/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="upload/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="upload/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="upload/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="upload/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="upload/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="upload/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="upload/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="upload/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="upload/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="upload/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="upload/favicon/favicon-16x16.png">
	<link rel="manifest" href="upload/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="upload/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
				<nav class="navbar white navbar-default">
					<center>
						<div class="logo">
							<a href="{{route('show.index')}}"><img src="{{asset('upload/logo-cp-footer.png')}}" alt=""></a>
						</div>
					</center>
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
								<span class="icon-bar top-bar"></span>
								<span class="icon-bar middle-bar"></span>
								<span class="icon-bar bottom-bar"></span>
							</button>
						</div>
						
						<div id="navbar-1" class="navbar-collapse collapse mainnav">
							<ul class="nav navbar-nav">
								<li><a href="{{url('/show')}}">Movies</a>
								</li>
								<li><a href="{{url('/about')}}">About</a>
								</li>
								<li><a href="{{url('/promotion')}}">Promotion</a>
								</li>	
								<li><a href="{{url('/contact')}}">Contact</a>
								</li>
								<li><a href="#" data-toggle="modal" data-target="#myModal">Sign In</a>
								</li>
							</ul>
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <center>
							        	<h4 class="modal-title" id="myModalLabel">Log In</h4>
							        </center>
							      </div>
							      <div class="modal-body">
							        <p>Don’t have an account ? <a href="" data-toggle="modal" data-target="#myModal1" class="signup">Sign Up</a></p>
							        <form action="save" method="post">
							        	<input type="email" class="form-control" placeholder="Email" name="email">
							        	<br>
							        	<input type="password" class="form-control" placeholder="Password" name="password">
							        	<br>
							        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        	<input type="hidden" name="_token" value="{{csrf_token()}}">
							        	<button type="submit" class="btn btn-default" name="submit">login</button>
							        </form>
							      </div>
							      <div class="modal-footer">
							        <p>I agree to the <a href="">Terms & Conditions & Privacy Policy</a></p>
							      </div>
							    </div>
							  </div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <center>
							        	<h4 class="modal-title" id="myModalLabel">Sign Up</h4>
							        </center>
							      </div>
							      <div class="modal-body">
									<form action="save" method="post">
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
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  <input type="hidden" name="_token" value="{{csrf_token()}}">
										  <button type="submit" class="btn btn-default" name="submit">Submit</button>
									</form>
							      </div>
							    </div>
							  </div>
							</div>
							<div class="search">
								<form action="{{ url('/search/') }}" method="post" role="search">
									{{csrf_field()}}
									<ul class="list-inline">
										<li><input type="text" name="search" class="form-control" placeholder="search for movies"></li>
										<li><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></li>
									</ul>
								</form>
							</div>
						</div>
						<!--/.nav-collapse -->
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<section class="content">
					@yield('content')	
				</section>
			</div>
		</div>
	</div>


@extends("frontend.footer")