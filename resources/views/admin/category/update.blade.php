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
<h1>Edit</h1>
<form method="post" action="update/{{ $category->id }}">
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">Name</label>
            <input id="my-input" class="form-control " type="text" name="" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <label for="my-input">Upload Image</label>
                <div class="input-group p-0 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" value="{{$category->image}}">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected="">Choose...</option>
                    <?php 
                     for($i=0; $i<3;$i++){
                         ?>
                            <option <?php if($category->status == $i) echo "selected"; ?> value ="{{$i}}">{{$i}}</option>
                         <?php
                     }
                    ?>
                </select>
            </div>
            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Owned By</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected="">Choose...</option>
                    <option <?php if($category->owned_by == 1) echo "selected"; ?> value ="1">Admin</option>
                    <option <?php if($category->owned_by == 2) echo "selected"; ?> value ="2">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Create </button>
        </div>
        <div class="col-lg-6">
            <div class="imgPreview p-0">
                <img class="w-100 h-auto" src="{{asset('layout_admin/assets/images/no-image.jpg')}}" alt="no-img">
            </div>
        </div>
    </div>
</form>
@endsection