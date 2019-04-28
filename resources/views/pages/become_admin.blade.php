@extends('layouts.bug')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin registration</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session()->has('error'))
                    <p style="font-weight: bold; color: red;">{{ session()->get('error') }}</p>
                    @else
                    Please enter the admin key.
                    @endif

                    <div class="row">
                        <form class="col s12"method="POST" action="/become_admin">
                            @csrf
                          <div class="row">
                            <div class="input-field col s6">
                              <i class="material-icons prefix">security</i>
                              <input id="icon_prefix" name="admin_key" type="text" class="validate">
                              <label for="icon_prefix">Admin key</label>
                            </div>
                          </div>
                          <button class="waves-effect waves-light btn-large" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                      </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection