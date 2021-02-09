@extends('base')

@section('title', 'Product update')
@section('content')
<h2>Product updates</h2>
<form method="post" action="/products/{product}">
    @csrf
    <input type="text" name="title" value="{{ $product -> title }}" placeholder="Enter the title">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="price" value="{{ $product -> price }}" placeholder="Enter the price">
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="category_id" value="{{ $product -> category_id }}" placeholder="Enter the category">
    @error('category_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="hidden" name="product_id" value="{{ $product -> id }}">
    <input type="submit" value="UPDATE">
</form>
@endsection
