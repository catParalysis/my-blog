@extends('layouts.app')
@section('title', 'Blog - Pagination')
@section('content')
        <div class="row">
            <div class="col-12 text-center pt-3">
                <h1 class="display-3 mt-3">
                    Modifier un article
                </h1>
            </div> <!--/col-12-->
        </div><!--/row-->
        <hr>
        <div class="col-10 m">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>author</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->blogHasUser->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$blogs}}
@endsection