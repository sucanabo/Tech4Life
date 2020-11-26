@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="table-responsive">

    <form method="get" action="categories/create" style="margin-bottom:10px">
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add a category</button>
    </form>

    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>name</th>
                <th>image</th>
                <th>status</th>
                <th>owned by</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($category as $categories)
            <tr>
                <td>{{$categories -> id}}</td>
                <td>{{$categories -> name}}</td>
                <td>{{$categories -> image}}</td>
                <td>{{$categories -> status}}</td>
                <td>{{$categories -> owned_by}}</td>

                <td class="d-inline-block float-right">
                <form method="get" action="categories/edit/{{ $categories->id }}">
                    <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="far fa-edit"></i> Edit</button>
                </form>
                </td>
                
                <td> 
                    <form method="post" action="categories/delete/{{$categories->id}}">
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