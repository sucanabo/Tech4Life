@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="table-responsive">

    <form method="get" action="images/create" style="margin-bottom:10px">
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add an image</button>
    </form>

    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>post id</th>
                <th>path</th>
                <th>name</th>
                <th>status</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($post_image as $images)
            <tr>
                <td>{{$images -> id}}</td>
                <td>{{$images -> post_id}}</td>
                <td>{{$images -> path}}</td>
                <td>{{$images -> name}}</td>
                <td>{{$images -> status}}</td>
        
                <td class="d-inline-block float-right">
                <form method="get" action="images/edit/{{ $images->id }}">
                    <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="far fa-edit"></i> Edit</button>
                </form>
                </td>
                
                <td> 
                    <form method="post" action="images/delete/{{$images->id}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                    </form>
                </td>
                
            </tr>
        @endforeach 
               
        </tbody>      
    </table>
    
</div>
@endsection