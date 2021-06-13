@extends('layouts.master')

@section('meta')
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <title>{{ $category->name }}</title>
@stop

@section('content')
<div class="cards_2">
    @foreach($category->products as $product)
        <div class="card_2 wow fadeInUp">
            <img src="{{ Voyager::image( $product->image ) }}" alt="{{ $product->title }}" class="card_image_2">
            <a href="{{ route('product.show', ['locale' => session()->get('locale'), 'id' => $product->id]) }}">
                <span herf="#">{{$category->name}}</span>
            </a>
        </div>
    @endforeach
</div>

@stop
