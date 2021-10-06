@extends('layouts.app')

@section('content')

<div class="mb-4">
        <a class="btn btn-success" href="/articles/create">create new article</a>
    </div>
        <div class="row justify-content-center">
        @foreach($articles as $article)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ $article->title }}</div>
                <div class="card-body">
                    {{ $article->body }}
                </div>
                <div class="card-footer">
                    <a href="{{ route('articles.show', $article->id) }}">Show</a>
                    <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
                    <a class="text-danger" style="cursor: pointer" onclick="document.getElementById('delete-form-{{$article->id}}').submit();">Delete</a>
                    <form method="POST" id="delete-form-{{$article->id}}" action="{{route('articles.destroy', $article->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </div>
            </div>
        </div>

        @endforeach
    </div>
@endsection
