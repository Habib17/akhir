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
                <label  class="col-sm-2 control-label">Code</label>
            <div class="col-sm-10">
                <input class="form-control" name="code"  type="text" value="{{ $orders->name }}">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Order At</label>
            <div class="col-sm-10">
                <input class="form-control" name="order_at"  type="date" value="{{ $orders->order_at }}">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Customer Id</label>
            <div class="col-sm-10">
                <input class="form-control" name="customer_id"  type="text" value="{{ $orders->customer_id }}">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="name"  type="text"  value="{{ $orders->name }}">    
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input class="form-control" name="address"  type="text" value="{{ $orders->address }}">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Province Id</label>
               <div class="col-sm-10">
                <select id="province_id" name="province_id" onchange="changeCity();">
                @foreach ($provinces as $province)
                            @if ( $province->id == $orders->province_id )
                            <option value="{{ $province->id }}" selected="selected">{{ $province->name }}</option>
                            @else
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endif
                @endforeach
                </select>
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">City Id</label>
            <div class="col-sm-10">
                <select name="city_id" id="city_id" onchange="changeDistrict();">
                 @foreach ($city as $city)
                            @if ( $city->id == $orders->city_id )
                            <option value="{{ $city->id }}" selected="selected">{{ $city->name }}</option>
                            @endif
                @endforeach
                </select>
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">District Id</label>
            <div class="col-sm-10">
                <select   name="district_id" id="district_id">
                    @foreach ($district as $district)
                            @if ( $district->id == $orders->district_id )
                            <option value="{{ $district->id }}" selected="selected">{{ $district->name }}</option>
                            @endif
                    @endforeach
                </select>
                
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Postalcode</label>
            <div class="col-sm-10">
                <input class="form-control" name="postalcode"  type="text" value="{{ $orders->postalcode }}">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Phone</label>
             <div class="col-sm-10">
                <input class="form-control" name="phone"  type="text" value="{{ $orders->phone }}">
            </div>
            </div>
                          <div class="form-group">
                <label  class="col-sm-2 control-label">Payment Method Id</label>
            <div class="col-sm-10">
                    <select name="payment_method_id">
                                @foreach ( $paymentmethods as $paymentmethod )
                                    @if ( $paymentmethod->id  == $orders->payment_method_id )
                                    <option value="{{ $paymentmethod->id }}" selected="selected">{{ $paymentmethod->name }}</option>
                                    @else
                                    <option value="{{ $paymentmethod->id }}">{{ $paymentmethod->name }}</option>
                                    @endif
                                @endforeach
                            </select>
            </div>
            </div>
             <div class="form-group">
                <label  class="col-sm-2 control-label">Order Status Id</label>
            <div class="col-sm-10">
                <select name="order_status_id">
                                @foreach ( $orderstatuss as $orderstatus )
                                    @if ( $orderstatus->id ==
                                    $orders->order_status_id   )
                                    <option value="{{ $orderstatus->id }}" selected="selected">{{ $orderstatus->name }}</option>
                                    @else
                                    <option value="{{ $orderstatus->id }}">{{ $orderstatus->name }}</option>
                                    @endif
                                @endforeach
                            </select>
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Payment Total</label>
            <div class="col-sm-10">
                <input class="form-control" name="payment_total"  type="text" value="{{ $orders->payment_total }}">
            </div>
            </div>
  
             <div class="form-group">
                <label  class="col-sm-2 control-label">Price Total</label>
            <div class="col-sm-10">
                <input class="form-control" name="price_total"  type="text" value="{{ $orders->price_total }}">
            </div>
            </div>
             <div class="form-group">
                <label  class="col-sm-2 control-label">Shipcost</label>
            <div class="col-sm-10">
                <input class="form-control" name="shipcost"  type="text" value="{{ $orders->shipcost }}">
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

