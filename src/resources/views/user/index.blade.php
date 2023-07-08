@extends('layouts.app')

@section('title')
    社員一覧 | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            <div class="content-header-block">
                <div class="title title-h2">
                    社員一覧
                </div>
                <div>
                    <a href="{{ route('user.create') }}" class="btn btn-create">社員登録</a>
                </div>
            </div>

            @include('user.includes.index-search')

            @if (session('success'))
            <div class="alert alert-stored">
                {{ session('success') }}
            </div>
            @endif

            @include('user.includes.index-table')

        </div>
    </main>
@endsection
