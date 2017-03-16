@extends('user.layouts.master')
@section('title','Goldia Cemilan')
@section('content')
<section id="slider">
<section>
      <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Kategori</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Kripik Buah
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Nike </a></li>
                                            <li><a href="">Under Armour </a></li>
                                            <li><a href="">Adidas </a></li>
                                            <li><a href="">Puma</a></li>
                                            <li><a href="">ASICS </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Kripik Tempe
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Fendi</a></li>
                                            <li><a href="">Guess</a></li>
                                            <li><a href="">Valentino</a></li>
                                            <li><a href="">Dior</a></li>
                                            <li><a href="">Versace</a></li>
                                            <li><a href="">Armani</a></li>
                                            <li><a href="">Prada</a></li>
                                            <li><a href="">Dolce and Gabbana</a></li>
                                            <li><a href="">Chanel</a></li>
                                            <li><a href="">Gucci</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Krupuk
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Fendi</a></li>
                                            <li><a href="">Guess</a></li>
                                            <li><a href="">Valentino</a></li>
                                            <li><a href="">Dior</a></li>
                                            <li><a href="">Versace</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordian" href="#manisanbuah">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Manisan Buah
                                        </a></h4>
                                </div>
                                <div id="manisanbuah" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Jambu</a></li>
                                            <li><a href="">Apel</a></li>
                                            <li><a href="">Melon</a></li>
                                            <li><a href="">Jeruk</a></li>
                                            <li><a href="">Versace</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#minumanbuah">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Minuman Sari Buah
                                        </a>
                                    </h4>
                                </div>
                                 <div id="minumanbuah" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Apel</a></li>
                                            <li><a href="">Melon</a></li>
                                            <li><a href="">Jeruk</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Produk Unggulan</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href=""> Plintir Istimewa</a></li>
                                    <li><a href=""> Kacang Sembunyi Manis</a></li>
                                    <li><a href=""> Pastel Mini</a></li>
                                    <li><a href=""> Kue Bagelan</a></li>
                                    <li><a href=""> Kripik Tempe Varian Rasa</a></li>
                                    <li><a href=""> Amplang</a></li>
                                    <li><a href=""> Telo Ungu</a></li>
                                    <li><a href=""> Keripik Kentang</a></li>
                                    <li><a href=""> Opak Gambir</a></li>
                                    <li><a href=""> Aneka Kripik Buah</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b>$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                       <!--/shipping-->
                        
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ URL::asset('assets/images/product-details/GPI_01D.jpg') }}" alt="" />
                            </div>
                     <!--       similiar product -->


                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                              <!--   new  -->
                                <h2>Anne Klein Sleeveless Colorblock Scuba</h2>
                                <p>Web ID: 1089772</p>
                                <span>
                                    <span>US $59</span>
                                    <label>Quantity:</label>
                                    <input type="text" value="3" />
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </span>
                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Brand:</b> E-SHOPPER</p>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    
                    
                  <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>
                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">   
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ URL::asset('assets/images/home/GKT_01.jpg') }}" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</button>
                                                    <a href="{{ URL::asset('user/detail') }}"><button  type="button" class="btn btn-default add-to-cart"
                                                    ><i class="fa fa fa-plus-square"></i>Detail</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ URL::asset('assets/images/home/GPI_01.jpg') }}" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</button>
                                                    <a href="{{ URL::asset('user/detail') }}">
                                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa fa-plus-square"></i>Detail</button>
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ URL::asset('assets/images/home/MSBK_01.jpg') }}" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</button>
                                                    <a href="{{ URL::asset('user/detail') }}">
                                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa fa-plus-square"></i>Detail</button>
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">  
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ URL::asset('assets/images/home/MSKB_01.jpg') }}" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</button>
                                                    <a href="{{ URL::asset('user/detail') }}">
                                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa fa-plus-square"></i>Detail</button>
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ URL::asset('assets/images/home/RMA_01.jpg') }}" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</button>
                                                    <a href="{{ URL::asset('user/detail') }}">
                                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa fa-plus-square"></i>Detail</button>
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ URL::asset('assets/images/home/GKT_02.jpg') }}" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Beli</button>
                                                    <a href="{{ URL::asset('user/detail') }}">
                                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa fa-plus-square"></i>Detail</button>
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>          
                        </div>
          </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
