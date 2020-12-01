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
                <th>Display_Name</th>
                <th>User_name</th>
                <th>Email</th>
                <th>Phone_Number</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($user as $us)
            <tr>
                <td>{{$us -> id}}</td>
                <td>{{$us -> display_name}}</td>
                <td>{{$us -> username}}</td>
                <td>{{$us -> email}}</td>
                <td>{{$us -> phone_number}}</td>
                
                <td class="d-inline-block float-right">
                    <a href="detail/{{$us -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-eye"></i> </button></a>
                </td>
                <td> 
                    <a href="edit/{{$us -> id}}"><button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-edit"></i></button></a>
                </td>
                <td> 
                    <button type="submit" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i></button>
                </td>
                
            </tr>
        @endforeach 
               
        </tbody>      
    </table>
    
</div>
@endsection