@extends('user/layouts/master')
@section('title','All Post - Index')
@section('content')
    <main class="main-content">
        <div class="post-publish container-fluid bg-light">
            <form action="post" class="publish-form post-form">
                <div class="form-item">
                    <input type="text" class="post__title" placeholder="Title">
                </div>
                <div class="main-button form-item d-flex align-items-baseline flex-wrap">
                    <input type="text" class="post__title w-75" placeholder="Title">
                    <div><a href="#" class=" el-button">SEO Settings</a></div>
                    
                    <span>
                        <button class=" el-button">Change future image</button>
                    </span>
                    <span>
                        <button class=" el-button">Publish <i class="fas fa-chevron-down"></i></button>
                    </span>
                </div>
                <div class="form-item" id="post__editor">
                    Write content here
                </div>    
            </form>
        </div>
    </main> 
    <p></p>
@endsection