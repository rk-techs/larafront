@extends('layouts.app')

@section('title')
    HOME | {{ config('app.name') }}
@endsection

@section('content')
<main class="layout-home">
    <div class="home-container">

        <div class="content-header-block">
            <div class="title title-h1">
                Menu
            </div>
        </div>

        <div class="menu-list">
            <div class="menu-item">
                <a href="{{ route('user.index') }}" class="menu-link">ユーザー</a>
            </div>
            <div class="menu-item">
                <a href="alert" class="menu-link">Alert</a>
            </div>
            <div class="menu-item">
                <a href="button" class="menu-link">Button</a>
            </div>
            <div class="menu-item">
                <a href="form" class="menu-link">Form</a>
            </div>
            <div class="menu-item">
                <a href="heading" class="menu-link">Heading</a>
            </div>
            <div class="menu-item">
                <a href="icon" class="menu-link">Icon</a>
            </div>
            <div class="menu-item">
                <a href="list" class="menu-link">List</a>
            </div>
            <div class="menu-item">
                <a href="link" class="menu-link">Link</a>
            </div>
            <div class="menu-item">
                <a href="table" class="menu-link">Table</a>
            </div>
            <div class="menu-item">
                <a href="" class="menu-link">得意先</a>
            </div>
            <div class="menu-item">
                <a href="" class="menu-link">受注</a>
            </div>
            <div class="menu-item">
                <a href="" class="menu-link">在庫</a>
            </div>
        </div>

    </div>
</main>
@endsection
