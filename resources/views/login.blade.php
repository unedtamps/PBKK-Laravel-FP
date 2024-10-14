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
    <form method="POST" action="/login" class="mt-5 ml-5">
        @csrf
        <label for="email">email:</label>
        <input class="border border-red-500" id="email" name="email" type="email">
        <br>
        <label for="password">password:</label>
        <input id="password" name="password" type="password">
        <br>
        <button type="submit">Submit</button>
    </form>

    <h1 class="text-3xl italic font-mono">Hallo Tailwind</h1>

</body>

</html>
