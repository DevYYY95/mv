@extends('admin.master')

@section ('header')

   <strong>Edit Cast</strong>
    <i class="fa fa-edit fa-lg"></i>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('cast.index') }}">Casts</a></li>
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
			<form action="{{route('cast.update',$id)}}" method="post" enctype='multipart/form-data'>
				{{csrf_field()}}
				<input type="hidden" name="_method" value="PATCH">
				<div class="form-group">
					<label for="title">Cast Name</label>
					<input type="text" name="cast_name" class="form-control" id="cast_name" placeholder="Cast Name" value="{{$cast -> cast_name}}">
				</div>
				<div class="form-group">
					<label for="title">Cast Image</label>
					<input type="file" name="cast_image" class="form-control" value="{{$cast->cast_image}}">
				</div>
				<div class="form-group">
					<label for="title">Type</label>
					<select name="type" id="type" class="form-control">
						<option>Select Type</option>
						<option value="0">Director</option>
						<option value="1">Actor</option>
						<option value="2">Actress</option>
					</select>
				</div>
				<button type="submit" class="btn btn-success">Edit</button>
			</form>
		</div>
	</div>
@endsection