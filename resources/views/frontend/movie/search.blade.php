@extends("frontend.header")

@section("content")
	<div class="movie-section">
		@if(isset($details))
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					@foreach($details as $row)
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<h4>Type:{{$row->type}}</h4>
							<div class="img_wrap">
								<img src="{{asset('photo/' . $row['movie_image'])}}" alt="" class="img-responsive img_db">
								<div class="img_description">
									<a href="" class="box-btn">View Detail</a>
								</div>
							</div>
							<div class="text-box">
								<h5>{{$row->movie_name}}</h5>
								<p>Duration Time: {{$row->duration}}</p>
								<p>{{$row->type}}</p>
							</div>
							<a href="{{route('seat.index')}}" class="btn btn-book">Book Now</a>			
						</div>
					@endforeach
				</div>
			</div>
		@else
		<div class="alert alert-danger alert-box text-center" role="alert">
			 <p>Sorry, No Item Match</p>
		</div>
		@endif
	</div>
@endsection