@extends('admin.layouts.master-home')
@section('title','Admin')
@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3> <button type="submit" class="btn btn-success pull-right"><i class="fa fa-fw fa-plus"></i>Tambah</button>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                    $no = 1;
                    ?>
                      <td>14314</td>
                      <td>Muhin</td>
                      <td>02/11/1995</td>
                      <td>Laki-laki</td>
                       <td>Kediri</td>
                        <td><a>Edit</a>| <a>Hapus</a></td>
                    </tr>
                     <?php
                     $no++ ;
                       ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->

               
          </div><!-- /.row (main row) -->




        </section>


      </div><!-- /.content-wrapper -->

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
@endsection