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
    <form method="get" action="series/create" style="margin-bottom:10px">
    <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add a Series</button>
    </form>

    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>User_id</th>
                <th>Status</th>
                <th>Ban</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($series as $x)
            <tr>
                <td>{{$x -> id}}</td>
                <td>{{$x -> title}}</td>
                <td>{{$x -> user_id}}</td>
                @if($x->status==1)
                    <td>Active</td>
                @else
                    <td>Un_Active</td>
                @endif
                @if($x->status==1)
                <td >
                    <a href="series/update_lock/{{$x -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-unlock"></i> </button></a>
                </td>
                @endif
                @if($x->status==0)
                <td >
                    <a href="series/update_unlock/{{$x -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-lock"></i> </button></a>
                </td>
                @endif
                <td >
                    <a href="series/show/{{$x -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-eye"></i> </button></a>
                </td>
                <td> 
                    <a href="series/edit/{{$x -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-edit"></i></button></a>
                </td>
                <td> 
                <a href="series/delete/{{$x -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i></button></a>
                </td>
                
            </tr>
        @endforeach
  
        </tbody>     
    </table>
    {{ $series->links() }}
</div>
@endsection