@extends('master')
@section('footer')
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script> 
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
@endsection