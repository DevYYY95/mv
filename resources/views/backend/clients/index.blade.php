@extends("admin.master")

@section ("header")

    <strong>All Clients</strong>

@endsection

@section ('breadcrumb-li')

    <li class="active">Clients</li>

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
                                    <th>Clients Name</th>
                                    <th>Clients Email</th>
                                    <th>Clients Password</th>
                                    <th>Clients Phone Number</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach($client as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->password}}</td>
                                        <td>{{$row->phone_no}}</td>
                                        <td>{{$row->created_at}}</td>
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