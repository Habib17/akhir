@extends('admin.layouts.master')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                  <a href=" {{ URL::asset('admin/productimage/create') }}" class="btn btn-success pull-right"><i class="fa fa-fw fa-plus" ></i>Tambah</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                       <th>Id</th>
                      <th>Product Id</th>
                      <th>Image</th>
                      <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($productimage as $key => $value)
        <tr>
          <td>{{ $value->id }}</td>
        <td>{{ $value->product_id }}</td>
        <td>{{ $value->image }}</td>
            <td>
     <a href="{{ URL::asset('admin/productimage/edit/'. $value->id) }}" class="btn btn-small btn-info">Edit</a>| <a href="{{ URL::asset('admin/productimage/confirm/'. $value->id) }}"" class="btn btn-small btn-danger">Hapus</a>
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
