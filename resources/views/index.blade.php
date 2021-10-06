<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All articles</title>
</head>
<body>
    <h1>All the articles</h1>
    <a href="/articles/create">create new article</a>
    @foreach ($articles as $article)
        <article>
            <h2>
                {{ $article->title }}
            </h2>
            <a href="{{ route('articles.show', $article) }}">Show</a>
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
