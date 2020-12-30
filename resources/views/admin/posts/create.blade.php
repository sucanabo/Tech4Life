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
<h1 class="pb-5">Create</h1>
<form method="post" action="store" enctype="multipart/form-data" >
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group p-0">
                <input id="my-input" class="form-control " type="text" name="user_id" hidden="hidden" value="{{ auth()->user()->id }}">
            </div>
            <div class="form-group p-0">
                <label for="my-input">Title :</label>
                <input id="my-input" class="form-control " type="text" name="title">
            </div>
            <div class="form-group p-0">
                <label for="my-input">Content :</label>
                <textarea id="editor" class="form-control " type="text" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="my-input">Upload Avatar :</label>
                <div class="input-group p-0 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file"  onchange="showMyImage(this)" class="custom-file-input" id="inputGroupFile01" name="image_title" >
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
            <div class="imgPreview p-0">
                <img  id="thumbnil" class="w-100 h-auto" src="{{asset('layout_admin/assets/images/no-image.jpg')}}" alt="no-img">
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Create </button>
            <button type="reset" class="btn btn-primary btn-rounded btn-lg" > Reset </button>
            
        </div>
        </div>
    </div>   
</form>
@endsection
