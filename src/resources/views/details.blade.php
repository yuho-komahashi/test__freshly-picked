@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/details.css') }}">
@endsection

@section('title','商品詳細')

@section('content')

<div class="contents">
    <div class="detail-contents__inner">
        <div class="breadcrumbs">
            <p>商品一覧 > {{ $product->name }} </p><!--パンくずリスト入る-->
        </div>
        
        <form class="detail-form" action="{{ url('/products/' . $product->id . '/update') }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="detail-form__group">
                <div class="detail-form__image">
                    <img class="detail__image" src="{{ asset('storage/img/'. $product->image) }}" alt="{{ $product->name }}">
                    <div class="detail-form__input">
                        <input class="detail-form__input--image" type="file" name="image" value="{{ old('image') }}">
                    </div>
                    <p class="detail-form__error">
                        @error('image')
                        {{$message}}
                        @enderror
                    </p>
                </div>
                <div class="detail-form__detail">
                    <div class="detail-form__detail--item">
                        <label class="detail-form__label" for="name">商品名</label>
                        <div class="detail-form__input">
                            <input class="detail-form__input--text" type="text" name="name" id="name" value="{{ old('name', $product->name) }}" placeholder="商品名を入力" >
                        </div>
                        <p class="detail-form__error">
                            @error('name')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="detail-form__detail--item">
                        <label class="detail-form__label" for="price">値段</label>
                        <div class="detail-form__input">
                            <input class="detail-form__input--text" type="price" name="price" id="price" value="{{ old('price', $product->price) }}" placeholder="値段を入力" >
                        </div>
                        <p class="detail-form__error">
                            @error('price')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="detail-form__detail--item">
                        <label class="detail-form__label" for="season">季節</label>
                        <div class="detail-form__input--group">
                            @php
                            $seasonIds = count(old('seasons', [])) > 0
                            ? old('seasons')
                            : ($product->seasons->pluck('id')->toArray() ?? []);
                            @endphp
                            
                            @foreach($seasons as $season)
                            <div class="detail-form__input">
                                <input class="detail-form__input--checkbox"
                                type="checkbox" 
                                name="seasons[]" 
                                id="season" 
                                value="{{ $season->id }}"  {{ in_array($season->id, $seasonIds) ? 'checked' : '' }}>
                                <span class="detail-form__input--season">{{ $season->name }}</span>
                            </div>
                            @endforeach
                        </div>
                        <p class="detail-form__error">
                            @error('seasons')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                </div>
            </div>
            <div class="detail-form__description">
                <label class="detail-form__label" for="description">商品説明</label>
                <div class="detail-form__input">
                    <textarea class="detail-form__input--textarea" name="description" id="description" placeholder="商品の説明を入力" cols="50" rows="10">{{ old('description', $product->description) }}</textarea>
                </div>
                <p class="detail-form__error">
                    @error('description')
                    {{$message}}
                    @enderror
                </p>
            </div>
            <div class="detail-form__button">
                <button class="detail-form__button--back" type="button" onclick="location.href='/products'">戻る</button>
                <button class="detail-form__button--update" type="submit">変更を保存</button>
                <button><!--削除ボタン入るゴミ箱アイコン--></button>
            </div>
        </form>
    </div>
</div>
@endsection