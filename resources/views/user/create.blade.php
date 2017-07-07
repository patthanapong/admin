@extends('master')
@section('head')
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
@endsection
@section('footer')
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="../../dist/js/demo.js"></script> --}}
 
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Information
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 ">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ข้อมูลส่วนตัว</h3>
            </div>
            <!-- /.box-header -->
			@if (session()->has('status'))
				<div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                <h4><i class="icon fa fa-check"></i> Success!</h4>
	                {{ session('status') }}
              	</div>			
			@endif             
            <!-- form start -->
            <form role="form" method="post" action="/user">
            	{{ csrf_field() }}
              <div class="box-body">
              	<div class="col-md-6">
	                <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
	                  <label for="name">ชื่อ</label>
	                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="fullname" value="{{ old('fullname') }}">

				        @if ($errors->has('fullname'))
				            <span class="help-block">
				                <strong>{{ $errors->first('fullname') }}</strong>
				            </span>
				        @endif   	                  
	                </div>

	                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                  <label for="Email">E-mail</label>
	                  <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">

				        @if ($errors->has('email'))
				            <span class="help-block">
				                <strong>{{ $errors->first('email') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

	                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                  <label for="Password">รหัสผ่าน</label>
	                  <input type="password" class="form-control" id="Password" placeholder="New Password" name="password">

				        @if ($errors->has('password'))
				            <span class="help-block">
				                <strong>{{ $errors->first('password') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                  <label for="Password">ยืนยันรหัสผ่าน</label>
	                  <input type="password" class="form-control" id="Password" placeholder="New Password" name="retypepassword">

				        @if ($errors->has('password'))
				            <span class="help-block">
				                <strong>{{ $errors->first('password') }}</strong>
				            </span>
				        @endif   		                  
	                </div>
                    
                    

	                
	              </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit"  class="btn btn-primary " value="Save">
                <input type="reset"  class="btn btn-danger " value="Cancel">
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection
