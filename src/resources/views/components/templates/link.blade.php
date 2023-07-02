@extends('layouts.app')

@section('title')
    link | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <a href="#" class="link">リンク1</a>
            <a href="#" class="b-link">リンク2</a>
            <a href="#" class="link">リンク3</a>

            </div>

        </div>
    </main>
@endsection
