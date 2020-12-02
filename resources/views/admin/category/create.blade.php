@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<h1>Create</h1>
<form method="post" action="store" >
    @method('POST')
    @csrf
    <p>
        <label for="name">name</label><br>
        <input type="text" name="name" value="">
    </p>

    <p>
        <label for="image">image</label><br>
        <input type="text" name="image" value="">
    </p>

    <p>
        <label for="status">status</label><br>
        <input type="text" name="status" value="">
    </p>

    <p>
        <label for="owned_by">owned_by</label><br>
        <input type="text" name="owned_by" value="">
    </p>

    <p>
    <button type="submit" class="btn btn-primary btn-rounded btn-sm" > Create </button>
    </p>
</form>
@endsection
