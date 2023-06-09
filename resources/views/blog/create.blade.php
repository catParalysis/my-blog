@extends('layouts.app')
@section('title', 'Blog - Create')
@section('content')
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">
                    Ajouter un article
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
                <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form method="post">
                    @csrf
                        <div class="card-header">
                            Formulaire
                        </div>
                        <div class="card-body">   
                                <div class="control-grup col-12">
                                    <label for="title">An interesting title</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                                <div class="control-grup col-12">
                                    <label for="message">What do you wanna say?</label>
                                    <textarea class="form-control" id="message" name="body"></textarea>
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
