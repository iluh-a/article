@extends('layouts.app')

@section('content')
    <article>
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->body }}</p>
    </article>
    <div style="border-top: 1px solid black; margin-top: 25px; padding-top: 25px;">
        <!-- FORM FOR CREATING COMMENT -->
        <form action="{{ route('articles.comments', $article) }}" method="post">
            @csrf
            <label for="body">Write a comment:</label></br>
            <input name="body" type="text" placeholder="type comment">
            <button type='submit'>create comment</button>
        </form>
    </div>
    <div>
        @if($comments)
            @foreach ($comments as $comment)
                <div class="col-md-2; row-cols-1">
                    <div class="card" style="margin-top: 15px;margin-bottom: 15px">
                        <h3 class="card-header">{{ $comment->user->name }}</h3>
                        <p class="card-body">{{ $comment->body }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <h1>NO COMMENTS</h1>
        @endif
    </div>
@endsection
