@extends('layouts.app')

@section('title')
    list | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <div class="title page-title">
                Menu
            </div>

            <ul class="list">
                <li class="list-item"><a href="#" class="b-link">リンク</a></li>
                <li class="list-item"><a href="#" class="b-link">リンク</a></li>
                <li class="list-item"><a href="#" class="b-link">リンク</a></li>
            </ul>

            <hr>

            <div class="list">
                <div class="list-item"><a href="#" class="b-link">リンク</a></div>
                <div class="list-item"><a href="#" class="b-link">リンク</a></div>
                <div class="list-item"><a href="#" class="b-link">リンク</a></div>
            </div>

        </div>
    </main>
@endsection
