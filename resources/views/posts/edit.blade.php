@extends('layouts.app')
@section('content')
    {!! Form::open() !!}
    Edit
    <form action="{{route('posts.update', $post->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="text" name="title" placeholder="{{$post->title}}">
        <input type="submit" value="Update"/>
    </form>
    Delete
    <form action="{{route('posts.destroy', $post->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input type="submit" value="Delete"/>
    </form>
@endsection
