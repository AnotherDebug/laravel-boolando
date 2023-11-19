@php
    $products = config('products');

    function discountedPrice($product)
    {
        $discount = 0;

        foreach ($product['badges'] as $badge) {
            if ($badge['type'] === 'discount') {
                $discount =  floatval(str_replace('%', '', $badge['value']));
                $discount = ltrim($discount, '-');
            }
        }
        $discountedPrice = $product['price'] - ($product['price'] * $discount) / 100;

        return number_format($discountedPrice, 2);
    }

@endphp

@extends('layouts.main')

@section('content')
    <div class="container">

        @foreach ($products as $product)
        @if ($product['brand'] === "Guess" || $product['brand'] === "Come Zucchero Filato" || $product['brand'] === "Maya Deluxe" || $product['brand'] === "Esprit")
            <!-- Singola card -->
            <section class="card">
                <div class="img">
                    <img class="first" src="../img/{{ $product['frontImage'] }}" alt="{{ $product['brand'] }}">
                    <img class="second" src="../img/{{ $product['backImage'] }}" alt="{{ $product['brand'] }}">
                </div>
                <div class="heart">
                    <a style="{{$product['isInFavorites'] ? 'color:red' : ''}}" href="#">&hearts;</a>
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

                {{-- Sostenibilita --}}
                <p
                    class="{{ isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'tag' ? 'sustain' : '' }}
                    {{ isset($product['badges'][0]['type']) && !isset($product['badges'][1]['type']) ? 'sus-only' : '' }}">
                    {{ isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'tag'
                        ? $product['badges'][0]['value']
                        : '' }}
                </p>

                {{-- Marca --}}
                <p class="trademark">{{ $product['brand'] }}</p>

                {{-- Nome --}}
                <p class="description text-strong">{{ $product['name'] }}</p>

                {{-- Prezzo Scontato --}}
                <span class="price-discount text-red {{ isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'tag' && !isset($product['badges'][1]['type']) ? 'd-none' : '' }}">{{ discountedPrice($product) }} &euro;</span>

                {{-- Prezzo Pieno --}}
                <span class="price {{ isset($product['badges'][0]['type']) && $product['badges'][0]['type'] == 'tag' && !isset($product['badges'][1]['type']) ? 'fullPrice' : '' }}">{{ $product['price'] }} &euro;</span>
            </section>
            @endif
        @endforeach


    </div>
@endsection


@section('title')

| Moda Donna

@endsection
