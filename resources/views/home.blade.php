@extends('layouts.main')

@section('content')

<div class="container">

    <!-- Singola card -->
    <section class="card">
        <div class="img">
            <img class="first" :src="`/src/assets/img/${products.primaryImage}`" alt="">
            <img class="second" :src="`/src/assets/img/${products.secondaryImage}`" alt="">
        </div>
        <div class="heart">
            <p>&hearts;</p>
        </div>
        <p v-if="products.discount !== null" class="discount">{{ products.discount }}</p>
        <p v-if="products.sostenibilita === true" class="sustain" :class=" products.discount === null && products.sostenibilita === true ? 'sus-only' : '' ">Sostenibilità</p>
        <p class="trademark">{{ products.marca }}</p>
        <p class="description text-strong">{{ description }}</p>
        <span class="price-discount text-red">{{ priceDiscount }}</span>
        <span v-if="this.products.fullPrice !== null" class="price">{{ priceFull }}</span>
    </section>

</div>

@endsection

@section('title')
    | Homepage
@endsection
