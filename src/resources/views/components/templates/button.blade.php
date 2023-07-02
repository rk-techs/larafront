@extends('layouts.app')

@section('title')
    button | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            {{-- Button --}}
            <div class="btn-group">
                <button class="btn">ボタン</button>
                <button class="btn btn-create">登録</button>
                <button class="btn btn-store">保存</button>
                <button class="btn btn-edit">編集</button>
                <button class="btn btn-update">更新</button>
                <button class="btn btn-delete">削除</button>
                <button class="btn btn-search">検索</button>
                <button class="btn btn-submit">送信</button>
                <button class="btn btn-info">info</button>
                <button class="btn btn-index">index</button>
                <button class="btn btn-back">戻る</button>
                <button class="btn btn-cancel">キャンセル</button>
            </div>

            {{-- divタグ Botton --}}
            <div class="btn-group">
                <div class="btn">ボタン</div>
                <div class="btn btn-create">登録</div>
                <div class="btn btn-store">保存</div>
                <div class="btn btn-edit">編集</div>
                <div class="btn btn-update">更新</div>
                <div class="btn btn-delete">削除</div>
                <div class="btn btn-search">検索</div>
                <div class="btn btn-submit">送信</div>
                <div class="btn btn-info">info</div>
                <div class="btn btn-index">index</div>
                <div class="btn btn-back">戻る</div>
                <div class="btn btn-cancel">キャンセル</div>
            </div>

            {{-- aタグ Button --}}
            <div class="btn-group">
                <a href="" class="btn">ボタン</a>
                <a href="" class="btn btn-create">登録</a>
                <a href="" class="btn btn-store">保存</a>
                <a href="" class="btn btn-edit">編集</a>
                <a href="" class="btn btn-update">更新</a>
                <a href="" class="btn btn-delete">削除</a>
                <a href="" class="btn btn-search">検索</a>
                <a href="" class="btn btn-submit">送信</a>
                <a href="" class="btn btn-info">info</a>
                <a href="" class="btn btn-index">index</a>
                <a href="" class="btn btn-back">戻る</a>
                <a href="" class="btn btn-cancel">キャンセル</a>
            </div>

            {{-- 単体Button --}}
            <button class="btn">ボタン</button>
            <button class="btn btn-create">登録</button>
            <button class="btn btn-store">保存</button>
            <button class="btn btn-edit">編集</button>
            <button class="btn btn-update">更新</button>
            <button class="btn btn-delete">削除</button>
            <button class="btn btn-search">検索</button>
            <button class="btn btn-submit">送信</button>
            <button class="btn btn-info">info</button>
            <button class="btn btn-index">index</button>
            <button class="btn btn-back">戻る</button>
            <button class="btn btn-cancel">キャンセル</button>

        </div>
    </main>
@endsection
