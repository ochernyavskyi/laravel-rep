<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Product create</h2>
<form method="post" action="{{ route ('product_store') }}">
    @csrf
    <input type="text" name = "title" value="{{ old('title') }}" placeholder="Enter the title">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name = "price" value="{{ old('price') }}" placeholder="Enter the price">
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name = "category_id" value="{{ old('category_id') }}" placeholder="Enter the category">
    @error('category_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="CREATE">
</form>
</body>
</html>
