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
                        <td>#</td>
                        <td>Username</td>
                        <td>Balance</td>
                        <td>BankDeposit</td>
                        <td>AccountNumberdeposit</td>
                        <td>AccountNamedeposit</td>
                        <td>DateTime</td>
                        <td>ChannelDeposit</td>
                        <td>Tel.</td>
                        <td>Opinion</td>
                        <td>Action</td>
                </tr>
                </thead>
                @foreach($deposit as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->balance }}</td>
                        <td>{{ $d->bankdeposit }}</td>
                        <td>{{ $d->accountnumberdeposit }}</td>
                        <td>{{ $d->accontnamedeposit }}</td>
                        <td>{{ $d->datetime }}</td>
                        <td>{{ $d->channeldeposit }}</td>
                        <td>{{ $d->tel }}</td>
                        <td>{{ $d->opinion }}</td>
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
@endsection