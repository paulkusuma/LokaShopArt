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
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" rows="3"></textarea>
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