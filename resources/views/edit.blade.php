<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('articles.update', $article->id) }}" method='post'>
        <input type="hidden" name="_method" value="put">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" value="{{ $article->title }}"></br></br>
        </div>
        <div>
            <label for="body">Body: </label>
            <input type='text' name="body" value="{{ $article->body }}">
        </div>

        <br><br>
        <button type="submit">update</button>    
    </form>
</body>
</html>