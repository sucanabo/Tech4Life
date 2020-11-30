@extends('admin/layouts/master')
@section('title','{{$post->id}}')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>  </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary btn-rounded mb-5" href="{{ route('posts.index') }}" title="Go back"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;Go Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Vote: </strong>
            {{$post->vote}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>View: </strong>
            {{$post->view}}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status: </strong>
            {{$post->status}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author: </strong>
            {{$post->user_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{$post->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content:</strong>
            <br>
            {{$post->content}}
        </div>
    </div>
</div>
@endsection