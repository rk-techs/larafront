@extends('layouts.app')

@section('title')
HOME | {{ config('app.name') }}
@endsection

@section('content')
<main class="page-main">
    <div class="container main-container">

        <ul class="list">
            <li class="list-item"><a href="alert" class="b-link">alert</a></li>
            <li class="list-item"><a href="button" class="b-link">button</a></li>
            <li class="list-item"><a href="form" class="b-link">form</a></li>
            <li class="list-item"><a href="headding" class="b-link">headding</a></li>
            <li class="list-item"><a href="list" class="b-link">list</a></li>
            <li class="list-item"><a href="link" class="b-link">link</a></li>
            <li class="list-item"><a href="icon" class="b-link">icon</a></li>
            <li class="list-item"><a href="table" class="b-link">table</a></li>
        </ul>

    </div>
</main>
@endsection
