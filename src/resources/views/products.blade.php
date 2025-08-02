@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

@section('content')

<div class="heading">
    <div class="heading__inner">
        <h1 class="heading__inner--title">商品一覧</h1>
        <div class="heading__inner--link">
            <a class="add-product" href="/">+ 商品を追加</a>
        </div>
    </div>
</div>

<div class="contents">
    <div class="contents__inner">
        <div class="contents__search">
            <form class="search-form" action="/products/search" method="get">
                <input class="search-form__input" type="text" name="keyword" placeholder="商品名で検索">
                <button class="search-form__button" type="submit">検索</button>
            </form>
            <form class="sort-form">
                <div class="sort-form__header">価格順で表示</div>
                <select class="products-sort" name="sort">
                    <option disabled selected>価格で並べ替え</option>
                    <option value="desc">高い順に表示</option><!--降順-->
                    <option value="asc">安い順に表示</option><!--昇順-->
                </select>
            </form>
        </div>
        <div class="contents__products">
            <div class="products-group">
                <div class="products-group__item">
                    <img class="products-group__img" src="{{ asset('storage/img/kiwi.png') }}" alt="キウイ">
                    <div class="products-group__title">
                    <p class="products__title--name">キウイ</p>
                    <p class="products__title--price">¥800</p>
                </div>
                <div class="products-group__item">
                    <img class="products-group__img" src="{{ asset('storage/img/strawberry.png') }}" alt="ストロベリー">
                    <div class="products-group__title">
                        <p class="products__title--name">ストロベリー</p>
                        <p class="products__title--price">¥1,200</p>
                    </div>
                </div>
                <div class="products-group__item">
                    <img class="products-group__img" src="{{ asset('storage/img/orange.png') }}" alt="オレンジ">
                    <div class="products-group__title">
                        <p class="products__title--name">オレンジ</p>
                        <p class="products__title--price">¥850</p>
                    </div>
                </div>
            </div>
            <div class="products-group">
                <div class="products-group__item">
                    <img class="products-group__img" src="{{ asset('storage/img/watermelon.png') }}" alt="スイカ">
                    <div class="products-group__title">
                    <p class="products__title--name">スイカ</p>
                    <p class="products__title--price">¥700</p>
                </div>
                <div class="products-group__item">
                    <img class="products-group__img" src="{{ asset('storage/img/peach.png') }}" alt="桃">
                    <div class="products-group__title">
                        <p class="products__title--name">ピーチ</p>
                        <p class="products__title--price">¥1,000</p>
                    </div>
                </div>
                <div class="products-group__item">
                    <img class="products-group__img" src="{{ asset('storage/img/muscat.png') }}" alt="シャインマスカット">
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
@endsection
