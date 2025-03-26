@extends('template.main')

@section('title', 'Login Page')

@section('content')
<div class="container mt-5 justify-content-center">
    <div class="row">
        <div class="col-9 col-sm-9 col-md-10 col-lg-11 col-xl-12 fixed-width">
            <div class="card p-4 shadow">
                <h3 class="text-center">Login</h3>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" />
                    <span id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </span>
                <div>
                    <button class="btn btn-dark w-100">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection