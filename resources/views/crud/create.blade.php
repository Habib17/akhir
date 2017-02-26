<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/admin/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
        <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
    </ul>
</nav>

<h1>Create a Nerd</h1>

<!-- if there are creation errors, they will show here -->
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

    <div class="form-group">
        <label  class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                <input class="form-control" name="name"  type="text" >
    </div>

    <div class="form-group">
     <label  class="col-sm-2 control-label">Parent Id</label>
                <div class="col-sm-10">
                <input class="form-control" name="parent_id"  type="text" >
    </div>
    <div class="form-group">
     <label  class="col-sm-2 control-label">Slug</label>
                <div class="col-sm-10">
                <input class="form-control" name="slug"  type="text" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">
    </div>

  
<div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-success pull-right">Simpan</button>
                    </div>

</form>

</div>
</body>
</html>