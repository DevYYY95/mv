@extends("admin.master")

@section ("header")

    <strong>Add New Movie</strong>
    <i class="fa fa-cart-plus fa-lg"></i>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('movie.index') }}">Movies</a></li>
    <li class="active">Add New Movie</li>

@endsection

@section("content")
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form action="{{route('movie.store')}}" method="post" enctype='multipart/form-data'> 
				{{csrf_field()}}
				<div class="form-group">
					<label for="title">Movie Name</label>
					<input type="text" name="movie_name" class="form-control" id="movie_name" placeholder="Movie Name" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Casts & Crews</label>
					<select class="select2-multi form-control" name="states[]" multiple="multiple">
						@foreach($cast as $cs)
							<option value="{{$cs->id}}">{{$cs->cast_name}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="title">Cinemas</label>
					<select class="select2-multi-form form-control" name="tags[]" multiple="multiple">
						@foreach($cinema as $cs)
							<option value="{{$cs->id}}">{{$cs->cinema_name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="title">Movie Image</label>
			        <input type="file" name="movie_image" class="form-control">
			    </div>
				<div class="form-group">
					<label for="title">Description</label>
					<textarea name="description" class="form-control" id="description" placeholder="Description" value="{{old('title')}}"></textarea>
				</div>
				<div class="form-group">
					<label for="title">Movie Type</label>
					<input type="text" name="type" class="form-control" id="type" placeholder="Movie Type" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Duration</label>
					<input type="text" name="duration" class="form-control" id="type" placeholder="Duration" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Time</label>
					<input type="text" name="time" class="form-control" id="time" placeholder="Time" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Start Date</label>
					<input type="text" name="start_date" class="form-control" id="start_date" placeholder="Start Date" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">End Date</label>
					<input type="text" name="end_date" class="form-control" id="end_date" placeholder="End Date" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Status</label>
					<select name="status" id="status" class="form-control">
						<option>Select Status</option>
						<option value="0">Now Showing</option>
						<option value="1">Coming Soon</option>
					</select>
				</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
@endsection