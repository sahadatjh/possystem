<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Point of Sell </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/backend/asset/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/backend/asset/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/backend/asset/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('public/backend/asset/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('public/backend/asset/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('public/backend/asset/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/backend/asset/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!--Datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    {{-- Toster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <!-- Custom Theme Style -->
    <link href="{{asset('public/backend/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('backend.sidebar')

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span>Change Password</span>
                      </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')

         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
<script type="text/javascript">
  function check_delete(){
    var chk = confirm("Are you sure DELETE this???");
    if (chk) {
      return true;
    } else {
      return false;
    }
  }
</script>
{{-- form field validation --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('public/backend/asset')}}/validator/multifield.js"></script>
    <script src="{{asset('public/backend/asset')}}/validator/validator.js"></script>
  
    <script>
      // initialize a validator instance from the "FormValidator" constructor.
      // A "<form>" element is optionally passed as an argument, but is not a must
      var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[1]);
      // on form "submit" event
      document.forms[1].onsubmit = function (e) {
        var submit = true,
          validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
      };
      // on form "reset" event
      document.forms[1].onreset = function (e) {
        validator.reset();
      };
      // stuff related ONLY for this demo page:
      $('.toggleValidationTooltips').change(function () {
        validator.settings.alerts = !this.checked;
        if (this.checked)
          $('form .alert').remove();
      }).prop('checked', false);
    </script>
  {{-- end form field validator --}}


    <!-- jQuery -->
    <script src="{{asset('public/backend/asset/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/backend/asset/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('public/backend/asset/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('public/backend/asset/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('public/backend/asset/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('public/backend/asset/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- morris.js -->
    <script src="{{asset('public/backend/asset/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('public/backend/asset/morris.js/morris.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('public/backend/asset/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('public/backend/asset/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('public/backend/asset/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('public/backend/asset/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/backend/asset/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('public/backend/asset/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('public/backend/asset/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('public/backend/asset/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('public/backend/asset/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('public/backend/asset/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('public/backend/asset/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('public/backend/asset/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('public/backend/asset/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('public/backend/asset/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('public/backend/asset/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('public/backend/asset/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('public/backend/asset/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    {{-- Toster --}}
    <script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>
    <!--Datatables-->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    {{-- Datatables --}}
<script type="text/javascript">
  $(document).ready(function() {
    $('#mytable').DataTable();
  } );
  </script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/backend/js/custom.min.js')}}"></script>
  

    <!--code for show image when select-->
  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    $("#imgInp").change(function() {
      readURL(this);
    });
    </script>
  {{-- code for Toster --}}
  <script type="text/javascript">
    @if (Session::has('success')) 
      toastr.success("{{ Session::get('success')}}");
    @elseif(Session::has('error'))
      toastr.error("{{ Session::get('error')}}");
      // var type="{{ Session::get('alert-type','info')}}"
      // switch(type){
      //   case 'info':
      //     toastr.info("{{ Session::get('messege')}}");
      //     break;
      //   case 'success':
      //     toastr.success("{{ Session::get('messege')}}");
      //     break;
      //   case 'warning':
      //     toastr.warning("{{ Session::get('messege')}}");
      //     break;
      //   case 'error':
      //     toastr.error("{{ Session::get('messege')}}");
      //     break;
      // }
    @endif
  </script>
  </body>
</html>
