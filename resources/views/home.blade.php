@extends('layouts.main')

@section('title', 'Home')

@section('content')
@php($_name = $name ?? "team")

    @if($_name == "samz")
    <p>You are banned</p>
    @else
    <h1>Hello, {{ $_name ?? "team" }}</h1>
    @endif
@endsection



