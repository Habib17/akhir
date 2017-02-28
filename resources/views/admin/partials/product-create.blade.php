@extends('admin.layouts.master-home')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/admin/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin/plugins/datatables/dataTables.bootstrap.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@endsection
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
               <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
  <form class="form-horizontal"  method="post">
    @if (count($errors) > 0) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="box-body">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="name"  type="text" placeholder="Name">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Deskription</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="deskription"  type="text" placeholder="Deskription">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="price"  type="text" placeholder="Price">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Qty</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="qty"  type="text" 
                        placeholder="Qty">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Category Id</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="category_id"  type="text"
                        placeholder="Category Id" >
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Code</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="code"  type="text" placeholder="Code">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-success pull-right">Save</button>
                  </div><!-- /.box-footer -->
                </form>
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
           <li class="active">
                <a href="{{ URL::asset('/widget') }}">
                     <i class="fa fa-dashboard"></i> <span>Home</span>
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
