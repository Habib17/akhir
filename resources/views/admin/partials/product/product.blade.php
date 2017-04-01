@extends('admin.layouts.master')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
<div class="box">
                <div class="box-header">
                 <h3 class="box-title">{{$title}}</h3>
                  <a href=" {{ URL::asset('admin/product/create') }}" class="btn btn-success pull-right"><i class="fa fa-fw fa-plus" ></i>Tambah</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                       <th>Id</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category Id</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Deskription</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $key => $value)

                        
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->code }}</td>
            <td>{{ $value->name }}</td>
            <td> @if ( $getParent = $value->parent()->get() )
                        {{ isset($getParent[0]->name) ? $getParent[0]->name : '-' }}
                        @endif</td>
            <td>{{ $value->qty }}</td>
             <td>{{ $value->price }}</td>
            <td>{{ $value->deskription }}</td>
            <td>
                <a href="{{ URL::asset('admin/product/edit/'. $value->id) }}" class="btn btn-small btn-info">Edit</a>| <a href="{{ URL::asset('admin/product/confirm/'. $value->id) }}" class="btn btn-small btn-danger">Hapus</a>

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
