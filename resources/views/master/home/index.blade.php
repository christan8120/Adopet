@extends('layout')
@section('title', 'Home')
@section('content')
    <p>Hello {{$users->email}}</p>
@endsection