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
<h1 class="pb-5">Detail Post : </h1>
<form method="post" action="store" enctype="multipart/form-data" >
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group p-0">
                <input id="my-input" class="form-control " type="text" name="user_id" hidden="hidden" value="{{ $post->user_id }}">
            </div>
            <div class="form-group p-0">
                <label for="my-input">Title :</label>
                <input id="my-input" class="form-control " type="text" name="title" value="{{ $post->title }}">
            </div>

            <div class="imgPreview p-0">
                <label for="my-input">Image_Title :</label>
                <img  id="thumbnil" class="w-100 h-auto" src="{{ URL::asset('img/img_post') }}/{{ $post->image_title }}"  alt="no-img">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Content:</label>
                <textarea id="editor" class="form-control " type="text" name="content" value="{!!$post->content !!}"></textarea>
            </div>
           
           
            <div class="form-group p-0">
                <label for="my-input">Vote :</label>
                <input id="my-input" class="form-control " type="text" name="title" value="{{ $post->vote }}">
            </div>
            <div class="form-group p-0">
                <label for="my-input">View :</label>
                <input id="my-input" class="form-control " type="text" name="title" value="{{ $post->view }}">
            </div>

            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
                <select class="custom-select mr-sm-2" name="gender"   id="inlineFormCustomSelect">
                    <option <?php if($post -> status == 1) echo "selected"; ?> value ="1">Active</option>
                    <option <?php if($post -> status == 0) echo "selected"; ?> value ="0">UnActive</option>
                </select>
            </div>

            <p></p>
            <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Close </button> 
        </div>
        </div>
    </div>   
</form>
</div>
@endsection
