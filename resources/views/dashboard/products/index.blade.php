@extends('dashboard.layoutsDash.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product Saya</h1>
  </div>

  <div class="table-responsive small">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create New Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Product</th>
          <th scope="col">Category</th>
          <th scope="col">Stock</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)    
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->category->name }}</td>
          <td>placeholder</td>
          <td>
            <a href="/dashboard/products/{{ $product->slug }}"> <i class="bi bi-eye text-primary"></i></a>
            <a href=""> <i class="bi bi-pencil-square text-warning"></i></a>
            <a href=""> <i class="bi bi-trash text-danger"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection