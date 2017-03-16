@extends('user.layouts.master')
@section('title','Goldia Cemilan')
@section('content')
<section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Alamat Pengiriman</h2>
                        <form action="#">
                            <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Nama Depan"/>
                            </div>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Nama Belakang"/>
                            </div>
                            <div class="col-sm-12">
                            <input type="email" name="email" placeholder="Alamat Email"/>
                            </div>
                            <div class="col-sm-12">
                            <input type="text" name="address" placeholder="Alamat"/>
                            </div>
                            <div class="col-sm-12">
                            <input type="text" name="phone" placeholder="Nomor Telepon"/>
                            </div>
                            
                            <div class="col-sm-12">
                           <select id="province_id" name="province_id" onchange="changeCity();"/>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                                </select>
                            </div>

                            <div class="col-sm-12">
                            <select  id="city_id" 
                            name="city_id" onchange="changeDistrict();"/>
                                </select>
                            </div>
                             <div class="col-sm-12">
                            <select id="district_id" 
                            name="district_id"/></select>
                             
                            </div>
                            <div class="col-sm-12">
                            <input type="text" placeholder="kodepost"
                            name="postalcode"/>
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
@section('scripts')
<script type="text/javascript">
    function changeCity()
    {
        $('#city_id').html('');
        $.getJSON('{{ url("service/city") }}' + '?province_id=' + $('#province_id').val(), function(v){
            $.each(v, function(i, e){
                $('#city_id').append('<option value="'+ e.id +'">'+ e.name +'</option>')
            });
        });
    }

    function changeDistrict()
    {
        $('#district_id').html('');
        $.getJSON('{{ url("service/district") }}' + '?city_id=' + $('#city_id').val(), function(v){
            $.each(v, function(i, e){
                $('#district_id').append('<option value="'+ e.id +'">'+ e.name +'</option>')
            });
        });
    }
</script>
@endsection