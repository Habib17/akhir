@extends('admin.layouts.master')
@section('content')
 <section class="content">
        <div class="example-modal">
            <div class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="alert alert-warning alert-dismissable">
                    <h4><i class="icon fa fa-warning"></i>Perhatian!</h4>
                    <div class="modal-body">
                    <p>Apakah anda ingin menghapus {{ $name }} dengan id = {{ $product->id }} ?</p>
                  </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <a href="{{ URL::asset('admin/product/')}}" class="btn btn-default pull-left">Tidak</a>
                     <a href="{{ URL::asset('admin/product/destroy/'. $product->id )}}" class="
                     btn btn-primary">Ya</a>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
        </section><!-- /.content -->
@endsection
