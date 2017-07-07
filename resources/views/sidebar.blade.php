    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->fullname}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>จัดการสมาชิก</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/user/create"><i class="fa fa-circle-o"></i>สมัครสมาชิก</a></li>
            <li><a href="/user/index"><i class="fa fa-circle-o"></i>รายละเอียดสมาชิก</a></li>
            
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>Activity Log</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/activity/index"><i class="fa fa-circle-o"></i>Show History</a></li>
            
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>แจ้งการฝากเงิน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/dolladeposit/create"><i class="fa fa-circle-o"></i>ฝากเงิน</a></li>
            <li><a href="/dolladeposit"><i class="fa fa-circle-o"></i>รายละเอียดการฝากเงิน</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>แจ้งการถอนเงิน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/dollawithdraw/create"><i class="fa fa-circle-o"></i>ถอนเงิน</a></li>
            <li><a href="/dollawithdraw"><i class="fa fa-circle-o"></i>รายละเอียดการถอนเงิน</a></li>
            
          </ul>
        </li>

       
        @if(auth()->check())
                <a href="/logout">Logout</a> 
                ( {{ auth()->user()->name}} )
            @else
                <a href="/login">Login</a> 
            @endif</li>
      </ul>
    </section>