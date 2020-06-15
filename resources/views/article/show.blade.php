@extends('layouts.master')

@section('title', 'Create')
@section('style')
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Articles</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Articles</a></li>
            <li class="breadcrumb-item"><a href="#">Show</a></li>
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
        <div class="col-md-10 col-lg-10 col-xs-12" style="margin: 0 auto">


        <div class="card card-primary card-outline">
            <div class="card-body">
            <div class="btn-group">
                    <a href="" type="button" class="btn btn-xs btn-outline-pruim">Upvote</button>
                    <a href="" type="button" class="btn  btn-xs btn-default">Downvote</a>
                </div>
                <h3>{{ $article->title }}</h3>
                <div>
                    {{ $article->content }}
                </div>
                <span>Date: {{ $article->created_at }}<span>
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

