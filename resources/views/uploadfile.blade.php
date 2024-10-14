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
    <h1 class="text-3xl italic font-mono">Upload File</h1>

    <form method="POST" enctype="multipart/form-data" action="/productpics">
        @csrf
        <label for="product_pics">Select File</label>
        <input type="file" id="product_pics" name="product_pics">
        <button type="submit">Submit</button>
    </form>
    <h1>Ini adalah user {{ Auth::check() }}</h1>

</body>

</html>
