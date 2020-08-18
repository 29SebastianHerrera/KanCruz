<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/images/descarga.jpg" class="img-circle fa fa-user" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>Bruna Gomes</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu lateral</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Panel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('panel.index')}}"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="{{route('booking.index')}}"><i class="fa fa-book"></i> Reservas</a></li>
            <li><a href="{{route('room.index')}}"><i class="fa fa-users"></i> Clientes</a></li>
            <li><a href="{{route('room.index')}}"><i class="fa fa-cutlery"></i> Servicios</a></li>
            <li><a href="{{route('room.index')}}"><i class="fa fa-bed"></i> Habitaciones</a></li>
            <li><a href="{{route('room.index')}}"><i class="fa fa-tags"></i> Tags</a></li>

          </ul>

        </li>
        <li><a href="{{Route('trial.index')}}"><i class="fa fa-internet-explorer"></i><span>Can cruz website</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
