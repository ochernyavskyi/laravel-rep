@extends('base')

@section('title', 'Product list')
@section('content')

<h2>Products</h2>
<body>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category->title}}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @empty
                No products
            @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
