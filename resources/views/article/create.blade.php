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
        <h1 class="m-0 text-dark"> Create articles</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Articles</a></li>
            <li class="breadcrumb-item"><a href="#">Create</a></li>
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
            <form method="post" action="{{ route('article.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>
                </div>
  
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="reset" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </form>
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

