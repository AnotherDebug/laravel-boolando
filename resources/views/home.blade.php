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
                    <img class="first" src="../img/{{ $product['frontImage'] }}" alt="{{ $product['brand'] }}">
                    <img class="second" src="../img/{{ $product['backImage'] }}" alt="{{ $product['brand'] }}">
                </div>
                <div class="heart">
                    <p>&hearts;</p>
                </div>

                {{-- Discount --}}
                <p
                    class="{{ (isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'discount') ||
                    (isset($product['badges'][1]['type']) && $product['badges'][1]['type'] == 'discount')
                        ? 'discount'
                        : '' }}">
                    {{ isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'discount'
                        ? $product['badges'][0]['value']
                        : (isset($product['badges'][1]['type']) && $product['badges'][1]['type'] == 'discount'
                            ? $product['badges'][1]['value']
                            : '') }}
                </p>


                <p
                    class="{{ isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'tag' ? 'sustain' : '' }} {{ isset($product['badges'][0]['type']) && !isset($product['badges'][1]['type']) ? 'sus-only' : '' }}">
                    {{ isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'tag' ? $product['badges'][0]['value'] : '' }}
                </p>


                <p class="trademark">{{ $product['brand'] }}</p>
                <p class="description text-strong">{{ $product['name'] }}</p>
                <span class="price-discount text-red"></span>
                <span v-if="this.products.fullPrice !== null" class="price">{{ $product['price'] }}</span>
            </section>
        @endforeach


    </div>
@endsection

@section('title')
    | Homepage
@endsection
