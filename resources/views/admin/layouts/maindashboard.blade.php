@extends('admin.layouts.app')
@section('bodysection')

<body>
<a class="sr" href="#main">Skip to content</a>
<h1 class="sr">Overview</h1>
<div class="r-shell">
    <aside class="r-shell_aside r-zx-8" aria-labelledby="sidebarTitle"><div class="r-aside">
            <div class="r-aside_header r-edges@xl">
                <h2 class="sr" id="sidebarTitle">Main Navigation</h2>
                <div class="r-d-flex r-al-i-c r-edges--left"><a href="{{ url('/') }}" class="r-logo r-d-flex r-al-i-c"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000">
                            <title>GTISMA Logo Icon (Full Brand Red Background)</title>
                            <rect fill="#ea4425" width="2000" height="2000" rx="1000" />
                            <polygon fill="#fff" points="556.34 1245.12 1013.01 280.07 1657.54 1627.43 995.66 653.14 556.34 1245.12" />
                            <polygon fill="#fff" points="342.46 1673.68 992.77 844.3 1178.66 1127.58 1018.79 1029.29 342.46 1673.68" />
                        </svg><span class="r-logo_text r-fw-medium r-suffix r-visible-sm-up">
        Admin Dashboard
    </span>
                    </a></div>
            </div>
            @include('admin.layouts.nav')
            <div class="r-aside_footer r-ml-1 r-border-top">
                <div class="r-gutter--top--as-edge r-tx-c">
                    <small class="r-opacity-09 r-fw-bold">&copy; Copyright 2020 GTISMA.</small>
                </div>
                <ul class="r-none r-d-flex r-al-i-c"><li class="r-d-flex r-al-i-c r-border-right--as-after">
                        <a href="/toc/" class="r-link--gray r-decoration-none r-fs-nano r-fw-medium r-edges--y r-edges--x">
                            Terms
                        </a>
                    </li><li class="r-d-flex r-al-i-c r-border-right--as-after">
                        <a href="/privacy/" class="r-link--gray r-decoration-none r-fs-nano r-fw-medium r-edges--y r-edges--x">
                            Privacy
                        </a>
                    </li><li class="r-d-flex r-al-i-c r-border-right--as-after">
                        <a href="/help/" class="r-link--gray r-decoration-none r-fs-nano r-fw-medium r-edges--y r-edges--x">
                            Help
                        </a>
                    </li></ul>
            </div>
        </div></aside>
    <main id="main" class="r-shell_main">
        <div class="r-main r-edges@xl"><div class="r-d-flex r-al-i-c r-j-c-sb r-edges--right">
                <div class="r-d-flex r-al-i-c">
                    <div class="r-hidden-xl-up">
                        <button class="r-menu-toggle r-d-flex r-al-i-c" aria-label="Toggle Navigation"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-menu">
                                <line x1="3" y1="12" x2="21" y2="12" />
                                <line x1="3" y1="6" x2="21" y2="6" />
                                <line x1="3" y1="18" x2="21" y2="18" />
                            </svg></button>
                    </div>
                    <div class="r-d-flex r-al-i-c r-edges*2@xl">
                        <div class="r-hidden-xl-up"><a href="/" class="r-logo r-d-flex r-al-i-c"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000">
                                    <title>ADX Credit Logo Icon (Full Brand Red Background)</title>
                                    <rect fill="#ea4425" width="2000" height="2000" rx="1000" />
                                    <polygon fill="#fff" points="556.34 1245.12 1013.01 280.07 1657.54 1627.43 995.66 653.14 556.34 1245.12" />
                                    <polygon fill="#fff" points="342.46 1673.68 992.77 844.3 1178.66 1127.58 1018.79 1029.29 342.46 1673.68" />
                                </svg><span class="r-logo_text r-fw-medium r-suffix r-visible-sm-up">
        Admin Dashboard
    </span>
                            </a></div></div>
                </div><div class="r-gutter--height-adjust r-d-flex r-al-i-c">
                    <a href="https://adx-usr.now.sh/new" class="r-d-flex r-al-i-c r-btn r-btn--primary">
        <span class="r-prefix r-d-flex r-al-i-c r-co-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-plus">
        <line x1="12" y1="5" x2="12" y2="19" />
        <line x1="5" y1="12" x2="19" y2="12" />
    </svg></span>
                        <span class="r-fw-medium r-btn_icon-adjust">New</span>
                    </a>
                    <div class="r-dropdown r-suffix--wider">
                        <button role="list" class="r-d-flex r-al-i-c dropdown-trigger r-will-flip-icon" data-target="user_actions">
                            <img src="https://adx-usr.now.sh/images/avatar.jpg" alt="User image" class="r-avatar r-avatar--border--white">
                        </button>
                        <ul id="user_actions" class="r-dropdown_list r-none r-list dropdown-content">
                            <li>
                                <a href="https://adx-usr.now.sh/settings" class="r-list-item r-co-brown"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sliders">
                                        <line x1="4" y1="21" x2="4" y2="14" />
                                        <line x1="4" y1="10" x2="4" y2="3" />
                                        <line x1="12" y1="21" x2="12" y2="12" />
                                        <line x1="12" y1="8" x2="12" y2="3" />
                                        <line x1="20" y1="21" x2="20" y2="16" />
                                        <line x1="20" y1="12" x2="20" y2="3" />
                                        <line x1="1" y1="14" x2="7" y2="14" />
                                        <line x1="9" y1="8" x2="15" y2="8" />
                                        <line x1="17" y1="16" x2="23" y2="16" />
                                    </svg><span class="r-suffix--wider r-list-item_text">Profile & Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="r-list-item r-co-brown"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        <polyline points="16 17 21 12 16 7" />
                                        <line x1="21" y1="12" x2="9" y2="12" />
                                    </svg><span class="r-suffix--wider r-list-item_text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div></div><div class="r-content"><div class="r-content_inner">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
