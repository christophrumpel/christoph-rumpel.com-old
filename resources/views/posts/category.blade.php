@extends('layouts.blog')

@section('content')

    <h1>Articles tagged with "{{ $category }}"</h1>

    @include('partials.blog-list', ['posts' => $posts])

@endsection