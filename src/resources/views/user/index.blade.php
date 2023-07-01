@extends('layouts.app')

@section('title')
    User | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <div class="content-top-bar">
                <div>
                    <div class="title title-h1">
                        User
                    </div>
                </div>
                <div>
                    <span>検索結果: XX件</span>
                </div>
                <div>
                    <div class="btn btn-create">Create</div>
                    <div class="btn btn-update">Update</div>
                </div>
            </div>

            <div class="search-block">
                @push('script')
                <script src="{{ asset('js/search.js') }}"></script>
                @endpush
                <header id="toggleSearchHeader" class="search-header">
                        <span>検索</span>
                        <span id="toggleExpandSymbol" class="material-symbols-outlined">expand_less</span>
                </header>
                <div id="collapseBody">
                    <div class="search-body">
                        <div class="search-col">
                            <div class="search-row">
                                {{-- <label for="inputFieldID">ID</label> --}}
                                <input id="inputFieldID" type="text" class="input-field" placeholder="ID">
                            </div>
                        </div>
                        <div class="search-col">
                            <div class="search-row">
                                {{-- <label for="inputFieldName">名前</label> --}}
                                <input id="inputFieldName" type="text" class="input-field" placeholder="名前">
                            </div>
                        </div>
                        <div class="search-col">
                            <div class="sarch-row">
                                <div class="search-row">
                                    {{-- <label for="inputFieldEmail">email</label> --}}
                                    <input id="inputFieldEmail" type="text" class="input-field" placeholder="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="search-footer">
                        <div class="btn btn-search">検索開始</div>
                        <div class="btn btn-cancel">リセット</div>
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
