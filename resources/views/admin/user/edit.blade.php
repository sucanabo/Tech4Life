@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
 <div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Horizontal Grid</h4>
                <form action="#" >
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Dislay_name:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->display_name }}">
                                </div>
                            </div>
                        </div>                 
                    </div>

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">User_name:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->username }}">
                                </div>
                            </div>
                        </div>                 
                    </div>

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Password:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->password }}">
                                </div>
                            </div>
                        </div>                 
                    </div>

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Email:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>                 
                    </div>


                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Phone_number:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->phone_number }}">
                                </div>
                            </div>
                        </div>                 
                    </div>

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Avatar:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->avatar }}">
                                </div>
                            </div>
                        </div>                 
                    </div>

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">View:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->view }}">
                                </div>
                            </div>
                        </div>                 
                    </div>

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Gender:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->gender }}">
                                </div>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Status:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->status }}">
                                </div>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" style="color:black;style-font:bold">Permission:
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    </label>
                                    <input type="text" class="form-control" placeholder="col-md-8" value="{{ $user->permission }}">
                                </div>
                            </div>
                        </div>                 
                    </div>
                    <div class="form-actions">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection