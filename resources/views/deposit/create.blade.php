@extends('master')
@section('head')
    {{-- ปฏิทิน เริ่ม --}}
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui.css')}}" />
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui-timepicker-addon.css')}}" />

  <script src="{{asset('date/jquery-1.10.2.min.js')}}"></script>
  <script  src="{{asset('date/jquery-ui.min.js')}}"></script>

  <script  src="{{asset('date/jquery-ui-timepicker-addon.js')}}"></script>
  <script  src="{{asset('date/jquery-ui-sliderAccess.js')}}"></script>

        {{-- ปฏิทินจบ --}}
@endsection
@section('footer')
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script> 
@endsection

@section('content')


<script type="text/javascript">
    $(function(){
    	$("#dateInput").datetimepicker({
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss'
    	});
    });

    </script>

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
            <form role="form" method="post" action="/dolladeposit">
            	{{ csrf_field() }}
              <div class="box-body">
              	<div class="col-md-6">
	                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	                  <label for="username">username</label>
	                  <input type="text" class="form-control" id="username" placeholder="Enter Name" name="username" value="{{ old('username') }}">

				        @if ($errors->has('fullname'))
				            <span class="help-block">
				                <strong>{{ $errors->first('fullname') }}</strong>
				            </span>
				        @endif   	                  
	                </div>

	                <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }}">
	                  <label for="balance">balance</label>
	                  <input type="text" class="form-control" id="balance" placeholder="balance" name="balance" value="{{ old('balance') }}">

				        @if ($errors->has('email'))
				            <span class="help-block">
				                <strong>{{ $errors->first('email') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

	                <div class="form-group{{ $errors->has('bankdeposit') ? ' has-error' : '' }}">
	                  <label for="bankdeposit">bankdeposit</label>
	                  <input type="bankdeposit" class="form-control" id="bankdeposit" placeholder="New Password" name="bankdeposit" value="{{ old('bankdeposit') }}">

				        @if ($errors->has('bankdeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('bankdeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

                     <div class="form-group{{ $errors->has('accountnumberdeposit') ? ' has-error' : '' }}">
	                  <label for="accountnumberdeposit">accountnumberdeposit</label>
	                  <input type="accountnumberdeposit" class="form-control" id="accountnumberdeposit" placeholder="New Password" name="accountnumberdeposit" value="{{ old('accountnumberdeposit') }}">

				        @if ($errors->has('accountnumberdeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('accountnumberdeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

                    <div class="form-group{{ $errors->has('accontnamedeposit') ? ' has-error' : '' }}">
	                  <label for="accontnamedeposit">accontnamedeposit</label>
	                  <input type="accontnamedeposit" class="form-control" id="accontnamedeposit" placeholder="accontnamedeposit" name="accontnamedeposit" value="{{ old('accontnamedeposit') }}">

				        @if ($errors->has('accontnamedeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('accontnamedeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>
                    
                     <div class="form-group{{ $errors->has('datetime') ? ' has-error' : '' }}">
	                  <label for="datetime">datetime</label>
	                  <input type="datetime" class="form-control" id="dateInput" placeholder="datetime" name="datetime">

				        @if ($errors->has('datetime'))
				            <span class="help-block">
				                <strong>{{ $errors->first('datetime') }}</strong>
				            </span>
				        @endif   		                  
	                </div>
                    
                      <div class="form-group{{ $errors->has('channeldeposit') ? ' has-error' : '' }}">
	                  <label for="channeldeposit">channeldeposit</label>
	                  <input type="channeldeposit" class="form-control" id="channeldeposit" placeholder="channeldeposit" name="channeldeposit">

				        @if ($errors->has('channeldeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('channeldeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>
	                
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                  <label for="tel">tel</label>
	                  <input type="tel" class="form-control" id="tel" placeholder="tel" name="tel">

				        @if ($errors->has('tel'))
				            <span class="help-block">
				                <strong>{{ $errors->first('tel') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                  <label for="opinion">opinion</label>
	                  <input type="opinion" class="form-control" id="opinion" placeholder="opinion" name="opinion">

				        @if ($errors->has('opinion'))
				            <span class="help-block">
				                <strong>{{ $errors->first('opinion') }}</strong>
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
