@extends('layouts.main')

@section('title')
    <title>Detail Product</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/productdetail.css') }}">
@endsection

@section('sec')
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            
                            <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="' . $product['image'] . '" /></div>
                            <!-- Add more tab-panes for additional images if needed -->
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="' . $product['thumbnail'] . '" /></a></li>
                            <!-- Add more list items for additional thumbnails if needed -->
                            </ul>
                            
                        </div>
                            <p>By <a href="/?author={{ $product->user->username }}">{{ $product->user->name }}</a> in <a href="/?categories={{ $product->category->slug }}" class="text-decoration-none"> {{ $product->category->name}}</a></p>
                            <h3 class="product-title">{{ $product -> name }}</h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div>
                            <p class="product-description">{{ $product -> description }}</p>
                            <h4 class="price">current price: <span>{{ $product -> price }}</span></h4>
                            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                            <h5 class="sizes">sizes:
                                <span class="size" data-toggle="tooltip" title="small">s</span>
                                <span class="size" data-toggle="tooltip" title="medium">m</span>
                                <span class="size" data-toggle="tooltip" title="large">l</span>
                                <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                            </h5>
                            <h5 class="colors">colors:
                                <span class="color orange" data-toggle="tooltip" title="Not In store"></span>
                                <span class="color green"></span>
                                <span class="color blue"></span>
                            </h5>
                            <div class="action">
                                <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <a href="/">Back</a>

@endsection