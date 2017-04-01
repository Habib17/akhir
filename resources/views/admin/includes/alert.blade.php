@if (Session::has('success'))
<div class="clearfix"></div>
<div class="alert alert-success" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {!! Session::get('success') !!}
</div>
@endif
@if (Session::has('info'))
<div class="clearfix"></div>
<div class="alert alert-info" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {!! Session::get('info') !!}
</div>
@endif