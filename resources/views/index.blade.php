<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All articles</title>
</head>
<body>
    <p>
        <a href="{{ route('articles.index') }}">Main</a>
    </p>
    @foreach ($articles as $article)
        <article>
            <h1>
                {{ $article->title }} 
            </h1>
            <a href="{{ route('articles.show', $article->id) }}">Show</a>
            <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
            <a onclick="document.getElementById('delete-form-{{$article->id}}').submit();">Delete</a>
            <form method="POST" id="delete-form-{{$article->id}}" action="{{route('articles.destroy', $article->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
            </form>
        </article>
    @endforeach
</body>
</html>