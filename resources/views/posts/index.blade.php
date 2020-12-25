@extends('layouts.app')
@section('content')


<div class="clearfix">



<div class="card card-default">
<div class="card-header">Add post</div>
<form action="{{route('post')}}"  method="POST">
                        @csrf

<div class="form-gruop">
<label for="post title"> Title:</lable>
<input type="text" class="form-control"  name="title" placeholder="Add a new Post">
</div>

<div class="form-gruop">
<label for="post description"> description:</lable>
<textarea class="form-control" rows="2" nane="description" placeholder="Add a description"> </textarea>
</div>



<div class="form-group">
<button class="btn btn-success">
{{isset($Post) ? "updata" : "Add" }}
</button>
</div>

</form>
</div>
</div>
@endsection




