<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hey i am your motherfucker admin</h1>
    <form action="{{route("admin.store")}}" method="POST">
        @csrf
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <button type="submit">create</button>
    </form>
</body>
</html>