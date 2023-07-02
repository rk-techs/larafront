@extends('layouts.app')

@section('title')
    button | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            {{-- Button --}}
            <div class="btn-group mb-2">
                <button class="btn">ボタン</button>
                <button class="btn btn-create mr-2">登録</button>
                <button class="btn btn-store mr-2">保存</button>
                <button class="btn btn-edit mr-2">編集</button>
                <button class="btn btn-update mr-2">更新</button>
                <button class="btn btn-delete mr-2">削除</button>
                <button class="btn btn-search mr-2">検索</button>
                <button class="btn btn-submit mr-2">送信</button>
                <button class="btn btn-info mr-2">info</button>
                <button class="btn btn-index mr-2">index</button>
                <button class="btn btn-back mr-2">戻る</button>
                <button class="btn btn-cancel mr-2">キャンセル</button>
            </div>

            {{-- divタグ Botton --}}
            <div class="btn-group mb-2">
                <div class="btn">ボタン</div>
                <div class="btn btn-create mr-2">登録</div>
                <div class="btn btn-store mr-2">保存</div>
                <div class="btn btn-edit mr-2">編集</div>
                <div class="btn btn-update mr-2">更新</div>
                <div class="btn btn-delete mr-2">削除</div>
                <div class="btn btn-search mr-2">検索</div>
                <div class="btn btn-submit mr-2">送信</div>
                <div class="btn btn-info mr-2">info</div>
                <div class="btn btn-index mr-2">index</div>
                <div class="btn btn-back mr-2">戻る</div>
                <div class="btn btn-cancel mr-2">キャンセル</div>
            </div>

            {{-- aタグ Button --}}
            <div class="btn-group mb-2">
                <a href="" class="btn">ボタン</a>
                <a href="" class="btn btn-create mr-2">登録</a>
                <a href="" class="btn btn-store mr-2">保存</a>
                <a href="" class="btn btn-edit mr-2">編集</a>
                <a href="" class="btn btn-update mr-2">更新</a>
                <a href="" class="btn btn-delete mr-2">削除</a>
                <a href="" class="btn btn-search mr-2">検索</a>
                <a href="" class="btn btn-submit mr-2">送信</a>
                <a href="" class="btn btn-info mr-2">info</a>
                <a href="" class="btn btn-index mr-2">index</a>
                <a href="" class="btn btn-back mr-2">戻る</a>
                <a href="" class="btn btn-cancel mr-2">キャンセル</a>
            </div>

            {{-- 単体Button --}}
            <button class="btn">ボタン</button>
            <button class="btn btn-create mr-2">登録</button>
            <button class="btn btn-store mr-2">保存</button>
            <button class="btn btn-edit mr-2">編集</button>
            <button class="btn btn-update mr-2">更新</button>
            <button class="btn btn-delete mr-2">削除</button>
            <button class="btn btn-search mr-2">検索</button>
            <button class="btn btn-submit mr-2">送信</button>
            <button class="btn btn-info mr-2">info</button>
            <button class="btn btn-index mr-2">index</button>
            <button class="btn btn-back mr-2">戻る</button>
            <button class="btn btn-cancel mr-2">キャンセル</button>

        </div>
    </main>
@endsection
