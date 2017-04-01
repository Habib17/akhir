@extends('admin.layouts.master')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
<div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                  <a href=" {{ URL::asset('admin/category/create') }}" class="btn btn-success pull-right"><i class="fa fa-fw fa-plus" ></i>Tambah</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                       <th>ID</th>
                       <th>Name</th>
                        <th>Product ID</th>
                         <th>Image</th>
                       

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($image as $key => $value)
                      <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->product_id }}</td>
                        <td>{{ $value->image }}
                        </td>
                        <td>
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
