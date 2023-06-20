@extends('layouts.main')

@section('title')
    <title>LokaArt Ecommerce</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@include('partials.navbar')

@section('sec')

            <h1>Categories</h1>

            @foreach($categories as $category)

            <ul>
                <li>
                    <h2><a href="/?categories={{ $category->slug }}">{{ $category->name }}</a></h2>
                </li>
            </ul>
            
            @endforeach

@endsection