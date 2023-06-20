@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endsection

<title>Sign in & Sign up Form</title>

@section('sec')
<div class="container">
  <div class="forms-container">
    <div class="signin-signup">   

      <form action="/login" method="post" class="sign-in-form">
        @csrf
        
        @if(session()->has('Berhasil'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif  

        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif  

        <h2 class="title">Sign in</h2>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" name="username" id="username" class=" form-control @error('username') is-invalid              
          @enderror" placeholder="Username" autofocus required value="{{ old('username') }}"/>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>    
          @enderror
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="username" placeholder="Password" required/>
        </div>
        <button class="btn solid" type="submit">Login</button>

        <p class="social-text">Atau masuk dengan</p>
        <div class="social-media">
          <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-google"></i>
          </a>
        </div>
      </form>
    </div>
  </div>

  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>Belum Punya Akun ?</h3>
        <p>
          Mari buat akun dan bergabung di website ecomemmerce kesenian ini
        </p>
        <a href="/register" class="btn transparent" id="sign-up-btn">
          Sign up
        </a>
      </div>
      <img src="img/log.svg" class="image" alt="" />
    </div>
  </div>
</div>

{{-- <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Atau masuk dengan</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="/" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Belum Punya Akun ?</h3>
          <p>
            Mari buat akun dan bergabung di website ecomemmerce kesenian ini
          </p>
          <button class="btn transparent" id="sign-up-btn">
            <a href="/register">Sign up</a>
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
    </div>
  </div> --}}
@endsection

@section('JavaScript')
    <script src="{{ asset('js/loginjs.js') }}"></script>
@endsection
