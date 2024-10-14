<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form method="POST" action="/register">
        @csrf
        <label for="name">name:</label>
        <input id="name" name="name">
        <br>

        <label for="email">email:</label>
        <input id="email" name="email" type="email">
        <br>

        <label for="phone_number">phonenumber:</label>
        <input id="phone_number" name="phone_number" type="text">
        <br>

        <label for="password">password:</label>
        <input id="password" name="password" type="password">
        <br>

        <button type="submit">Submit</button>
    </form>

</body>

</html>
