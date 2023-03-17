@extends('layouts.app')
@section('title', $blogPost->title)
@section('content')
    <div class="row mt-5">
        <div class="col-12">
        <a href="{{ route('blog.index') }}" class="btn btn-primary btn-sm" > Retour </a>
            <H2 class="display-5">{{ $blogPost->title }}</H2>
        </div>
        <hr>
            <p>
                Author : {{ $blogPost->user_id }} ToDoL8er
            </p>
        <hr>
            {!! $blogPost->body !!}
        <hr>
    </div>
    <hr>
    <div class="row text-center">
        <div class="col-md-6">
            <a href="{{ route('blog.edit', $blogPost->id) }}" class="btn btn-success"> Modifier </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('blog.edit', $blogPost->id) }}" class="btn btn-danger"> Delete </a>
        </div>
    </div>
@endsection