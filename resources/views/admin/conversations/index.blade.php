@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="table-responsive">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif

    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
    <form method="get" action="conversations/create" style="margin-bottom:10px">
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add a conversations</button>
    </form>

    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Post_id</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($conversation as $conver)
            <tr>
                <td>{{$conver -> id}}</td>
                <td>{{$conver -> post_id}}</td>
                <td> 
                    <a href="conversations/edit/{{$conver -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-edit"></i></button></a>
                </td>
                <td> 
                <a href="conversations/delete/{{$conver -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i></button></a>
                </td>
                </td>
                
            </tr>
        @endforeach 
               
        </tbody>      
    </table>
    
</div>
@endsection