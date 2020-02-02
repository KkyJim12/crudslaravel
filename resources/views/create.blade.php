@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <label>ชื่อ</label>
            <input type="text" name="name" class="form-control">
            <label>detail</label>
            <input type="text" name="detail" class="form-control">
            @csrf 
            <button type="submit" class="mt-3 btn btn-success form-control">Add</button>
        </div>
    </div>
</div>
@endsection