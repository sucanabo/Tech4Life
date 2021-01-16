@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<div class="table-responsive">

    <form method="get" action="{{ route('categories.create') }}" style="margin-bottom:10px">
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-plus"></i> Add a category</button>
    </form>

    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Owned By</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($categories as $cate)
            <tr>
                <td>{{$cate -> id}}</td>
                <td>{{$cate -> name}}</td>
                <td>{{$cate -> image}}</td>
                @if($cate->status==1)
                    <td>Active</td>
                @else
                    <td>Un_Active</td>
                @endif
                <td>{{$cate -> owned_by}}</td>

                <td>
                    <form action="{{ route('categories.destroy',$cate->id) }}" method="POST">

                        <a href="{{ route('categories.edit',$cate->id) }}" title="show" class="btn btn-info btn-rounded">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" class="btn btn-info btn-rounded">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
                
            </tr>
        @endforeach 
               
        </tbody>      
    </table>
    
</div>
@endsection