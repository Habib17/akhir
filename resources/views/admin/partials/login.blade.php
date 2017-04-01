 <!DOCTYPE html>
<html>
 @include('admin.includes.css')
<body class="hold-transition skin-blue sidebar-mini">


    @include('admin.includes.header')
   
        <!-- Content Header (Page header) -->
    @include('admin.includes.alert')
  <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                      </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
        <!-- /.content -->

    <!-- /.content-wrapper -->
    @include('admin.includes.footer')

    <!-- Control Sidebar -->
  
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->


<!-- ./wrapper -->
 @include('admin.includes.js')
<!-- Page specific script -->
</body>
</html>








 


