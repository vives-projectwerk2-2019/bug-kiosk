@extends('layouts.bug')

@section('content')

<h1 id="under-navbar">Profile</h1>
    <div class="avatar">
        <img src="{{ Auth::user()->avatar }}" alt="User icon" id="profile_picture">
        <br>
        <br>
        <form action="/edit_profile" method="POST" enctype="multipart/form-data">
            <div class="file-field input-field" id="avatar_input_field">
              <div class="waves-effect waves-light btn-large">
                <span>Select image</span>
                <input type="file" name="avatar">
                <i class="material-icons right">photo_library</i>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload a custom avatar.">
                @csrf
              </div>
              <button class="waves-effect waves-light btn-large" type="submit" name="action">Upload
                <i class="material-icons right">file_upload</i>
              </button>
            </div>
          </form>
          <br>
    <div>
        <p id="profile-name">Name: {{ Auth::user()->name }}</p>
        <p id="profile-email">E-mail: {{ Auth::user()->email }}</p>
    </div>
</div>

@endsection