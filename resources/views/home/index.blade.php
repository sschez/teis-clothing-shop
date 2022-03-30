@extends('layouts.app')
@section('title', 'Clothing Shop')
@section('content')
<div class="text-center">
<center>
<br></br>
    <a class="btn btn-primary" type="submit" name="list" href="{{ route('admin.home.index')}}">Admin Panel</a>
<br></br>
<a class="btn btn-primary" type="submit" name="list" href="{{ route('product.index')}}">Products</a>
<br></br>
</center>
</div>
@endsection