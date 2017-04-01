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
                        <label  class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="name" value="{{ $category->name }}" type="text" placeholder="Nama">
                  </div> 
                  </div> 
                     <div class="form-group">
                        <label  class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            <select name="category_id">
                                 <option value="">-</option>
                                @foreach ( $categories as $cat )
                                    @if ( $category->parent_id == $cat->id )
                                    <option value="{{ $category->id }}" selected="selected">{{ $cat->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
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

