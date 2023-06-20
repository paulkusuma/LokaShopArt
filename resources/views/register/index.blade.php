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
      <form action="/register" method="post" class="sign-in-form">
        @csrf
        <h2 class="title">Sign Up</h2>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" name="name" id="name" class=" form-control @error('name') is-invalid              
          @enderror" placeholder="Nama" required value="{{ old('name') }}"/>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>    
          @enderror
        </div>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" name="username" id="username" class=" form-control @error('username') is-invalid              
          @enderror" placeholder="Username" required value="{{ old('username') }}"/>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>    
          @enderror
        </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" class=" form-control @error('username') is-invalid              
            @enderror" placeholder="email@example.com" required value="{{ old('email') }}"/>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
            @enderror
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" class=" form-control @error('username') is-invalid              
          @enderror" placeholder="Password" required />
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>    
          @enderror
        </div>
        <button class="btn solid" type="submit">Register</button>

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
        <h3>Sudah Pernah Buat Akun ?</h3>
        <p>
            Masuk dengan mengisi isian di samping ini
        </p>
        <a href="/login" class="btn transparent" id="sign-up-btn">
          Sign in
        </a>
      </div>
      <img src="img/log.svg" class="image" alt="" />
    </div>
  </div>
</div>

@endsection

@section('JavaScript')
    <script src="{{ asset('js/loginjs.js') }}"></script>
@endsection
