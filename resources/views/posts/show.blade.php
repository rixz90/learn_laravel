@extends('layouts.app')

@section('content')
    <a href="{{route('posts.edit', $posts->id)}}"> {{$posts->title}} </a>
@endsection
