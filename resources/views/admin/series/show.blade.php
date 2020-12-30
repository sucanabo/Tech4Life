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
<h1 class="pb-5">Detail Series</h1>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">Title :</label>
                <input id="my-input" class="form-control " type="text" value="{{$series->title}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Description :</label>
                <input id="my-input" class="form-control " type="text" value="{{$series->description}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">Vote :</label>
                <input id="my-input" class="form-control " type="text" value="{{$series->vote}}">
            </div>

         
        </div>
        <div class="col-lg-6">
            <div class="form-group p-0">
                <label for="my-input">View :</label>
                <input id="my-input" class="form-control " type="text" value="{{$series->view}}">
            </div>

            <div class="form-group p-0">
                <label for="my-input">User_id :</label>
                <input id="my-input" class="form-control " type="text" value="{{$series->user_id}}">
            </div>

            <div class="form-group p-0">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Status :</label>
                <select class="custom-select mr-sm-2" name="gender"   id="inlineFormCustomSelect">
                    <option <?php if($series -> status == 1) echo "selected"; ?> value ="1">Active</option>
                    <option <?php if($series -> status == 0) echo "selected"; ?> value ="0">UnActive</option>
                </select>
            </div>

        </div>
    </div>   

@endsection
