@extends('dashboard.layoutsDash.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Product Baru</h1>
  </div>
  <div class="col-lg-8">

  <form method="post" action="/dashboard/products">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name') }}">
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug">
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach($categories as $category)
        @if(old('category_id') == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Harga</label>
      <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  value="{{ old('price') }}">
      @error('price')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description">

      </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
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
    })

</script>
@endsection