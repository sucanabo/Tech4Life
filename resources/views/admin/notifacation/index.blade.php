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
    <form method="get" action="notifications/create" style="margin-bottom:10px">
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add a notifications</button>
    </form>

    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>User_id </th>
                <th>Title </th>
                <th>Content </th>
                <th>Status </th>
                <th>Edit</th>
                <th>Delete</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($notification as $noti)
            <tr>
                <td>{{$noti -> id}}</td>
                <td>{{$noti -> user_id}}</td>
                <td>{{$noti -> title}}</td>
                <td>{{$noti -> content}}</td>
                <td>{{$noti -> status}}</td>
                <td> 
                    <a href="notifications/edit/{{$noti -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-edit"></i></button></a>
                </td>
                <td> 
                <a href="notifications/delete/{{$noti -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i></button></a>
                </td>
                </td>
                
            </tr>
        @endforeach 
               
        </tbody>      
    </table>
    {{$notification->links() }}
</div>
@endsection