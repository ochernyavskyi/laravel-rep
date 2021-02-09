@extends('base')

@section('title', 'Category create')
@section('content')
<h2>Category update</h2>
<form method="post" action="{{ route ('category_store') }}">
    @csrf
    <input type="text" name = "title" value="{{ old('title') }}" placeholder="Enter the title">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name = "description" value="{{ old('description') }}" placeholder="Enter the description">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="CREATE">
</form>
@endsection
