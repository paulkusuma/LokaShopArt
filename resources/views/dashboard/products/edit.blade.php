@extends('dashboard.layoutsDash.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product</h1>
  </div>
  <div class="col-lg-8">

  <form method="post" action="/dashboard/products/{{ $product->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
      autofocus value="{{ old('name', $product->name) }}" required>
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $product->slug) }}" required>
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach($categories as $category)
        @if(old('category_id', $product->category_id) == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Harga</label>
      <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  value="{{ old('price', $product->price) }}" required>
      @error('price')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="stok" class="form-label">Stok</label>
      <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" 
      value="{{ old('stok', $product->stok) }}" required>
      @error('stok')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="hidden" name="oldImage" value="{{ $product->image }}">
      @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>  

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"  value="{{ old('description', $product->description) }}">
      @error('description')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
  </form>

</div>

{{-- FetchAPI --}}
<script>
    const name=document.querySelector('#name')
    const slug=document.querySelector('#slug')

    name.addEventListener('change', function(){
        fetch('/dashboard/products/checkSlug?name='+name.value)
        .then(response=>response.json())
        .then(data=>slug.value=data.slug)
    });

    function previewImage(){
      const image=document.querySelector('#image')
      const imgPreview=document.querySelector('.img-preview')

      imgPreview.style.display='block';

      const oFReader=new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload=function(oFREvent){
        imgPreview.src=oFREvent.target.result;
      }
    }

</script>
@endsection