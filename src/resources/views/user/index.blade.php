@extends('layouts.app')

@section('title')
    User | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <div class="content-header-block">
                <div class="title title-h1">
                    User
                </div>
                <div>
                    <a href="{{ route('user.create') }}" class="btn btn-create">新規登録</a>
                </div>
            </div>

            <div class="search-block">
                @push('script')
                <script src="{{ asset('js/search.js') }}"></script>
                @endpush
                <header id="toggleSearchHeader" class="search-header">
                        <span>検索</span>
                        <span id="toggleExpandSymbol" class="material-symbols-outlined">unfold_less</span>
                </header>
                <div id="collapseBody" class="search-body">
                    <div class="search-content">
                        <div class="search-col">
                            <div class="search-row">
                                <input id="inputFieldID" type="text" class="input-field" placeholder="ID">
                            </div>
                        </div>
                        <div class="search-col">
                            <div class="search-row">
                                <input id="inputFieldName" type="text" class="input-field" placeholder="名前">
                            </div>
                        </div>
                        <div class="search-col">
                            <div class="sarch-row">
                                <div class="search-row">
                                    <input id="inputFieldEmail" type="text" class="input-field" placeholder="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="search-footer">
                        <button class="btn btn-search">検索開始</button>
                        <button class="btn btn-cancel">リセット</button>
                    </footer>
                </div>
            </div>

            <div class="table-wrapper scrollable-table">
                <table class="table">
                    <thead class="table-header">
                        <tr class="table-row">
                            <th class="th-cell">edit</th>
                            <th class="th-cell">id</th>
                            <th class="th-cell">name</th>
                            <th class="th-cell">email</th>
                            <th class="th-cell">address</th>
                            <th class="th-cell">mobile_number</th>
                            <th class="th-cell">user_type</th>
                            <th class="th-cell">remarks</th>
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
                            <td class="td-cell">
                                {{ $user->id }}
                            </td>
                            <td class="td-cell">
                                {{ $user->name }}
                            </td>
                            <td class="td-cell">
                                {{ $user->email }}
                            </td>
                            <td class="td-cell ellipsis">
                                {{ $user->address }}
                            </td>
                            <td class="td-cell">
                                {{ $user->mobile_number }}
                            </td>
                            <td class="td-cell">
                                {{ $user->user_type }}
                            </td>
                            <td class="td-cell ellipsis">
                                {{ $user->remarks }}
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
