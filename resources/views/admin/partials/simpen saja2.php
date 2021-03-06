@extends('admin.layouts.master')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
               <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
  <form class="form-horizontal"  method="post" enctype="multipart/form-data">
    @if (count($errors) > 0) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    <img src="/images/{{ Session::get('path') }}">
    @endif
                  <div class="box-body">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Product Id</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="product_id"  type="text" placeholder="Product Id" >
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image" id="image" onchange="loadFile(event)">
                     </div>
                     </div>
                     <div class="form-group">
                    <img id="image_pic" height="100" width="100"/>
                </div>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
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

