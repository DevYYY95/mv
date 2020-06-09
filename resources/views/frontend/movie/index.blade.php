@extends("frontend.header")


@section("content")
	<div class="movie-section">
		<div class="row">
			<div class="col-md-offset-4 col-md-4 col-md-offset-4 show-box">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active right"><a href="#show" aria-controls="show" role="tab" data-toggle="tab">Now Showing</a></li>
					<li role="presentation"><a href="#come" aria-controls="come" role="tab" data-toggle="tab">Coming Soon</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="show">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							@foreach($movie as $row)
								@if($row->status==0)
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 box-margin">
										<div class="img_wrap">
											<img src="{{asset('photo/' . $row['movie_image'])}}" alt="" class="img-responsive img_db">
											<div class="img_description">
												<a href="/show/{{$row['id']}}" class="box-btn">View Detail</a>
											</div>
										</div>
										<div class="text-box">
											<h5>Name : {{$row->movie_name}}</h5>
											<p>Duration : {{$row->duration}}</p>
											<p>Type : {{$row->type}}</p>
										</div>
										<a href="{{route('seat.index')}}" class="btn btn-book">Book Now</a>
									</div>
								@endif
							@endforeach
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="come">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							@foreach($movie as $row)
								@if($row->status==1)
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 box-margin">
										<div class="img_wrap">
											<img src="{{asset('photo/' . $row['movie_image'])}}" alt="" class="img-responsive img_db">
											<div class="img_description">
												<a href="/show/{{$row['id']}}" class="box-btn">View Detail</a>
											</div>
										</div>
										<div class="text-box">
											<h5>Name : {{$row->movie_name}}</h5>
											<p>Duration : {{$row->duration}}</p>
											<p>Type : {{$row->type}}</p>
										</div>
										<a href="{{route('seat.index')}}" class="btn btn-book">Book Now</a>
									</div>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection