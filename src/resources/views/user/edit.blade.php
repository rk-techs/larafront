@extends('layouts.app')

@section('title')
    社員 編集 | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            <div class="content-header-block">
                <div class="title title-h2">
                    社員 編集
                </div>
            </div>

            @include('user.includes.edit-input-form')

        </div>
    </main>

    <div class="layout-operation">
        <div class="operation-container">
            <button id="inputFormTrigger" class="btn btn-update u-mr-3">更新</button>
            <button class="btn btn-info">キャンセル</button>
        </div>
    </div>

    @push('script')
    <script src="{{ asset('js/input-form.js') }}"></script>
    @endpush

@endsection
