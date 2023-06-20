@extends('layouts.main')

@section('title')
    <title>LokaArt Ecommerce</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@include('partials.navbar')

@section('sec')

    <section class="sec">
        <div class="products">
            <h1>Product Category : {{ $category }}</h1>

            @foreach($products as $product)

            <div class="card">
                <div class="img"><img src="Gambar/1.png" alt=""></div>
                <div class="title">{{ $product -> name }}</div>
                <div class="desc">{{ $product -> description }}</div>
                <div class="box">
                    <div class="harga">{{ $product -> price }}</div>
                    <a href="/products/{{ $product -> id }}">Beli</a>
                    {{-- <button class="btn" onclick="redirectToProductDetail('1')">Beli</button> --}}
                </div>
            </div>
            
            @endforeach
        </div>
    </section>

@endsection