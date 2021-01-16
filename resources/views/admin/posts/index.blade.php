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
    <form method="get" action="posts/create" style="margin-bottom:10px">
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add a Posts</button>
    </form>
    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>User_id </th>
                <th>Title </th>
                <th>Status </th>
                <th>Ban</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($post as $p)
            <tr>
                <td>{{$p -> id}}</td>
                <td>{{$p -> user_id}}</td>
                <td>{{$p -> title}}</td>
                @if($p->status==1)
                    <td>Active</td>
                @else
                    <td>Un_Active</td>
                @endif
                @if($p -> status == 1)
                <td>
                    <a href="posts/update_lock/{{$p -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-unlock"></i> </button></a>
                </td>
                @endif
                @if($p -> status == 0)
                <td>
                    <a href="posts/update_unlock/{{$p -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-lock"></i> </button></a>
                </td>
                @endif
                <td>
                    <a href="posts/show/{{$p -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-eye"></i> </button></a>
                </td>
                <td> 
                    <a href="posts/edit/{{$p -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-edit"></i></button></a>
                </td>
                <td> 
                <a href="posts/delete/{{$p -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i></button></a>
                </td>
                </td>
                
            </tr>
        @endforeach 
        </tbody>      
    </table>
    <p></p>
</div>
{{ $post->links() }}
@endsection