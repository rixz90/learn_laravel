@extends('layouts.app')

@section('content')
    <form action="/posts" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Enter title">
        <input type="submit" name="Submit">
    </form>
@endsection
