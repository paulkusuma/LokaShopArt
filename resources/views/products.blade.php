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
                <button> <a href="/products/{{ $products[0] -> slug }}" class="btn">Beli Sekarang</a></button>
            </div>

            <div>
                    <div class="image-container">
                        <img src="{{ asset('storage/'. $products[0]->image) }}" alt="{{ $products[0]->category->name }}">
                    </div>
                <div class="title">{{ $products[0] -> name }}</div>
                <div class="desc">{{ $products[0] -> description }}</div>
               
            </div>
        

        </div>
    </section>

    <h1 class="pheading">Our Hot Sale Art Right Now</h1>
 
    <section class="sec">
        <div class="products">
            @foreach($products->skip(1) as $product)
            <div class="card">
                <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->category->name }}">
                <div class="title">{{ $product -> name }}</div>

                <p>By <a href="/?author={{ $product->user->username }}">{{ $product->user->name }}</a> 
                    In <a href="/?categories={{ $product->category->slug }}" class="text-decoration-none"> 
                        {{ $product->category->name}}</a> {{ $product->created_at->diffForHumans() }}</p>
                
                <div class="desc">{{ $product -> description }}</div>
                <div class="box">
                    <div class="harga"> Rp. {{ number_format($product -> price) }}</div>
                    <a href="/products/{{ $product -> slug }}">Beli</a>
                    
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
