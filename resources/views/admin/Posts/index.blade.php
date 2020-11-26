@extends('master')
@section('title','All Post - Index')
@section('post-active','active')
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nigam</td>
                <td>Eichmann</td>
                <td>@Sonu</td>
                <td>Nigam</td>
                <td>Eichmann</td>
                <td>@Sonu</td>
            
                <td class="d-inline-block float-right">
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-info-circle"></i> Details</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="far fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>Deshmukh</td>
                <td>Prohaska</td>
                <td>@Genelia</td>
                <td>Deshmukh</td>
                <td>Prohaska</td>
                <td>@Genelia</td>
                <td class="d-inline-block float-right">
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-info-circle"></i> Details</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="far fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Roshan</td>
                <td>Rogahn</td>
                <td>@Hritik</td>
                <td>Roshan</td>
                <td>Rogahn</td>
                <td>@Hritik</td>
                <td class="d-inline-block float-right">
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-info-circle"></i> Details</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="far fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection