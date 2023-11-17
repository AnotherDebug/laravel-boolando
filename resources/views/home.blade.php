@php
    $products = config('products');
@endphp


@extends('layouts.main')

@section('content')

<div class="container">

    @foreach ($products as $product)

 <!-- Singola card -->
 <section class="card">
    <div class="img">
        <img class="first" src="../img/{{$product['frontImage']}}" alt="{{$product['brand']}}">
        <img class="second" src="../img/{{$product['backImage']}}" alt="{{$product['brand']}}">
    </div>
    <div class="heart">
        <p>&hearts;</p>
    </div>
    <p v-if="products.discount !== null" class="discount"></p>
    <p v-if="products.sostenibilita === true" class="sustain" class=" products.discount === null && products.sostenibilita === true ? 'sus-only' : '' ">Sostenibilità</p>
    <p class="trademark"></p>
    <p class="description text-strong"></p>
    <span class="price-discount text-red"></span>
    <span v-if="this.products.fullPrice !== null" class="price"></span>
</section>

    @endforeach


</div>

@endsection

@section('title')
    | Homepage
@endsection
