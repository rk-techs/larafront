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
                    <div class="row">
                        <div class="col">
                            <input type="text" class="input-field" placeholder="備考">
                        </div>
                    </div>
                </div>
                <div id="collapseSearchFooter" class="search-footer">
                    <div class="btn-group u-mr-3">
                        <button class="btn btn-search u-mr-3">検索開始</button>
                        <button class="btn btn-cancel">リセット</button>
                    </div>
                    <div class="search-info">検索結果 : XX 件</div>
                </div>
            </div>

            <div class="table-block scrollable-table">
                <table class="table">
                    <thead class="table-header">
                        <tr class="table-row">
                            <th class="th-cell">{{-- 操作 --}}</th>
                            <th class="th-cell">ID</th>
                            <th class="th-cell">名前</th>
                            <th class="th-cell">E-mail</th>
                            <th class="th-cell">携帯番号</th>
                            <th class="th-cell">入社日</th>
                            <th class="th-cell">備考</th>
                            <th class="th-cell">権限</th>
                            <th class="th-cell">created_at</th>
                            <th class="th-cell">updated_at</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach ($users as $user)
                        <tr class="table-row">
                            <td class="td-cell">
                                edit
                            </td>
                            <td class="td-cell u-max-w-80">
                                {{ $user->id }}
                            </td>
                            <td class="td-cell u-min-w-120">
                                {{ $user->name }}
                            </td>
                            <td class="td-cell">
                                {{ $user->email }}
                            </td>
                            <td class="td-cell u-min-w-160">
                                {{ $user->employee->mobile_number }}
                            </td>
                            <td class="td-cell u-min-w-120">
                                {{ $user->employee->join_date }}
                            </td>
                            <td class="td-cell ellipsis">
                                {{ $user->employee->remark }}
                            </td>
                            <td class="td-cell u-min-w-96">
                                {{ $user->permission->display_name }}
                            </td>
                            <td class="td-cell">
                                {{ $user->created_at }}
                            </td>
                            <td class="td-cell">
                                {{ $user->updated_at }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
