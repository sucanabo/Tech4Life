@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="table-responsive">



    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Vote</th>
                <th>View</th>
                <th>Author</th>
                <th>Status</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($post as $posts)
            <tr>
            <td>{{$posts->id}}</td>
                <td>{{$posts->title}}</td>
                <td>{{$posts->content}}</td>
                <td>{{$posts->vote}}</td>
                <td>{{$posts->view}}</td>
                <td>{{$posts->user_id}}</td>
                <td>{{$posts->status}}</td>
        
                
                
            </tr>
        @endforeach 
               
        </tbody>      
    </table>
    
</div>
@endsection