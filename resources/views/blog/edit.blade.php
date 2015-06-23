@extends(layouts.blog)

@section('title')
Edit Blog
@stop

@section('header')
<h1>Edit Blog</h1>
@stop

@section('content')
<form action="/articles/{{$blog->id}}" method="post">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" class="form-control" name="title" value="{{$blog->title}}">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content" value="{{$blog->content}}"></textarea>
    </div>

    <input type="submit" class="btn btn-default" value="Submit">
</form>
@stop