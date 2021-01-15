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
    <form method="get" action="announcements/create" style="margin-bottom:10px">
    <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add a Annountcement</button>
    </form>

    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($announcement as $x)
            <tr>
                <td>{{$x -> id}}</td>
                <td>{{$x -> title}}</td>
                <td>{{$x -> content}}</td>
                <td> 
                    <a href="announcements/edit/{{$x -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-edit"></i></button></a>
                </td>
                <td> 
                <a href="announcements/delete/{{$x -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i></button></a>
                </td>
            </tr>
        @endforeach
  
        </tbody>     
    </table>
    
</div>
@endsection