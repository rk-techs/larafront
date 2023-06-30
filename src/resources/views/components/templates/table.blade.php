@extends('layouts.app')

@section('title')
    Table | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <div class="content-top-bar">
                <div>
                    <div class="title title-h1">
                        Table
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

                        @for ($i=0; $i < 4; $i++)
                        <div class="search-col">
                            <div class="search-row">
                                <label for="inputField{{$i}}">Search Word</label>
                                <input id="inputField{{$i}}" type="text" class="input-field" placeholder="{{"{$i}"}}">
                            </div>
                            <div class="search-row">
                                <input type="text" class="input-field" placeholder="{{"{$i}"}}">
                            </div>
                            <div class="search-row">
                                <select name="" class="input-field">
                                    <option value="">select!</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <footer class="search-footer">
                        <div class="btn btn-search">検索開始</div>
                        <div class="btn btn-cancel">リセット</div>
                    </footer>
                </div>
            </div>

            <table class="table">
                <thead class="table-header">
                    <tr class="table-row">
                        @for ($j = 0; $j < 5; $j++)
                        <th class="th-cell">項目{{$j+1}}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody class="table-body">
                    @for ($i = 0; $i < 20; $i++)
                    <tr class="table-row">
                        @for ($j = 0; $j < 5; $j++)
                        <td class="td-cell">row:{{$i + 1}} - col:{{$j + 1}}</td>
                        @endfor
                    </tr>
                    @endfor
                </tbody>
            </table>

        </div>
    </main>
@endsection
