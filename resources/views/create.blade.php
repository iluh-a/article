@extends('layouts.app')

@section('content')
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
@endsection