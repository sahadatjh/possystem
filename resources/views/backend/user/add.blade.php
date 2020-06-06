@extends('backend.master')
@section('content')
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Add New User</h3>
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
          <h2>User create form <small>give your all information</small></h2>
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
          <form class="" action="{{route('user.store')}}" method="post" novalidate>
           
            <span class="section">User Information</span>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" data-validate-length-range="6" data-validate-words="1" name="name"
                  placeholder="ex. Sahadat Hossain" required="required" />
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="email" class='email' required="required" type="email"  placeholder="ex. sahadat@gmail.com"/></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Mobile Number<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="number" class='number' name="number" required='required'></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="password" name="password" data-validate-length="6,8"
                  required='required' /></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat password<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="password" name="password2" data-validate-linked='password'
                  required='required' /></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="tel" class='tel' name="phone" required='required'
                  data-validate-length-range="8,20" /></div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">message<span
                  class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <textarea required="required" name='message'></textarea></div>
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