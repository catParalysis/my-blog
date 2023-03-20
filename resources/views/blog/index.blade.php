@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <div class="row">
        <div class="col-12">
            <H1 class="display-3 mt-3">
                {{ config('app.name') }}
            </H1>
        </div>
        <hr>
        <div class="col-md-8">
            <p> Bonne lecture</p>
        </div>
        <div class="col-md-4">
            <a href="{{ route('blog.create') }}" class="btn btn-primary btn-sm">Ajouter</a>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                <h1 class="display-5">Blog List</h1>
                </div>
                <div class="card-body">
                    <ul>
                    @forelse ($blogs as $blog)
                        <li><a class='text-warning' href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }} --- {{ $blog->id }}</a></li>
                    @empty
                        <li class="text-danger" >Ce blog est complètement vide</li>
                    @endforelse
                    </ul>
                </div>
        </div>
        </div>
    </div>
@endsection