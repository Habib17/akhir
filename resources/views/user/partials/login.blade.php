@extends('user.layouts.master')
@section('title','Goldia Cemilan')
@section('content')
<section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <div class="col-sm-5">
                        <div class="login-form"><!--sign in form-->
                        <h2>Sudah Pernah Belanja di GoldiACamilan ?</h2>
                        <form action="#">
                            <input type="email" placeholder="Email"/>
                            <input type="passsword" placeholder="Kata Sandi"/>
                             <span>
                               <a href="#">Lupa Password ?</a>
                            </span>
                            <div class="btn-group" data-toggle="buttons"></div>
                            <button type="submit" class="btn btn-default">MASUK</button>
                         </form>
                         </div>
                         </div>
                         <div class="col-sm-2">
                        <h2 class="or">OR</h2>
                        </div>
                        <div class="col-sm-5">
                        <div class="login-form">
                        <h2>Baru Belanja di GoldiACamilan ?</h2>
                        <form action="{{ URL::asset('user/signup')}}">
                            <div class="btn-group" data-toggle="buttons"></div>
                            <button type="submit" class="btn btn-default">DAFTAR</button>
                        </form>
                        </div>  
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
</section><!--/form-->
 
@endsection

