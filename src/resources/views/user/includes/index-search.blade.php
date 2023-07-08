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
