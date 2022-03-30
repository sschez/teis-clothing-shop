@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
    <div class="card-header">
        Admin Panel - Home Page
    </div>
    <div class="card-body">
        Welcome to the Admin Panel, use the sidebar to navigate between the different options.
        <center>
            <br></br>
            <a class="btn btn-primary" type="submit" name="list" href="{{ route('admin.product.index')}}">Create-Edit Products</a>
            <br></br>
        </center>
    </div>
</div>
@endsection