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
{{-- <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>  --}}
@endsection
@section('content')
    <section class="content-header">
    
     
 <h1>
        รายละเอียดของข้อมูลทั้งหมด
        <small>data all</small>
      </h1>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                        <td>#</td>
                        <td>ชือ</td>
                        <td>กิจกรรม</td>
                        <td>เวลาทำการ</td>
                        <td></td>
                </tr>
                </thead>
                @foreach($activitylog as $w)
                    <tr>
                        <td>{{ $w->id }}</td>
                        <td>{{ $w->user->fullname }}</td>
                        <td>{{ $w->message }}</td>
                        <td>{{ $w->created_at }}</td>
                        
                        <td><a href="#" class="btn btn-default btn-xs ">Edit</a>
                       
                       <form action="#" method="POST">
                        {{ csrf_field() }}
            
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                        </td>
                        </form>
                       </td>
                    </tr>
                @endforeach
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    {{ $activitylog->links() }}
@endsection