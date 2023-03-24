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
                Author : {{ $blogPost->blogHasUser->name }}
            </p>
        <hr>
            {!! $blogPost->body !!}
        <hr>
    </div>
    <hr>
    <div class="row text-center">
        <div class="col-md-6">
            <a href="{{ route('blog.edit', $blogPost->id) }}" class="btn btn-sm btn-success"> Modifier </a>
        </div>
        <div class="col-md-6">
            <input type="button" value="Delete" data-bs-toggle="modal" data-bs-target="#modalDelete" class="btn btn-danger btn-sm">
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimation?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you sure to want to destroy the clicked on the supprimé de la chose? {{ $blogPost->title }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oui</button>
        <form  method="post">
        @csrf
6      <input type="submit" value="Delete"class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection