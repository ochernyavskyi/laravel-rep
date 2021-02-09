@extends('base')

@section('title', 'Category update')
@section('content')
<h2>Category update</h2>
<form method="post" action="/categories/{category}">
    @csrf
    <input type="text" name="title" value="{{ $category -> title}}" placeholder="Enter the title">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="description" value="{{ $category -> description }}" placeholder="Enter the description">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="hidden" name="category_id" value="{{ $category -> id }}">
    <input type="submit" value="UPDATE">
</form>
@endsection
