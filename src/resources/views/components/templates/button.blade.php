@extends('layouts.app')

@section('title')
    button | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="container main-container">

            <div class="btn-group">
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
        </div>
    </main>
@endsection
