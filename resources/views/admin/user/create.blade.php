@extends('admin/layouts/master')
@section('title','All Post - Index')
@section('content')
<h1>Create</h1>
<form method="post" action="create" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <p>
        <label for="name">display_name</label><br>
        <input type="text" name="display_name" value="">
    </p>

    <p>
        <label for="name">username</label><br>
        <input type="text" name="username" value="">
    </p>

    <p>
        <label for="name">password</label><br>
        <input type="password" name="password" value="">
    </p>

    <p>
        <label for="name">email</label><br>
        <input type="text" name="email" value="">
    </p>

    <p>
        <label for="name">phone_number</label><br>
        <input type="text" name="phone_number" value="">
    </p>

    <p>
        <label for="image">avatar</label><br>
        <input type="file" name="avatar" value="">
    </p>

    <p>
        <label for="status">view</label><br>
        <input type="text" name="view" value="">
    </p>

    <p>
        <label for="status">gender</label><br>
        <input type="text" name="gender" value="">
    </p>

    <p>
        <label for="status">status</label><br>
        <input type="text" name="status" value="">
    </p>

    <p>
        <label for="owned_by">permission</label><br>
        <input type="text" name="permission" value="">
    </p>

    <p>
    <button type="submit" class="btn btn-primary btn-rounded btn-sm" > Create </button>
    </p>
</form>
@endsection
