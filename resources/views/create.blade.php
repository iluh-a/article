<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new article</title>
</head>
<body>
    <form action="/articles/store" method='POST'>
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title"></br></br>
        </div>
        <div>
            <label for="body">Body: </label>
            <input type="text" name="body"></br></br>
        </div>
        <input type="submit" value='CREATE'>    
    </form>
</body>
</html>