@extends('admin.layouts.master')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                  <a href=" {{ URL::asset('admin/category/create') }}" class="btn btn-success pull-right"><i class="fa fa-fw fa-plus" ></i>Tambah</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                       <th>ID</th>
                       <th>Name</th>
                        <th>Parent ID</th>
                        <th>Slug</th>
                        <th>Actions</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $key => $value)
                      <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        @if ( $getParent = $value->parent()->get() )
                        <td>{{ isset($getParent->name) ? $getParent->name : '-' }}</td>
                        @endif
                        <td>
              <a href="{{ URL::asset('admin/category/edit/'. $value->id) }}" class="btn btn-small btn-info">Edit</a>| <a href="{{ URL::asset('admin/category/confirm/'. $value->id) }}" class="btn btn-small btn-danger delete">Hapus</a>
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
