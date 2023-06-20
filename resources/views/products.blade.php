@extends('layouts.main')

@section('title')
    <title>LokaArt Ecommerce</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
@endsection

@include('partials.navbar')

@section('sec')
    @if($products->count()>0)
    <section class="content">
        <div class="text-container">
            <div class="text">
                <h1>New Arrivals Art</h1>
                <p>Dapatkan Produk Kesenian Terbaru Dari Para Seniman Indonesia</p>
                <button class="btn">Beli Sekarang</button>
            </div>

            <div>
                {{-- <div class="image-container">
                <img src="https://api.unsplash.com/1200x400/{{ $products[0]->category->name }}" alt="Shopping Image">
                </div> --}}
                <div class="title">{{ $products[0] -> name }}</div>
                <div class="desc">{{ $products[0] -> description }}</div>
                <a href="/products/{{ $products[0] -> id }}">Beli</a>
            </div>
        

        </div>
    </section>

    <h1 class="pheading">Our Hot Sale Art Right Now</h1>
 
    <section class="sec">
        <div class="products">
            @foreach($products->skip(1) as $product)
            <div class="card">
                <div class="img"><img src="Gambar/1.png" alt=""></div>
                <div class="title">{{ $product -> name }}</div>

                <p>By <a href="/?author={{ $product->user->username }}">{{ $product->user->name }}</a> 
                    <a href="/?categories={{ $product->category->slug }}" class="text-decoration-none"> 
                        {{ $product->category->name}}</a> {{ $product->created_at->diffForHumans() }}</p>
                
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
        <div class="d-flex justify-content-end">
            {{ $products->links() }}
        </div>
    @else
        <p class="text-center fs-4">No Product Found</p>
    @endif
  
@endsection

@section('JavaScript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection
