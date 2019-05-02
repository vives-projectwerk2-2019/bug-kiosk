@extends('layouts.bug')

@section('content')
<div class="container">
    <h1>Admin page</h1>
    <p>Welcome to the admin page!</p>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        <br>
    @endif
    <br>
  <a href ="/admin/userInfo" class="waves-effect waves-light btn-large" style="color: white"><i class="material-icons right">account_circle</i>Users</a>
  <a href ="/admin/dongleInfo" class="waves-effect waves-light btn-large" style="color: white"><i class="material-icons right">event_available</i>Dongles</a>
  <a href ="/admin/admins" class="waves-effect waves-light btn-large" style="color: white"><i class="material-icons right">stars</i>Admins</a>
            
</div>
@endsection
