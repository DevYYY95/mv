@extends('admin.master')

@section ('header')

   <strong>Edit Cast</strong>
    <i class="fa fa-edit fa-lg"></i>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('crew.index') }}">Casts</a></li>
    <li class="active">Edit</li>

@endsection

@section('content')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			@if(count($errors) > 0)
				<div class="alert alert-success">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<form action="{{route('crew.update',$id)}}" method="post" enctype='multipart/form-data'>
				{{csrf_field()}}
				<input type="hidden" name="_method" value="PATCH">
				<div class="form-group">
					<label for="title">Crew Name</label>
					<input type="text" name="crew_name" class="form-control" id="crew_name" placeholder="Crew Name" value="{{$crew -> crew_name}}">
				</div>
				<div class="form-group">
					<label for="title">Crew Image</label>
					<input type="file" name="crew_image" class="form-control" value="{{$crew->crew_image}}">
				</div>
				<div class="form-group">
					<label for="title">Type</label>
					<select name="type" id="type" class="form-control">
						<option>Select Type</option>
						<option value="0">Director</option>
						<option value="1">Producer</option>
						<option value="2">Writer</option>
						<option value="3">Musician</option>
					</select>
				</div>
				<button type="submit" class="btn btn-success">Edit</button>
			</form>
		</div>
	</div>
@endsection