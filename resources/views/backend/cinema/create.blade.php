@extends("admin.master")

@section ("header")

    <strong>Add New Cinema</strong>
    <i class="fa fa-cart-plus fa-lg"></i>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('cinema.index') }}">Cinemas</a></li>
    <li class="active">Add New Cinema</li>

@endsection

@section("content")
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form action="{{route('cinema.store')}}" method="post"> 
				{{csrf_field()}}
				<div class="form-group">
					<label for="title">Cinema Name</label>
					<input type="text" name="cinema_name" class="form-control" id="cinema_name" placeholder="Cinema Name" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Cinema Address</label>
					<input type="text" name="address" class="form-control" id="address" placeholder="Cinema Address" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Cinema Phone</label>
					<input type="text" name="cinema_phone" class="form-control" id="cinema_phone" placeholder="Cinema Phone" value="{{old('title')}}">
				</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
@endsection