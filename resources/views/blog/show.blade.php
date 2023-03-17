@extends('layouts.app')
@section('title', $blogPost->title)
@section('content')
    <div class="row mt-5">
        <div class="col-12">
        <a href="{{ route('blog.index') }}" class="btn btn-primary btn-sm" > Retour </a>
            <H2 class="display-5">{{ $blogPost->title }}</H2>
        </div>
        <hr>
            {!! $blogPost->body !!}
        <hr>
    </div>
@endsection