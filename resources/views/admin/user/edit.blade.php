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
<h1 class="pb-5">Edit</h1>
<form method="post" action="{{$user->id}}" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">Display_name</label>
                <input id="my-input" class="form-control " value="{{$user->display_name}}" type="text" name="display_name">
            </div>

            <div class="form-group p-0">
                <label for="my-input">User_name</label>
                <input id="my-input" class="form-control " value="{{$user->username}}" type="text" name="username">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Password</label>
                <input id="my-input" class="form-control " value="{{$user->password}}" type="password" name="password">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Email</label>
                <input id="my-input" class="form-control " value="{{$user->email}}" type="text" name="email">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Phone_number</label>
                <input id="my-input" class="form-control " value="{{$user->phone_number}}" type="text" name="phone_number">
            </div>

            <div class="form-group">
                <label for="my-input">Upload Avatar</label>
                <div class="input-group p-0 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" value="{{$user->avatar}}" name="avatar">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>

            <div class="form-group p-0">
                <label for="my-input">View</label>
                <input id="my-input" value="{{$user->view}}" class="form-control " type="text" name="view">
            </div>


            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label>
                <select class="custom-select mr-sm-2" name="gender"  id="inlineFormCustomSelect">
                    <option <?php if($user -> gender == 0) echo "selected"; ?> value ="1">Male</option>
                    <option <?php if($user -> gender == 1) echo "selected"; ?> value ="0">Female</option>
                </select>
            </div>

            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
                <select class="custom-select mr-sm-2" value="{{$user->status}}" name="status"   id="inlineFormCustomSelect">
                    <option <?php if($user -> status == 1) echo "selected"; ?> value ="1">Active</option>
                    <option <?php if($user -> status == 0) echo "selected"; ?> value ="0">UnActive</option>
                </select>
            </div>


        
            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Permission</label>
                <select class="custom-select mr-sm-2" value="{{$user->permission}}" name="permission"   id="inlineFormCustomSelect">
                    <option <?php if($user -> permission == 1) echo "selected"; ?> value ="1">Admin</option>
                    <option <?php if($user -> permission == 0) echo "selected"; ?> value ="0">User</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Create </button>
        </div>
        <div class="col-lg-6">
            <div class="imgPreview p-0">
                <img style="height:100px;width:100px" class="w-100 h-auto"  src="{{asset('img')}}/{{$user->avatar}}" alt="no-img">
            </div>
        </div>
    </div>   
</form>
@endsection
