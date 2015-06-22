@extends('layouts.blog')
@section('title')
KUPRA | Blogs
@stop
@section('header')
<a href="/articles" class="pull-right">Home</a>
<h1 class="text-center">KUPRA Blogs</h1>
@stop
@section('content')
<h2 class="text-center">{{$blog->title}}</h2>
<p class="text-center">{{$blog->content}}</p>
<hr>
@stop
