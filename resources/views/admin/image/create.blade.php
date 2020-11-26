@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<h1>Create</h1>
<form method="post" action="store">
    @method('POST')
    @csrf
    <p>
        <label for="post_id">post_id</label><br>
        <input type="text" name="post_id" value="">
    </p>

    <p>
        <label for="path">path</label><br>
        <input type="text" name="path" value="">
    </p>

    <p>
        <label for="name">name</label><br>
        <input type="text" name="name" value="">
    </p>

    <p>
        <label for="status">status</label><br>
        <input type="text" name="status" value="">
    </p>

    <p>
    <button type="submit" class="btn btn-primary btn-rounded btn-sm" > Create </button>
    </p>
</form>
@endsection
