@extends('layouts.app')

@section('title')
    heading | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <h1 class="title title-h1">タイトル</h1>
            <p>本文</p>
            <h2 class="title title-h2">タイトル</h2>
            <p>本文</p>
            <p>本文</p>
            <h3 class="title title-h3">タイトル</h3>
            <p>本文</p>
            <p>本文</p>
            <h4 class="title title-h4">タイトル</h4>
            <h5 class="title title-h5">タイトル</h5>
            <h6 class="title title-h6">タイトル</h6>
        </div>
    </main>
@endsection
