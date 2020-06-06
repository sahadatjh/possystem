@extends('backend.master')
@section('content')
<div class="page-title">
    <div class="title_left">
      <h3>All User Are Hear</h3>
    </div>

    <div class="title_right">
      <div class="pull-right" style="margin: 10px">
        <a href="{{route('user.add')}}" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"> </i> Add New</a>
    </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Existing User List</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>email</th>
                                    <th>Access Lebel</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <img src="{{asset('public/backend/asset/images/img.jpg')}}" alt="Photo" class="img-circle" style="height:40px;width:40px">
                                    </td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->mobile}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->access_level}}</td>
                                    <td>
                                        <a href="{{route('user.view',$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
</div>
@endsection