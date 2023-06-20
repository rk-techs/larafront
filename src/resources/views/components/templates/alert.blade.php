@extends('layouts.app')

@section('title')
    alert | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="container main-container">
            <div class="alert alert-stored">Stored!!</div>
            <div class="alert alert-updated">Updated!!</div>
            <div class="alert alert-deleted">Deleted!!</div>
            <div class="alert alert-error">Error occurred!!</div>
            <div class="alert alert-warning">Warning!!</div>
        </div>
    </main>
@endsection
