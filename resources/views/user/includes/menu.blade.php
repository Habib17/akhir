<div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4"><div class="logo pull-left">
                            <a href="index.html"><img src="{{ URL::asset('assets/images/home/logo.png') }}" alt="" /></a>
                           <img src="{{ URL::asset('assets/images/home/font.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ URL::asset('user/cart') }}"><i class="fa fa-shopping-cart"></i>Rp.99000</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                  <li><a href="{{ URL::asset('user/') }}"  class="{{ isset($navigation) && $navigation == 'home' ? 'active' : ''}}" >Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html"  class="{{ isset($navigation) && $navigation == 'product' ? 'active' : ''}}">Products</a></li>
                                        <li><a href="{{ URL::asset('user/detail') }}"  class="{{ isset($navigation) && $navigation == 'detail' ? 'active' : ''}}">Product Details</a></li> 
                                        <li><a href="{{ URL::asset('user/checkout') }}" class="{{ isset($navigation) && $navigation == 'checkout' ? 'active' : ''}}">Checkout</a></li> 
                                        <li><a href="{{ URL::asset('user/cart') }}"  class="{{ isset($navigation) && $navigation == 'cart' ? 'active' : ''}}">Cart</a></li> 
                                        <li><a href="{{ URL::asset('user/account') }}"  class="{{ isset($navigation) && $navigation == 'account' ? 'active' : ''}}">Login</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
                                <li><a href="404.html">404</a></li>
                                <li><a href="{{ URL::asset('user/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
