@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card jumbotron">
                <div class="card-header bg-primary">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <b> You are logged in! </b>
                </div>
                <br>
                <br>
                <a href="/" class="btn btn-success">Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
