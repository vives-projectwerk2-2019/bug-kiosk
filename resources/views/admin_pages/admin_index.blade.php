@extends('layouts.bug')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Welcome to the admin page!
                    <br>
                    <br>
                    <a href ="/admin/userInfo" class="waves-effect waves-light btn-large" style="color: white"><i class="material-icons right">account_circle</i>Users</a>
                    <a href ="/admin/dongleInfo" class="waves-effect waves-light btn-large" style="color: white"><i class="material-icons right">event_available</i>Dongles</a>
                    <a href ="/admin/userRoles" class="waves-effect waves-light btn-large" style="color: white"><i class="material-icons right">stars</i>Roles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
