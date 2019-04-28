@extends('layouts.bug')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Permission denied!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You do not have permission to view the admin page, if you think this is a mistake please contact an administrator.
                </div>
            </div>
        </div>
    </div>
    <a  href="home" class="waves-effect waves-light btn-large">Return to home</a>
</div>
@endsection