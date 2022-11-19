@extends('layout.layout')
@section('title',$title)
@section('sidebar')
    @parent
    <li>php</li>
@endsection
@section('content')
    <p> {{ $content }} </p>
@endsection