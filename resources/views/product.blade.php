<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    @vite('resources/css/app.css')
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-3xl italic font-mono">Product list</h1>
    <h2 class="text-xl font-mono">Product Category</h2>
    @foreach ($product->productCategories as $category)
        <p>{{ $category->category->name }}</p>
    @endforeach
</body>

</html>
