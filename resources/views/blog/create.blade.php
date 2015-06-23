@extends('layouts.blog')
@section('title')
Create Blog
@stop
@section('content')
<form action="/articles" method="post">
<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" id="title" class="form-control" name="title" placeholder="Title of your blog">
</div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" id="content" name="content" placeholder="Content here"></textarea>

</div>

<input type="submit" class="btn btn-default" value="Submit">
</form>
@stop
@section('header')
<h2>Please fill the form below to create a new KUPRA blog!</h2>
@stop
