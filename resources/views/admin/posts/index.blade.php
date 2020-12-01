@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')

<div class="table-responsive">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Status</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($posts as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->title}}</td>
                <td>{{$p->user_id}}</td>
                <td>{{$p->status}}</td>
                <td>
                    <form action="{{ route('posts.destroy',$p->id) }}" method="POST">

                        <a href="{{ route('posts.show',$p->id) }}" title="show" class="btn btn-info btn-rounded">
                            <i class="fas fa-eye"></i>
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
    {!! $posts->links() !!}
</div>
@endsection