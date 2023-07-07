@extends('layouts.app')

@section('title')
    取引先 | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            <div class="content-header-block">
                <div class="title title-h1">
                    取引先
                </div>
                <div>
                    <a href="{{ route('customer.create') }}" class="btn btn-create">新規登録</a>
                </div>
            </div>

            <div class="search-block">
                @push('script')
                <script src="{{ asset('js/search.js') }}"></script>
                @endpush
                <div class="search-header">
                    <span>検索</span>
                    <span id="toggleExpandSymbol" class="material-symbols-outlined">unfold_less</span>
                </div>
                <div id="collapseSearchBody" class="search-body">
                    <div class="row">
                        <div class="col-1">
                            <input type="text" class="input-field" placeholder="ID">
                        </div>
                        <div class="col-3">
                            <input type="text" class="input-field" placeholder="名前">
                        </div>
                        <div class="col-4">
                            <input type="text" class="input-field" placeholder="E-mail">
                        </div>
                        <div class="col">
                            <input type="text" class="input-field" placeholder="Tel">
                        </div>
                    </div>
                </div>
                <div id="collapseSearchFooter" class="search-footer">
                    <div class="btn-group">
                        <button class="btn btn-cancel mr-3">リセット</button>
                        <button class="btn btn-search">検索開始</button>
                    </div>
                    <div class="search-info">検索結果 : XX 件</div>
                </div>
            </div>

            <div class="table-block scrollable-table">
                <table class="table">
                    <thead class="table-header">
                        <tr class="table-row">
                            <th class="th-cell">edit</th>
                            <th class="th-cell">name</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">

                        <tr class="table-row">
                            <td class="td-cell">
                                edit
                            </td>
                            <td class="td-cell">
                                名前
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
