@extends("frontend.header")

@section("content")
	<div class="detail-section">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<img src="{{asset('photo/' . $movie['movie_image'])}}" alt="" class="img_db_1">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h4><strong>Movie Name:</strong> {{$movie->movie_name}}</h4>
				<h4><strong>Casts $ Crews</strong></h4>
					<ul class="list-inline">
						@foreach($movie->casts as $movs)
						<li>
							@if($movs->type==0)
							<img src="{{asset('photo/' . $movs['cast_image'])}}" alt="" class="img-responsive img-circle img-ac">
							{{$movs->cast_name}}
							<p>Director</p>
							@elseif($movs->type==1)
							<img src="{{asset('photo/' . $movs['cast_image'])}}" alt="" class="img-responsive img-circle img-ac">
							{{$movs->cast_name}}
							<p>Actor</p>
							@elseif($movs->type==2)
							<img src="{{asset('photo/' . $movs['cast_image'])}}" alt="" class="img-responsive img-circle img-ac">
							{{$movs->cast_name}}
							<p>Actress</p>
							@endif
						</li>
					@endforeach
					</ul>
				<h4><strong>Description</strong></h4>
				<p>{{$movie->description}}</p>
				<h4><strong>Start Showing Date:</strong> {{$movie->start_date}}</h4>
				<h4><strong>End Showing Date:</strong> {{$movie->end_date}}</h4>
				<h4><strong>Showing Time :</strong></h4>
					<?php $a = $movie->time;?>
					<ul class="list-inline">
						<?php foreach(explode(",", $a) as $b){ ?>
							<li>
								<a href="{{route('seat.index')}}" class="btn btn-time">{{$b}}</a>
							</li>
						<?php }?>
					</ul>
					<a href="{{route('seat.index')}}" class="btn btn-book-detail">Book Now</a>
			</div>
		</div>
	</div>
@endsection