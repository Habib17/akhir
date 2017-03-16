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
                        <input class="form-control" name="name"  value="{{ $product->name }}"
                        type="text" placeholder="Name">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Deskription</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="deskription" value="{{$product->deskription}}" type="text" placeholder="Deskription">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="price" value="{{$product->price}}" type="text" placeholder="Price">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Qty</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="qty"  type="text" value="{{$product->qty}}" 
                        placeholder="Qty">
                    </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            <select name="parent_id">
                                @foreach ( $categories as $category )
                                    @if ( $category->id == $product->category_id )
                                    <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                    @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Code</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="code" value="{{$product->code}}"  type="text" placeholder="Code">
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

