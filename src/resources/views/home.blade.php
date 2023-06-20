@extends('layouts.app')

@section('title')
HOME | {{ config('app.name') }}
@endsection

@section('content')
<main class="page-main">
    <div class="container main-container">

        <ul class="list">
            <li class="list-item"><a href="alert" class="link">alert</a></li>
            <li class="list-item"><a href="button" class="link">button</a></li>
            <li class="list-item"><a href="form" class="link">form</a></li>
            <li class="list-item"><a href="headding" class="link">headding</a></li>
            <li class="list-item"><a href="list" class="link">list</a></li>
            <li class="list-item"><a href="icon" class="link">icon</a></li>
            <li class="list-item"><a href="table" class="link">table</a></li>
        </ul>

    </div>
</main>
@endsection
