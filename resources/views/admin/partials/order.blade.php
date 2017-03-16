@extends('admin.layouts.master')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                  <a href=" {{ URL::asset('admin/orders/create') }}" class="btn btn-success pull-right"><i class="fa fa-fw fa-plus" ></i>Tambah</a>
                </div><!-- /.box-header -->
                   <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Address</th>
                         <th>Order At</th>
                         <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
            @foreach($orders as $key => $value)
        <tr>
          <td>{{ $value->id }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->address }}</td>
          <td>{{ $value->order_at }}</td>
          <td>

            <a href="{{ URL::asset('admin/orders/edit/'. $value->id) }}" class="btn btn-small btn-info">Edit</a>| <a href="{{ URL::asset('admin/orders/confirm/'. $value->id) }}" class="btn btn-small btn-danger">Hapus</a>
          </td>
        </tr>
    @endforeach
        </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection
@section('sidebar')
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::asset('assets/admin/dist/img/user2-160x160.jpg') }}"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
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
           <li>
                <a href="{{ URL::asset('/widget') }}">
                     <i class="fa fa-dashboard"></i> <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('admin/category') }}">
                     <i class="fa fa-book"></i> <span>Category</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::asset('admin/orders') }}">
                     <i class="fa fa-hand-paper-o"></i> <span>Orders</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@endsection
@section('scripts')
    <!-- jQuery 2.1.4 -->
    <script src="{{ URL::asset('assets/admin/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ URL::asset('assets/admin/bootstrap/js/bootstrap.min.js') }}
    "></script>
    <!-- DataTables -->
    <script src="{{ URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ URL::asset('assets/admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('assets/admin/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('assets/admin/dist/js/app.min.js') }}
    "></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ URL::asset('assets/admin/dist/js/demo.js') }}"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
@endsection
