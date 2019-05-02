@extends('layouts.bug')

@section('content')
<div class="container">

    <h1 style="margin-bottom: 10%">Become admin</h1>

        <div class="row">
    @if(session()->has('error'))
    <p style="font-weight: bold; color: red;">{{ session()->get('error') }}</p>
    @else
    <p class="col s6 offset-s3">Please enter the admin key.</p>
    @endif
        </div>

    <div class="row"">
        <form class="col s12"method="POST" action="/become_admin">
            @csrf
        <div class="row">
            <div class="input-field col s6 offset-s3">
            <i class="material-icons prefix">security</i>
            <input id="icon_prefix" name="admin_key" type="text" class="validate" required="required">
            <label for="icon_prefix">Admin key</label>
            </div>
        </div>
        <button class="waves-effect waves-light btn-large" type="submit" name="action">Submit admin key
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
@endsection