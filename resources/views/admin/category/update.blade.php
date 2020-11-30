@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<h1>Edit</h1>
<form method="post" action="update/{{ $category->id }}">
    @method('POST')
    @csrf
    <input type="hidden" name="id" value="{{ $category->id }}">
    <p>
        <label for="name">name</label><br>
        <input type="text" name="name" value="{{ $category->name }}">
    </p>

    <p>
        <label for="image">image</label><br>
        <input type="text" name="image" value="{{ $category->image }}">
    </p>

    <p>
        <label for="status">status</label><br>
        <input type="text" name="status" value="{{ $category->status }}">
    </p>

    <p>
        <label for="owned_by">owned by</label><br>
        <input type="text" name="owned_by" value="{{ $category->owned_by }}">
    </p>

    <p>
        <button type="submit" class="btn btn-primary btn-rounded btn-sm"> Update </button>
    </p>
</form>
@endsection