@extends("admin.master")

@section ("header")

    <strong>Add New Casts</strong>
    <i class="fa fa-cart-plus fa-lg"></i>

@endsection

@section ('breadcrumb-li')

    <li><a href="{{ route('cast.index') }}">Casts</a></li>
    <li class="active">Add New Casts</li>

@endsection

@section("content")
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form action="{{route('cast.store')}}" method="post" enctype='multipart/form-data'> 
				{{csrf_field()}}
				<div class="form-group">
					<label for="title">Cast Name</label>
					<input type="text" name="cast_name" class="form-control" id="cast_name" placeholder="Cast Name" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="title">Cast Image</label>
			        <input type="file" name="cast_image" class="form-control">
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
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
@endsection