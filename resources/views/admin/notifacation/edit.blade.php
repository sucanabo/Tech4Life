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
<form method="post" action="{{ $notification->id }}" >
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">User_id :</label>
                <input id="my-input" class="form-control " type="text" name="user_id"  value="{{ $notification->id }}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Title :</label>
                <input id="my-input" class="form-control " type="text" name="title"  value="{{ $notification->title }}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Content :</label>
                <input id="my-input" class="form-control " type="text" name="content"  value="{{ $notification->content }}">
            </div>

            <div class="form-group mb-4 p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
                <select class="custom-select mr-sm-2" value="{{$notification->status}}" name="status"   id="inlineFormCustomSelect">
                    <option <?php if($notification -> status == 1) echo "selected"; ?> value ="1">Active</option>
                    <option <?php if($notification -> status == 0) echo "selected"; ?> value ="0">UnActive</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary btn-rounded btn-lg" > Update </button>
        </div>
    </div>   
</form>
@endsection
