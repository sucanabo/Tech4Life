@extends('user/layouts/master')
@section('title','All Post - Index')
@section('content')
    <main class="main-content">
        <div class="post-publish container-fluid bg-light">
        <form method="post" action="create_post" enctype="multipart/form-data" class="publish-form post-form" id="post_form">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group p-0">
                            <input id="my-input" class="form-control " type="text" name="user_id" hidden="hidden" value="{{ auth()->user()->id }}">
                        </div>
                        <div class="form-group p-0">
                            <label for="my-input">Title :</label>
                            
                            <div class="d-flex">
                                <input id="my-input" class="form-control mr-5" type="text" name="title" placeholder="Title" style="width:90%,padding:10px">
                                <select name="" id="" class="form-control" style="height: 100%; width:10%">
                                    <option value="1" selected>Publish</option>
                                    <option value="0">Private</option>
                                    
                                </select>
                            </div>
                            
                        </div>
                        {{-- <div class="main-button form-item d-flex"> --}}
                    {{-- <label for="tag">Tag :</label> --}}
                    {{-- <input type="text" class="post__title" placeholder="Add tags!" style="width:90%"> --}}
                    
                {{-- </div> --}}
                        <div class="form-group">
                            <label for="my-input">Choose thumbnail:</label>
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

                        <div class="form-group p-0">
                            <label for="my-input">Content :</label>
                            <textarea class="form-item" id="post__editor" type="text" name="content"></textarea>
                        </div>
                        <p></p>
                        <div style="padding-left:700px">
                            <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Create Post</button>
                            <button type="reset" class="btn btn-primary btn-rounded btn-lg" > Reset Post</button>
                        </div>
                        <p></p>
                    </div>
                </div>   
            </form>
        </div>
    </main> 
    <p></p>
@endsection