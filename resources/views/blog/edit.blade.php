@extends('layouts.app')
@section('title', 'Blog - Modification')
@section('content')
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    Modifier un article
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @csrf
                    @method('put')
                        <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">Modification Title</label>
                                    <input type="text" id="title" value="{{ $blogPost->title }}" name="title" class="form-control">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="message">Modification content</label>
                                    <textarea class="form-control" id="message"  name="body">{{ $blogPost->body }}</textarea>
                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
