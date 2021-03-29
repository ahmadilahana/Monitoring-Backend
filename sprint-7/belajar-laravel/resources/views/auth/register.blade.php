@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 600px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form class="form-signin border p-lg-4" style="width: 35%" action="{{ route('register') }}" method="POST">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <div class="form-group row">
            <label for="staticName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="staticName">
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="staticEmail">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Password Confirm</label>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control" id="">
            </div>
        </div>
        <button class="btn btn-md btn-primary btn-block" type="submit">Register</button>
        <p>Sudah punya akun? <a href="{{ route('login')}}">Login</a></p>
      </form>
</div>
@endsection
