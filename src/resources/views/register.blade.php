@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('title','商品登録')

@section('content')

<div class="heading">
    <div class="heading__inner">
        <h1 class="register__header">商品登録</h1>
    </div>
</div>

<div class="contents">
    <div class="contents__inner">
        <form class="register-form" action="/products/register" method="post" enctype="multipart/form-data">
            <div class="register-form__group">
                <label class="register-form__label" for="name">商品名</label>
                <span class="register-form__label--required">必須</span>
                <div class="register-form__input">
                    <input class="register-form__input--text" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="商品名を入力" >
                </div>
                <p class="register-form__error">
                    商品名を入力してください
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="price">値段</label>
                <span class="register-form__label--required">必須</span>
                <div class="register-form__input">
                    <input class="register-form__input--text" type="text" name="price" id="price" value="{{ old('price') }}" placeholder="値段を入力" >
                </div>
                <p class="register-form__error">
                    値段を入力してください
                </p>
                <p class="register-form__error">
                    数値で入力してください
                </p>
                <p class="register-form__error">
                    0～10,000円以内で入力してください
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="image">商品画像</label>
                <span class="register-form__label--required">必須</span>
                <div class="register-form__img">
                    <a href="" ><!--遷移先が入る-->
                        <img class="register__img" src="{{ asset('storage/img/banana.png') }}" alt="バナナ">
                    </a>
                </div>
                <div class="register-form__input">
                    <input class="register-form__input--image" type="file" name="image" id="image" value="{{ old('image') }}">
                </div>
                <p class="register-form__error">
                    商品画像を登録してください
                </p>
                <p class="register-form__error">
                    「.png」または「.jpg」形式でアップロードしてください
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="season">季節</label>
                <span class="register-form__label--required">必須</span>
                <span class="register-form__label--required-text">複数選択可</span>
                <div class="register-form__input">
                    <input class="register-form__input--checkbox" type="checkbox" name="season" id="season" value="1" {{old('season')==1 ? 'checked' : '' }}>
                    <span class="register-form__input--season">春</span>
                    <input class="register-form__input--checkbox" type="checkbox" name="season" id="season" value="2" {{old('season')==2 ? 'checked' : '' }}>
                    <span class="register-form__input--season">夏</span>
                    <input class="register-form__input--checkbox" type="checkbox" name="season" id="season" value="3" {{old('season')==3 ? 'checked' : '' }}>
                    <span class="register-form__input--season">秋</span>
                    <input class="register-form__input--checkbox" type="checkbox" name="season" id="season" value="4" {{old('season')==4 ? 'checked' : '' }}>
                    <span class="register-form__input--season">冬</span>
                </div>
                <p class="register-form__error">
                    季節を選択してください
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="description">商品説明</label>
                <span class="register-form__label--required">必須</span>
                <div class="register-form__input">
                    <textarea class="register-form__input--textarea" name="description" id="description" value="{{ old('description') }}" placeholder="商品の説明を入力" cols="50" rows="10"></textarea>
                </div>
                <p class="register-form__error">
                    商品説明を入力してください
                </p>
                <p class="register-form__error">
                    120文字以内で入力してください
                </p>
            </div>
            <div class="register-form__button">
                <button class="register-form__button--back" type="button" onclick="location.href='/products'">戻る</button>
                <button class="register-form__button--register" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection