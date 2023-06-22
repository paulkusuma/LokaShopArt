@extends('dashboard.layoutsDash.main')

@section('container')
<div class="card mt-5">
    <div class="container-fliud">
        <div class="wrapper row">
            <div class="preview col-md-5">
                @if($product->image)
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                            <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->category->name }}" style="width: 300px; height: auto;">
                        </div>
                    </div>
                @else()
                @endif
                
                {{-- <ul class="preview-thumbnail nav nav-tabs">
                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="' . $product['thumbnail'] . '" /></a></li>
                <!-- Add more list items for additional thumbnails if needed -->
                </ul> --}}
                
            </div>
            <div class="details col-md-7">
                <h3 class="product-title">{{ $product -> name }}</h3>
                {{-- <div class="rating">
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="review-no">41 reviews</span>
                </div> --}}
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
                <div>
                    <a href="/dashboard/products" class="btn"> <i class="bi bi-arrow-left text-green"></i>Back</a>
                    <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn"> <i class="bi bi-pencil-square text-warning"></i>Edit</a>
                    {{-- Delete --}}
                    <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn" onclick="return confirm('Yakin ingin menghapus product?')"><i class="bi bi-trash text-danger"></i>Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection