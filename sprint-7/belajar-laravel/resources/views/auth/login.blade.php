@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 600px">
    <form class="form-signin border p-lg-4" style="width: 30%" action="{{ route('login') }}" method="POST">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control mb-2 p-3" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control p-3" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
        <p>Belum punya akun? <a href="{{ route('register')}}">Register</a></p>
      </form>
</div>
@endsection
