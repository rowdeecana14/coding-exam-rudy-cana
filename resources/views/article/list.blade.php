@extends('layouts.master')

@section('title', 'List articles')
@section('style')
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark"> List articles</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Articles</a></li>
            <li class="breadcrumb-item"><a href="#">List</a></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12" style="margin: 0 auto">

        <div class="card card-primary card-outline">
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $index => $article)
                        <tr>
                            <td>{{ $index+1  }}</td>
                            <td><a href="{{ route('article.show', $article->id) }}">{{ $article->title  }}</td>
                            <td>{{ $article->content  }}</td>
                            <td>{{ $article->created_at  }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('article.edit', $article->id) }}" type="button" class="btn btn-default">Edit</button>
                                    <a href="{{ route('article.delete', $article->id) }}" type="button" class="btn btn-default">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div><!-- /.card -->
        </div>
     
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('js')
@endsection

