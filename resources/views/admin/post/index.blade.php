@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('post-active','active')
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
            @foreach ($posts as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->title}}</td>
                <td>{{$p->content}}</td>
                <td>{{$p->vote}}</td>
                <td>{{$p->view}}</td>
                <td>{{$p->author}}</td>
                <td>{{$p->status}}</td>        
                <td class="d-inline-block float-right">
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-info-circle"></i> Details</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="far fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection