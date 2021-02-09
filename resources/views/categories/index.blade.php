@extends('base')

@section('title', 'Category list')
@section('content')
    <h2>Categories</h2>
    <ul>
        @forelse($categories as $item)
            <li>{{ $item->title }}</li>
        @empty
            <li>No Categories</li>
        @endforelse
    </ul>
@endsection
