@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('title','検索結果')

@section('content')

<div class="heading">
    <div class="heading__inner">
        <h1 class="products__header">"　"の商品一覧</h1>
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
            </form>
            <div class="products-sort">
                <div class="products-sort__header">価格順で表示</div>
                <select class="products-sort__select" name="sort">
                    <option disabled selected>価格で並べ替え</option>
                    <option value="desc">高い順に表示</option><!--降順-->
                    <option value="asc">安い順に表示</option><!--昇順-->
                </select>
            </div>
        </div>
        <div class="contents__products">
            <div class="products-group">
                <div class="products-group__item">
                    <a href="/products/details">
                        <img class="products-group__img" src="{{ asset('storage/img/kiwi.png') }}" alt="キウイ">
                    </a>
                    <div class="products-group__title">
                        <p class="products__title--name">キウイ</p>
                        <p class="products__title--price">¥800</p>
                    </div>
                </div>
                <div class="products-group__item">
                    <a href="/products/details">
                        <img class="products-group__img" src="{{ asset('storage/img/strawberry.png') }}" alt="ストロベリー">
                    </a>
                    <div class="products-group__title">
                        <p class="products__title--name">ストロベリー</p>
                        <p class="products__title--price">¥1,200</p>
                    </div>
                </div>
                <div class="products-group__item">
                    <a href="/products/details">
                        <img class="products-group__img" src="{{ asset('storage/img/orange.png') }}" alt="オレンジ">
                    </a>
                    <div class="products-group__title">
                        <p class="products__title--name">オレンジ</p>
                        <p class="products__title--price">¥850</p>
                    </div>
                </div>
            </div>
            <div class="products-group">
                <div class="products-group__item">
                    <a href="/products/details">
                        <img class="products-group__img" src="{{ asset('storage/img/watermelon.png') }}" alt="スイカ">
                    </a>
                    <div class="products-group__title">
                        <p class="products__title--name">スイカ</p>
                        <p class="products__title--price">¥700</p>
                    </div>
                </div>
                <div class="products-group__item">
                    <a href="/products/details">
                        <img class="products-group__img" src="{{ asset('storage/img/peach.png') }}" alt="桃">
                    </a>
                    <div class="products-group__title">
                        <p class="products__title--name">ピーチ</p>
                        <p class="products__title--price">¥1,000</p>
                    </div>
                </div>
                <div class="products-group__item">
                    <a href="/products/details">
                        <img class="products-group__img" src="{{ asset('storage/img/muscat.png') }}" alt="シャインマスカット">
                    </a>
                    <div class="products-group__title">
                        <p class="products__title--name">シャインマスカット</p>
                        <p class="products__title--price">¥1,400</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bottom">
    <div class="bottom__inner">
        <div class="paginate">

        </div>
    </div>

</div>
</div>
@endsection
