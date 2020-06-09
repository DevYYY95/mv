@extends('admin.master')

@section ('header')

   <strong>Edit Cinema</strong>
    <i class="fa fa-edit fa-lg"></i>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('cinema.index') }}">Cinemas</a></li>
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
			<form action="{{route('cinema.update',$id)}}" method="post" enctype='multipart/form-data'>
				{{csrf_field()}}
				<input type="hidden" name="_method" value="PATCH">
				<div class="form-group">
					<label for="title">Cinema Name</label>
					<input type="text" name="cinema_name" class="form-control" id="cinema_name" placeholder="Cast Name" value="{{$cinema -> cinema_name}}">
				</div>
				<div class="form-group">
					<label for="title">Cinema Address</label>
					<input type="text" name="address" class="form-control" id="address" placeholder="address" value="{{$cinema ->address}}">
				</div>
				<div class="form-group">
					<label for="title">Cinema Phone Number</label>
					<input type="text" name="cinema_phone" class="form-control" id="cinema_phone" placeholder="Cinema Phone" value="{{$cinema -> cinema_phone}}">
				</div>
				<button type="submit" class="btn btn-success">Edit</button>
			</form>
		</div>
	</div>
@endsection