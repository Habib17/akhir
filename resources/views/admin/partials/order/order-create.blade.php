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
                <input class="form-control" name="code"  type="text" placeholder="Code">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Order At</label>
            <div class="col-sm-10">
                <input class="form-control" name="order_at"  type="date" placeholder="Order At">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Customer Id</label>
            <div class="col-sm-10">
                <input class="form-control" name="customer_id"  type="text" placeholder="Customer Id">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="name"  type="text" placeholder="Name">    
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input class="form-control" name="address"  type="text" placeholder="Address">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Province Id</label>
            <div class="col-sm-10">
                <select id="province_id" name="province_id" onchange="changeCity();">
                 <option>Pilih Provinsi</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
                </select>
            </div>
            </div>       
            <div class="form-group">
                <label  class="col-sm-2 control-label">City Id</label>
            <div class="col-sm-10">
                <select name="city_id" id="city_id" onchange="changeDistrict();">
                <option>Pilih City</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">District Id</label>
            <div class="col-sm-10">
                    <select   name="district_id" id="district_id">
                    <option>Pilih District</option>
                    </select>

              </div>
            </div>
  
        
    
            <div class="form-group">
                <label  class="col-sm-2 control-label">Postalcode</label>
            <div class="col-sm-10">
                <input class="form-control" name="postalcode"  type="text" placeholder="Postalcode">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Phone</label>
             <div class="col-sm-10">
                <input class="form-control" name="phone"  type="text" placeholder="Phone">
            </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Payment Total</label>
            <div class="col-sm-10">
                <input class="form-control" name="payment_total"  type="text" placeholder="Payment Total">
            </div>
            </div>
             <div class="form-group">
                <label  class="col-sm-2 control-label">Payment Method Id</label>
            <div class="col-sm-10">
                <select name="payment_method_id">
                <option>Pilih Metode Pembayaran</option>
                    @foreach ( $paymentmethods as $paymentmethod )
                        <option value="{{ $paymentmethod->id}}">{{ $paymentmethod->name }}</option>
                    @endforeach
                </select>
            </div>
            </div>
             <div class="form-group">
                <label  class="col-sm-2 control-label">Order Status Id</label>
            <div class="col-sm-10">
                <select name="order_status_id">
                <option>Pilih Status Order</option>
                    @foreach ( $orderstatuss as $orderstatus)
                        <option value="{{ $orderstatus->id }}">{{ $orderstatus->name }}</option>
                    @endforeach
                </select>
            </div>
            </div>
             <div class="form-group">
                <label  class="col-sm-2 control-label">Price Total</label>
            <div class="col-sm-10">
                <input class="form-control" name="price_total"  type="text" placeholder="Price Total">
            </div>
            </div>
             <div class="form-group">
                <label  class="col-sm-2 control-label">Shipcost</label>
            <div class="col-sm-10">
                <input class="form-control" name="shipcost"  type="text" placeholder="Shipcost">
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

