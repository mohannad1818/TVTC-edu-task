@extends('layouts.app')
@section('content')
<div class="card card=default">
<div class="card-header"> Add a new Category</div>
<div class="card-body">
<form action="#">
@csef
<div class="form-group">
<label for="category">Category Name:</label>
<input type="text" placeholder="Add a new category">
</div>
<div class="form-group">
<a href="#" class="btn btn-success">Add</a>
</div>

</form>
</div>
</div>
@endsection