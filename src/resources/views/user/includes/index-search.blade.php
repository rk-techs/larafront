<div class="search-block">
<form method="GET" action="{{ route('user.index') }}">
    @push('script')
    <script src="{{ asset('js/search.js') }}"></script>
    @endpush
    <div class="search-header">
        <span>検索</span>
        <span id="toggleExpandSymbol" class="material-symbols-outlined">unfold_less</span>
    </div>
    <div id="collapseSearchBody" class="search-body">
        {{-- Validation feedback --}}
        @if ($errors->any())
        <div class="alert alert-error">
            検索できない値が含まれています。
        </div>
        @endif

        <div class="row">
            <div class="col-1">
                <input type="number" class="input-field" placeholder="ID" value="{{ request('id') }}" name="id">
            </div>
            <div class="col">
                <input type="text" class="input-field" placeholder="キーワード（名前 or E-mail）" value="{{ request('keyword') }}" name="keyword">
            </div>
        </div>
    </div>
    <div id="collapseSearchFooter" class="search-footer">
        <div class="btn-group u-mr-3">
            <button class="btn btn-primary u-mr-3">検索開始</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">リセット</a>
        </div>
        {{-- Search Result --}}
        @if (!empty(request()->query()))
        <div class="search-info">検索結果 : {{ $count }} 件</div>
        @endif
    </div>
</form>
</div>
