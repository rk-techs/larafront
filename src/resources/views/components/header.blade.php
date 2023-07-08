<header class="layout-header">
    <div class="header-container">
        <div class="header-title">
            <a href="/" class="title-link">larafront</a>
        </div>
        <div class="header-nav">
            <div class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">HOME</a>
            </div>
            <div class="nav-item"><a href="" class="nav-link">メニュー1</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー2</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー3</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー4</a></div>
        </div>
        <div id="profileButton" class="icon-block profile-block">
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
            <div id="profileModal" class="profile-modal">
                <div class="profile-modal-header">
                    <p>User Name</p>
                    <p><small>info@example.com</small></p>
                </div>
                <div class="profile-modal-body">
                    <div class="profile-menu">マイページ</div>
                    <div class="profile-menu">申請</div>
                </div>
                <div class="profile-modal-footer">
                    <div class="logout">
                        ログアウト
                    </div>
                </div>
            </div>
        </div>
        <div id="headerToggleButton" class="mobile-menu">
            <span id="headerToggleSymbol" class="material-symbols-outlined">menu</span>
        </div>
    </div>

</header>

{{-- Collapse Menu on Mobile --}}
<div class="layout-collapse-header">
    <div id="collapseNav" class="header-collapse-container">
        <div class="header-nav">
            <div class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">HOME</a>
            </div>
            <div class="nav-item"><a href="" class="nav-link">メニュー1</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー2</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー3</a></div>
            <div class="nav-item"><a href="" class="nav-link">メニュー4</a></div>
        </div>
    </div>
</div>

@push('script')
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/profile-modal.js') }}"></script>
@endpush
