@extends("admin.master")

@section ("header")

    <strong>All Movies</strong>

@endsection

@section ('breadcrumb-li')

    <li class="active">Movies</li>

@endsection

@section("content")
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="box box-primary">
	            <div class="box-body">
	                <div class="dataTables_wrapper form-inline dt-bootstrap">
	                    <div class="table-responsive">
	                    	<table class="table table-bordered table-hover dataTable">
	                    		<thead>
	                    			<tr>
	                    				<th>#</th>
	                    				<th>Movie Name</th>
	                    				<th>Casts & Crews</th>
	                    				<th>Cinemas</th>
	                    				<th>Movie Image</th>
	                    				<th>Description</th>
	                    				<th>Type</th>
	                    				<th>Duration</th>
	                    				<th>Time</th>
	                    				<th>Start Date</th>
	                    				<th>End Date</th>
	                    				<th>Status</th>
	                    				<th>Edit</th>
                                        <th>Delete</th>
	                    			</tr>
	                    		</thead>
	                    		<tbody>
	                    			@foreach($movie as $row)
	                    			<tr>
						                <td>{{$row["id"]}}</td>
						                <td>{{$row["movie_name"]}}</td>
						                <td>
							            	@foreach($row->casts as $movs)
												{{$movs->cast_name}}
											@endforeach
							            </td>
							            <td>
							            	@foreach($row->cinemas as $movs)
												{{$movs->cinema_name}}
											@endforeach
							            </td>
						                <td><img src="{{asset('photo/' . $row['movie_image'])}}" alt="" class="img_db"></td>
						                <td>{{$row["description"]}}</td>
						                <td>{{$row["type"]}}</td>
						                <td>{{$row["duration"]}}</td>
						                <td>{{$row["time"]}}</td>
						                <td>{{$row["start_date"]}}</td>
						                <td>{{$row["end_date"]}}</td>
						                <td>{{$row["status"]}}</td>
						                <td><a href="{{action('MovieController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
						                <td>
						                    <form action="{{action('MovieController@destroy',$row['id'])}}" class="delete_form" method="post">
											{{csrf_field()}}
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn btn-danger">Delete</button>
											</form>
						                </td>
	                    			</tr>
	                    			@endforeach
	                    		</tbody>
	                    	</table>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
@endsection