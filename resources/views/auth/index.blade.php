@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-lg-6">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissable fade" role='alert'>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="cancel"></button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                <h1 class="display-6 text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                <form action="{{ route('authentification') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Courriel</label>
                    <input class="form-control" id="email" name="email" value="{{ old('email') }}" type="text">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" id=password name="password" type="text">
                   
                </div>
                <div class="class-footer text-center">
                    <input type="submit" value='Login' class="btn btn-primary">
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection