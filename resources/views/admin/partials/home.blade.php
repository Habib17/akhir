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