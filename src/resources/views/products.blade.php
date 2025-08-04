@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('title','商品一覧')

@section('content')

<div class="heading">
    <div class="heading__inner">
        <h1 class="products__header">商品一覧</h1>
        <div class="heading__inner--link">
            <button class="add-product" type="button" onclick="location.href='/products/register'">+ 商品を追加</button>
        </div>
    </div>
</div>

<div class="contents">
    <div class="contents__inner">
        <div class="contents__search">
            <form class="search-form" action="/products/search" method="get">
                <div class="search-form__input">
                    <input class="search-form__input--text" type="text" name="keyword" placeholder="商品名で検索">
                </div>
                <button class="search-form__button" type="submit">検索</button>
                <div class="products-sort">
                    <div class="products-sort__header">価格順で表示</div>
                    <select class="products-sort__select" name="sort">
                        <option disabled selected>価格で並べ替え</option>
                        <option value="desc">高い順に表示</option><!--降順-->
                        <option value="asc">安い順に表示</option><!--昇順-->
                    </select>
                </div>
            </form>
        </div>
        <div class="contents__products">
            @foreach ($products as $product)
            <div class="products-group">
                <div class="products-group__item">
                    <a href="/products/{{$product->id}}">
                        <img class="products-group__img" src="{{ asset('storage/img/'. $product->image) }}" alt="{{ $product->name }}">
                    </a>
                    <div class="products-group__title">
                        <p class="products__title--name">{{ $product->name }}</p>
                        <p class="products__title--price">¥{{ $product->price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="bottom">
    <div class="bottom__inner">
        <div class="paginate">

        </div>
    </div>
</div>
@endsection
