@extends('layouts.blog')
@section('title')
Blogs
@stop
@section('header')
<a href="articles/create" class="pull-right">Create</a>
<h1 class="text-center">KUPRA Blogs</h1>
@stop
@section('content')
@foreach($blogs as $blog)
<ul>
    <li>
<h3><a href="articles/{{$blog->id}}">{{$blog->title}}</a></h3>
<p> {{$blog->content}}</p>
    </li>
</ul>
<hr>
@endforeach
@stop