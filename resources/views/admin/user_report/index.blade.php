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
   
    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>user_id </th>
                <th>User_reported_id </th>
                <th>Message</th>
                <th>Reason</th>
                <th>Status</th>
                <th>Time</th>
                <th>Detail</th> 
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($user as $p)
            <tr>
                <td>{{$p -> id}}</td>
                <td>{{$p -> user_id}}</td>
                <td>{{$p -> user_reported_id}}</td>
                <td>{{$p -> message}}</td>
                <td>{{$p -> reason}}</td>
                <td>{{$p -> status}}</td>
                <td>{{$p -> created_at}}</td>
                <td>
                    <a href="posts/show/{{$p -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-lock"></i> </button></a>
                </td>
            </tr>
        @endforeach 
        </tbody>      
    </table>
    <p></p>
</div>
{{ $user->links() }}
@endsection