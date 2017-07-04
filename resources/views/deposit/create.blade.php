@extends('master')
@section('head')
{{-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
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
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> --}}

    {{-- ปฏิทิน เริ่ม --}}
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui.css')}}" />
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui-timepicker-addon.css')}}" />



        {{-- ปฏิทินจบ --}}
@endsection
@section('footer')
{{-- <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>  --}}
  <script src="{{asset('date/jquery-1.10.2.min.js')}}"></script>
  <script  src="{{asset('date/jquery-ui.min.js')}}"></script>

  <script  src="{{asset('date/jquery-ui-timepicker-addon.js')}}"></script>
  <script  src="{{asset('date/jquery-ui-sliderAccess.js')}}"></script>

	<script type="text/javascript">
		$(function(){
			$("#dateInput").datetimepicker({
			dateFormat: 'yy-mm-dd',
			timeFormat: 'HH:mm:ss'
			});
		});

	</script>
@endsection

@section('content')




    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Deposit Information
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
              <h3 class="box-title">แจ้งการฝากเงิน</h3>
            </div>
            <!-- /.box-header -->
			{{-- @if (session()->has('status'))
				<div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                <h4><i class="icon fa fa-check"></i> Success!</h4>
	                {{ session('status') }}
              	</div>			
			@endif              --}}
            <!-- form start -->
            <form role="form" method="post" action="/dolladeposit">
            	{{ csrf_field() }}
              <div class="box-body">
              	<div class="col-md-6">
	                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	                  <label for="username">ชื่อ-นามสกุล</label>
	                  <input type="text" class="form-control" id="username"  name="username" value="{{ old('username') }}">

				        @if ($errors->has('username'))
				            <span class="help-block">
				                <strong>{{ $errors->first('username') }}</strong>
				            </span>
				        @endif   	                  
	                </div>

	                <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }}">
	                  <label for="balance">จำนวนเงิน</label>
	                  <input type="text" class="form-control" id="balance"  name="balance" value="{{ old('balance') }}">

				        @if ($errors->has('balance'))
				            <span class="help-block">
				                <strong>{{ $errors->first('balance') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

	                <div class="form-group{{ $errors->has('bankdeposit') ? ' has-error' : '' }}">
	                  <label for="bankdeposit">ธนาคารที่ต้องการฝาก</label>
	                  <input type="text" class="form-control" id="bankdeposit"  name="bankdeposit" value="{{ old('bankdeposit') }}">

				        @if ($errors->has('bankdeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('bankdeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

                     <div class="form-group{{ $errors->has('accountnumberdeposit') ? ' has-error' : '' }}">
	                  <label for="accountnumberdeposit">เลขที่บัญชี</label>
	                  <input type="text" class="form-control" id="accountnumberdeposit"  name="accountnumberdeposit" value="{{ old('accountnumberdeposit') }}">

				        @if ($errors->has('accountnumberdeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('accountnumberdeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

                    <div class="form-group{{ $errors->has('accontnamedeposit') ? ' has-error' : '' }}">
	                  <label for="accontnamedeposit">ชื่อบัญชี</label>
	                  <input type="text" class="form-control" id="accontnamedeposit"  name="accontnamedeposit" value="{{ old('accontnamedeposit') }}">

				        @if ($errors->has('accontnamedeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('accontnamedeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>
                    
                     <div class="form-group{{ $errors->has('datetime') ? ' has-error' : '' }}">
	                  <label for="datetime">วัน/เวลา</label>
	                  <input type="text" class="form-control" id="dateInput"  name="datetime" value="{{ old('datetime') }}">

				        @if ($errors->has('datetime'))
				            <span class="help-block">
				                <strong>{{ $errors->first('datetime') }}</strong>
				            </span>
				        @endif   		                  
	                </div>
                    
                      <div class="form-group{{ $errors->has('channeldeposit') ? ' has-error' : '' }}">
	                  <label for="channeldeposit">ช่องการในการฝากเงิน</label>
	                  <input type="text" class="form-control" id="channeldeposit"  name="channeldeposit" value="{{ old('channeldeposit') }}">

				        @if ($errors->has('channeldeposit'))
				            <span class="help-block">
				                <strong>{{ $errors->first('channeldeposit') }}</strong>
				            </span>
				        @endif   		                  
	                </div>
	                
                    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
	                  <label for="tel">เบอร์โทรศัพท์</label>
	                  <input type="text" class="form-control" id="tel"  name="tel" value="{{ old('tel') }}">

				        @if ($errors->has('tel'))
				            <span class="help-block">
				                <strong>{{ $errors->first('tel') }}</strong>
				            </span>
				        @endif   		                  
	                </div>

                    <div class="form-group{{ $errors->has('opinion') ? ' has-error' : '' }}">
	                  <label for="opinion">ความคิดเห็น</label>
	                  <textarea type="text" class="form-control" rows="3" id="opinion" name="opinion" value="{{ old('opinion') }}"></textarea>

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
                <input type="submit"  class="btn btn-success " value="บันทึก">
                <input type="reset"  class="btn btn-danger " value="ยกเลิก">
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
