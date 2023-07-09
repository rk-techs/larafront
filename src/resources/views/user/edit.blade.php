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
            <div class="btn-group">
                <button id="inputFormTrigger" class="btn btn-update u-mr-3">更新</button>
                <button class="btn btn-info">キャンセル</button>
                <form action="{{ route('user.destroy', ['user' => $user]) }}" method="POST" class="u-ml-auto">
                    @csrf
                    @method('DELETE')
                    <button class="icon-block">
                        <span class="material-symbols-outlined">
                            delete
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    @push('script')
    <script src="{{ asset('js/input-form.js') }}"></script>
    @endpush

@endsection
