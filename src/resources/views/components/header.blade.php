<header class="layout-header">
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
        <div class="icon-block">
            <a href="#" class="icon-link icon-inner">
                <div class="icon">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                </div>
                <div class="icon-label">
                    Ryosuke
                </div>
            </a>
        </div>
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
