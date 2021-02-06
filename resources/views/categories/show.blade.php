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
</body>
</html>
