@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="col-lg-12 margin-tb p-0">
    <div class="pull-left">
        <h2>  </h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary btn-rounded mb-5" href="{{ route('posts.index') }}" title="Go back"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;Go Back</a>
    </div>
</div>
<h1 class="pb-5">Create</h1>
<form method="post" action="store">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="my-input">Upload Image</label>
        <div class="input-group col-lg-6 p-0 mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
    </div>
    <div class="imgPreview col-lg-6 p-0">
        <img class="w-100 h-auto" src="{{asset('layout_admin/assets/images/no-image.jpg')}}" alt="no-img">
    </div>
    <div class="form-group col-lg-6 p-0">
        <label for="my-input">Name</label>
        <input id="my-input" class="form-control " type="text" name="">
    </div>
    <div class="form-group mb-4 col-lg-6 p-0">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected="">Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <p>
    <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Create </button>
    </p>
</form>
@endsection
