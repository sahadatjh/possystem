@extends('backend.master')
@section('content')
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Edit User Profile</h3>
    </div>

    <div class="title_right">
      <div class="pull-right" style="margin: 10px">
        <a href="{{route('user.list')}}" class="btn btn-success btn-sm"><i class="fa fa-list" aria-hidden="true"> </i> All User</a>
    </div>
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>User Information Update <small>Update your information</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                  class="fa fa-wrench"></i></a>
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
          <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data" novalidate>
           @csrf
            <span class="section">User Information</span>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" data-validate-length-range="6" data-validate-words="1" name="name" value="{{$user->name}}" required="required" />
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="email" class='email' required="required" type="email" value="{{$user->email}}"  /></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Mobile Number<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" class='number' name="mobile" value="{{$user->mobile}}" required='required'></div>
            </div>            
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">User Level<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <select class="form-control" name="access_level">
                  <option value="">Choose option</option>
                  <option value="1" {{($user->access_level==1)?'selected':''}}>1</option>
                  <option value="2" {{($user->access_level==2)?'selected':''}}>2</option>
                  <option value="3" {{($user->access_level==3)?'selected':''}}>3</option>
                </select>
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <textarea name='address' class="form-control" rows="3"  required="required">{{$user->address}}</textarea>
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Photo<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="image" type="file" />
                <img src="{{asset($user->image)}}" alt="no image" style="height: 150px; margin: 10px;padding:3px; border: 1px solid #000">
                <img src="{{asset($user->image)}}" alt="no image" style="height: 150px; margin: 10px;padding:3px; border: 1px solid #000">
              </div>
            </div>
            <div class="ln_solid">
              <div class="form-group">
                <div class="col-md-6 offset-md-3">
            <button type='submit' class="btn btn-primary">Submit</button>
            <button type='reset' class="btn btn-success">Reset</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection