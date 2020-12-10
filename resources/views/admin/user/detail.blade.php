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
<h1 class="pb-5">Detail</h1>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">Display_name</label>
                <input id="my-input" class="form-control " type="text" value="{{$user->display_name}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">User_name</label>
                <input id="my-input" class="form-control " type="text" value="{{$user->username}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Password</label>
                <input id="my-input" class="form-control " type="password" value="{{$user->password}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Email</label>
                <input id="my-input" class="form-control " type="text" value="{{$user->email}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Phone_number</label>
                <input id="my-input" class="form-control " type="text" value="{{$user->phone_number}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">View</label>
                <input id="my-input" class="form-control " type="text" value="{{$user->view}}">
            </div>


            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label>
                <select class="custom-select mr-sm-2" name="gender" value="{{$user->gender}}" id="inlineFormCustomSelect">
                    <option <?php if($user -> gender == 0) echo "selected"; ?> value ="1">Male</option>
                    <option <?php if($user -> gender == 1) echo "selected"; ?> value ="0">Female</option>
                </select>
            </div>

            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
                <select class="custom-select mr-sm-2" name="gender"   id="inlineFormCustomSelect">
                    <option <?php if($user -> status == 1) echo "selected"; ?> value ="1">Active</option>
                    <option <?php if($user -> status == 0) echo "selected"; ?> value ="0">UnActive</option>
                </select>
            </div>


            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Permission</label>
                <select class="custom-select mr-sm-2" name="permission"   id="inlineFormCustomSelect">
                    <option <?php if($user -> permission == 1) echo "selected"; ?> value ="1">Admin</option>
                    <option <?php if($user -> permission == 0) echo "selected"; ?> value ="0">User</option>
                </select>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="imgPreview p-0">
                <img class="w-100 h-auto" src="{{ URL::asset('img') }}/{{$user -> avatar}}"  alt="no-img">
            </div>
        </div>
    </div>   

@endsection
