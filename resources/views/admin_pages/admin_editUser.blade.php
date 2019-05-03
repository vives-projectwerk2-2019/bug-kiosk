@extends('layouts.bug')

@section('content')

<h1>Edit user with ID: {{ $user->id }}</h1>
    <div class="avatar">
        <img src="{{ asset($user->avatar) }}" alt="User icon" id="profile_picture">
        <br>
        <br>
        
        <a href="/admin/userInfo/reset/avatar/{{ $user->id }}" class="waves-effect waves-light btn-large">Reset profile picture</a>
    
        <br>
        <br>
        <br>
        
        <p style="color: red; font-weight: bold;">Warning:<br>Resetting user_dongle_id will terminate connection to controller!</p> 
        <p>User_dongle_id: {{ $user->user_dongle_id}}</p>
        <a href ="/admin/userInfo/reset/user_dongle_id/{{ $user->id }}" class="waves-effect waves-light btn-large"></i>Reset user_dongle_id</a>
      </div>
      <br>
      <br>
    
    <form action="/admin/userInfo/edit/{{ $user->id }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="row">
                <div class="input-field col l6 offset-l3">
                <input value="{{ $user->name }}" id="name" name="name" type="text" class="validate">
                <label for="name">Name</label>
             </div>
            <div class="row">
                <div class="input-field col l6 offset-l3">
                  <input value="{{ $user->email }}" id="email" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                  <span class="helper-text" data-error="Invalid email." data-success="Valid email."></span>
                </div>
            </div>
            <div class="row">
                <a href="/admin/userInfo" class="waves-effect waves-light btn-large">back</a>
                <button class="waves-effect waves-light btn-large" type="submit" name="action">Submit changes
                <i class="material-icons right">check</i>
            </button>
            </div>
          </form>
</div>

@endsection