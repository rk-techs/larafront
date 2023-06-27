<header class="page-header">
    <div class="header-container">
        <div class="header-title">
            <a href="/" class="title-link">larafront</a>
        </div>
        <div class="header-nav">
            <div class="nav-item"><a href="" class="nav-link">メニュー1</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー2</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー3</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー4</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー5</a></div>
        </div>
        <div class="header-btn btn btn-create">ログイン</div>
        <div id="headerToggleButton" class="mobile-menu">
            <span id="headerToggleSymbol" class="material-symbols-outlined">menu</span>
        </div>
    </div>

    {{-- Collapse Menu on Mobile --}}
    <div id="collapseNav" class="header-collapse-container">
        <div class="header-nav">
            <div class="nav-item"><a href="" class="nav-link">メニュー1</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー2</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー3</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー4</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー5</a></div>
        </div>
    </div>
</header>

@push('script')
    <script src="{{ asset('js/header.js') }}"></script>
@endpush
