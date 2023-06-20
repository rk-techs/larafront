@extends('layouts.app')

@section('title')
    list | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="container main-container">

            <ul class="list">
                <li class="list-item"><a href="#" class="link">リンク</a></li>
                <li class="list-item"><a href="#" class="link">リンク</a></li>
                <li class="list-item"><a href="#" class="link">リンク</a></li>
            </ul>

            <hr>

            <div class="list">
                <div class="list-item"><a href="#" class="link">リンク</a></div>
                <div class="list-item"><a href="#" class="link">リンク</a></div>
                <div class="list-item"><a href="#" class="link">リンク</a></div>
            </div>

        </div>
    </main>
@endsection
