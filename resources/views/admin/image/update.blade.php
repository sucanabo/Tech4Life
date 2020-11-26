@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<h1>Edit</h1>
<form method="post" action="update/{{ $post_image->id }}">
    @method('POST')
    @csrf

    <input type="hidden" name="id" value="{{ $post_image->id }}">

    <p>
        <label for="post_id">post id</label><br>
        <input type="text" name="post_id" value="{{ $post_image->post_id }}">
    </p>

    <p>
        <label for="name">name</label><br>
        <input type="text" name="name" value="{{ $post_image->name }}">
    </p>

    <p>
        <label for="path">path</label><br>
        <input type="text" name="path" value="{{ $post_image->path }}">
    </p>

    <p>
        <label for="status">status</label><br>
        <input type="text" name="status" value="{{ $post_image->status }}">
    </p>

    <p>
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"> Update </button>
    </p>
</form>
@endsection