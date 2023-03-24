@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                <h1 class="display-6 text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                <form method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nom</label>
                    <input class="form-control" id="name" name="name" type="text">
                    @error('name')
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Courriel</label>
                    <input class="form-control" id="email" name="email" type="text">
                    @error('email')
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" id=password name="password" type="text">
                    @error('password')
                       <span class="text-danger"> {{$errors->first('password')}} </span>
                    @enderror
                </div>
                <div class="class-footer text-center">
                    <input type="submit" value='Sauvegarder' class="btn btn-primary">
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection