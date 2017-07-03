@extends('master')
@section('footer')
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script> 
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
            <form role="form" method="post" action="dolladeposit/create">
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
