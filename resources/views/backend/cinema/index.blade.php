@extends("admin.master")

@section ("header")

    <strong>All Cinemas</strong>

@endsection

@section ('breadcrumb-li')

    <li class="active">Cinemas</li>
    
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
	                    				<th>Cinema Name</th>
	                    				<th>Cinema Address</th>
	                    				<th>Cinema Phone</th>
	                    				<th>Edit</th>
                                        <th>Delete</th>
	                    			</tr>
	                    		</thead>
	                    		<tbody>
	                    			@foreach($cinema as $row)
	                    			<tr>
						                <td>{{$row["id"]}}</td>
						                <td>{{$row["cinema_name"]}}</td>
						                <td>{{$row["address"]}}</td>
						                <td>{{$row["cinema_phone"]}}</td>
						                <td><a href="{{action('CinemaController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
						                <td>
						                    <form action="{{action('CinemaController@destroy',$row['id'])}}" class="delete_form" method="post">
											{{csrf_field()}}
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn btn-danger">Delete</button>
											</form>
						                </td>
	                    			</tr>
	                    			@endforeach
	                    		</tbody>
	                    		{{$cinema->links()}}
	                    	</table>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
@endsection