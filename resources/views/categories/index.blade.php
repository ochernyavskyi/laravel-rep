<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All categories</title>
</head>
<body>
<h2>Categories</h2>
<ul>
    @forelse($categories as $item)
        <li>{{ $item->title }}</li>
    @empty
        <li>No Categories</li>
    @endforelse
</ul>
</body>
</html>
