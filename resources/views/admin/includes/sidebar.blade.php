<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::asset('assets/admin/dist/img/user2-160x160.jpg') }}"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Habib</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
           <li class="{{ isset($navigation) && $navigation == 'akun' ? 'active' : ''}}">
                <a href="{{ URL::asset('/widget') }}">
                     <i class="fa fa-user"></i> <span>Akun</span>
                </a>
            </li>
            <li class="{{ isset($navigation) && $navigation == 'category' ? 'active' : ''}}">
                <a href="{{ URL::asset('admin/category') }}">
                     <i class="fa fa-book"></i> <span>Category</span>
                </a>
            </li>
             <li class="{{ isset($navigation) && $navigation == 'orders' ? 'active' : ''}}">
                <a href="{{ URL::asset('admin/orders') }}">
                     <i class="fa fa-hand-paper-o"></i> <span>Orders</span>
                </a>
            </li>
            <li class="{{ isset($navigation) && $navigation == 'product' ? 'active' : ''}}">
                <a href="{{ URL::asset('admin/product') }}">
                     <i class="fa fa-database"></i> <span>Product</span>
                </a>
            </li>
             <li class="{{ isset($navigation) && $navigation == 'paymentmethod' ? 'active' : ''}}">
                <a href="{{ URL::asset('admin/paymentmethod') }}">
                     <i class="fa fa-credit-card"></i> <span>Payment Method</span>
                </a>
            </li>
             <li class="{{ isset($navigation) && $navigation == 'productimage' ? 'active' : ''}}">
                <a href="{{ URL::asset('admin/productimage') }}">
                     <i class="fa fa-file-image-o"></i> <span>Product Image</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>