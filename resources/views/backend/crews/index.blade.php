@extends("admin.master")

@section ("header")

    <strong>All Crews</strong>

@endsection

@section ('breadcrumb-li')

    <li class="active">Crews</li>

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
	                    				<th>Crew Name</th>
	                    				<th>Crew Image</th>
	                    				<th>Type</th>
	                    				<th>Edit</th>
                                        <th>Delete</th>
	                    			</tr>
	                    		</thead>
	                    		<tbody>
	                    			@foreach($crew as $row)
	                    			<tr>
						                <td>{{$row["id"]}}</td>
						                <td>{{$row["crew_name"]}}</td>
						                <td><img src="{{asset('photo/' . $row['crew_image'])}}" alt="" class="img_db"></td>
						                <td>{{$row["type"]}}</td>
						                <td><a href="{{action('CrewController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
						                <td>
						                    <form action="{{action('CrewController@destroy',$row['id'])}}" class="delete_form" method="post">
											{{csrf_field()}}
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn btn-danger">Delete</button>
											</form>
						                </td>
	                    			</tr>
	                    			@endforeach
	                    		</tbody>
	                    		{{$crew->links()}}
	                    	</table>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
@endsection