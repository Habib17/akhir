@extends('user.layouts.master')
@section('title','Goldia Cemilan')
@section('content')
<section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Daftar Agar Belanja Lebih Mudah</h2>
                        <form action="#">
                            <div class="col-sm-6">
                            <input type="text" placeholder="Nama Depan"/>
                            </div>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Nama Belakang"/>
                            </div>
                            <div class="col-sm-12">
                            <input type="email" placeholder="Alamat Email"/>
                            </div>
                            <div class="col-sm-6">
                             <label class="btn">
                            <input type="radio" name="options" id="option2" autocomplete="off" checked> Wanita
                            </label>
                            <label class="btn ">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Pria
                            </label>
                            </div>
                            <div class="col-sm-6">
                            <input type="date" placeholder="Tanggal Lahir"/>
                            </div>
                            <div class="col-sm-12">
                            <input type="text" placeholder="Kata Sandi"/>
                            <input type="text" placeholder="Ulangi Katasandi"/>
                            </div>
                            <div class="col-sm-12">
                            <div class="btn-group" data-toggle="buttons"></div>
                            <button type="submit" class="btn btn-default">Daftar</button>
                            </div>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
</section><!--/form-->
 
@endsection
