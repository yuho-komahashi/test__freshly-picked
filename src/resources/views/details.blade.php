@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/details.css') }}">
@endsection

@section('title','商品詳細')

@section('content')

<div class="contents">
    <div class="detail-contents__inner">
        <div class="breadcrumbs">
            <p>商品一覧 > ピーチ</p><!--パンくずリスト入る-->
        </div>
        
        <form class="detail-form" action="/products/{productId}/update" method="post" enctype="multipart/form-data">
            <div class="detail-form__group">
                <div class="detail-form__image">
                    <img class="detail__image" src="{{ asset('storage/img/peach.png') }}" alt="ピーチ">
                    <div class="detail-form__input">
                        <input class="detail-form__input--image" type="file" name="image" value="{{ old('image') }}">
                    </div>
                    <p class="detail-form__error">
                        商品画像を登録してください
                    </p>
                    <p class="detail-form__error">
                        商品画像を登録してください
                    </p>
                    <p class="detail-form__error">
                        「.png」または「.jpg」形式でアップロードしてください
                    </p>
                </div>
                <div class="detail-form__detail">
                    <div class="detail-form__detail--item">
                        <label class="detail-form__label" for="name">商品名</label>
                        <div class="detail-form__input">
                            <input class="detail-form__input--text" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="商品名を入力" >
                        </div>
                        <p class="detail-form__error">
                            商品名を入力してください
                        </p>
                    </div>
                    <div class="detail-form__detail--item">
                        <label class="detail-form__label" for="price">値段</label>
                        <div class="detail-form__input">
                            <input class="detail-form__input--text" type="price" name="price" id="price" value="{{ old('price') }}" placeholder="値段を入力" >
                        </div>
                        <p class="detail-form__error">
                            値段を入力してください
                        </p>
                        <p class="detail-form__error">
                            数値で入力してください
                        </p>
                        <p class="detail-form__error">
                            0～10,000円以内で入力してください
                        </p>
                    </div>
                    <div class="detail-form__detail--item">
                        <label class="detail-form__label" for="season">季節</label>
                        <div class="detail-form__input">
                            <input class="detail-form__input--checkbox" type="checkbox" name="season" id="season" value="1" {{old('season')==1 ? 'checked' : '' }}>
                            <span class="detail-form__input--season">春</span>
                            <input class="detail-form__input--checkbox" type="checkbox" name="season" id="season" value="2" {{old('season')==2 ? 'checked' : '' }}>
                            <span class="detail-form__input--season">夏</span>
                            <input class="detail-form__input--checkbox" type="checkbox" name="season" id="season" value="3" {{old('season')==3 ? 'checked' : '' }}>
                            <span class="detail-form__input--season">秋</span>
                            <input class="detail-form__input--checkbox" type="checkbox" name="season" id="season" value="4" {{old('season')==4 ? 'checked' : '' }}>
                            <span class="detail-form__input--season">冬</span>
                        </div>
                        <p class="detail-form__error">
                            季節を選択してください
                        </p>
                    </div>
                </div>
            </div>
            <div class="detail-form__description">
                <label class="detail-form__label" for="description">商品説明</label>
                <div class="detail-form__input">
                    <textarea class="detail-form__input--textarea" name="description" id="description" value="{{ old('description') }}" placeholder="商品の説明を入力" cols="50" rows="10"></textarea>
                </div>
                <p class="detail-form__error">
                    商品説明を入力してください
                </p>
                <p class="detail-form__error">
                    120文字以内で入力してください
                </p>
            </div>
            <div class="detail-form__button">
                <button class="detail-form__button--back" type="button" onclick="location.href='/products'">戻る</button>
                <button class="detail-form__button--update" type="submit">変更を保存</button>
                <button>
                <!--削除ボタン入るゴミ箱アイコンで？--></button>
            </div>
        </form>
    </div>
</div>
@endsection