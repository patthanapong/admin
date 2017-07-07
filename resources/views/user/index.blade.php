@extends('master')
@section('footer')
{{-- <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>  --}}
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
    <section class="content-header">
 <h1>
        From User
        <small>data all user</small>
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
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach($user as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->fullname }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                        
                        <a href="/edit/{{ $u->id }}" class="btn btn-default">Edit</a></td>
                       <td>
                       <form action="/index/{{ $u->id }}" method="POST">
                        {{ csrf_field() }}
            
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" value="Delete">
            
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
    {{ $user->links() }}
@endsection