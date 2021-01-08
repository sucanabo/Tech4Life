@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="col-lg-12 margin-tb p-0">
    <div class="pull-left">
        <h2>  </h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary btn-rounded mb-5" href="{{ route('categories.index') }}" title="Go back"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;Go Back</a>
    </div>
</div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

<div class="container">
<h3 class="pb-5">Detail post : {{$post->id}}</h3>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group p-0">
                <input id="my-input" class="form-control " type="text" name="user_id" hidden="hidden" value="{{ $post->user_id }}">
            </div>
            <div>
                <h2><strong>Title: </strong>{{$post->title}}</h2>
            </div>
            <div class="row">
                <span class="col-md-1">
                    <i class="far fa-eye mr-1"></i>
                    {{$post->view}}
                </span>
                <span class="col-md-1">
                    <i class="fas fa-sort-up"></i>
                    {{$post->vote}}
                </span>
                <span class="col-md-2">
                    Status: <?php if($post->status == 0) echo "Deactive"; else echo "Active";?>
                </span>
            </div>
            <div>
                <h2>Thumbnail</h2>
                <img  id="thumbnil" src="{{ URL::asset('img/img_post') }}/{{ $post->image_title }}"  alt="no-img">
            </div>
            
            <div class="form-group p-0">
                <h2>Content</h2>
                <div class="post-show-content">{!!$post->content!!}</div>
            </div>
            </div>
        </div>
        </div>
    </div>   
</div>
@endsection
