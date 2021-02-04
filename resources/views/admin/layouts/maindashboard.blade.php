@extends('admin.layouts.app')
@section('bodysection')

<body>
<a class="sr" href="#main">Skip to content</a>
<h1 class="sr">Overview</h1>
<div class="r-shell">
    <aside class="r-shell_aside r-zx-8" aria-labelledby="sidebarTitle"><div class="r-aside">
            <div class="r-aside_header r-edges@xl">
                <h2 class="sr" id="sidebarTitle">Main Navigation</h2>
                <div class="r-d-flex r-al-i-c r-edges--left"><a href="{{ url('/') }}" class="r-logo r-d-flex r-al-i-c"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="375pt" height="374.999991pt" viewBox="0 0 375 374.999991" version="1.2">
                            <defs>
                                <clipPath id="clip1">
                                    <path d="M 57.75 37.5 L 317.25 37.5 L 317.25 337.5 L 57.75 337.5 Z M 57.75 37.5 "/>
                                </clipPath>
                                <clipPath id="clip2">
                                    <path d="M 112.5 113 L 262.5 113 L 262.5 262 L 112.5 262 Z M 112.5 113 "/>
                                </clipPath>
                            </defs>
                            <g id="surface1">
                                <g clip-path="url(#clip1)" clip-rule="nonzero">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(32.159424%,8.239746%,30.589294%);fill-opacity:1;" d="M 296.976562 58.140625 L 296.976562 206.308594 C 297.054688 210.902344 296.136719 215.480469 294.285156 219.695312 C 268.402344 276.207031 202.785156 310.433594 189.417969 316.925781 C 176.046875 310.640625 107.800781 276.378906 80.875 219.695312 C 78.925781 215.386719 77.960938 210.695312 78.023438 205.960938 L 78.023438 58.140625 L 296.976562 58.140625 M 309.140625 37.867188 L 65.875 37.867188 C 61.394531 37.867188 57.75 41.507812 57.75 45.992188 L 57.75 205.960938 C 57.671875 213.707031 59.316406 221.355469 62.566406 228.390625 C 96.109375 299.027344 183.699219 336.597656 183.699219 336.597656 C 184.933594 336.980469 186.21875 337.183594 187.5 337.199219 L 191.554688 337.199219 C 192.804688 337.183594 194.058594 336.980469 195.246094 336.597656 C 195.246094 336.597656 280.296875 298.933594 312.71875 228.136719 C 315.777344 221.261719 317.328125 213.816406 317.25 206.308594 L 317.25 45.992188 C 317.25 41.507812 313.621094 37.867188 309.140625 37.867188 "/>
                                </g>
                                <g clip-path="url(#clip2)" clip-rule="nonzero">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(32.159424%,8.239746%,30.589294%);fill-opacity:1;" d="M 186.925781 113.074219 C 145.957031 113.074219 112.5 146.527344 112.5 187.5 C 112.5 228.472656 145.957031 261.925781 186.925781 261.925781 C 225.617188 261.925781 257.597656 232.136719 260.996094 194.253906 L 262.117188 181.773438 L 192.652344 181.773438 L 192.652344 204.675781 L 234.695312 204.675781 C 227.539062 224.535156 209.335938 239.027344 186.925781 239.027344 C 158.347656 239.027344 135.402344 216.082031 135.402344 187.5 C 135.402344 158.917969 158.347656 135.972656 186.925781 135.972656 C 200.570312 135.972656 212.871094 141.25 222.082031 149.839844 L 237.738281 133.109375 C 224.410156 120.675781 206.519531 113.074219 186.925781 113.074219 Z M 186.925781 113.074219 "/>
                                </g>
                            </g>
                        </svg>
        GTISMA Dashboard
    </span>
                    </a></div>
            </div>
            @include('admin.layouts.nav')
            <div class="r-aside_footer r-ml-1 r-border-top">
                <div class="r-gutter--top--as-edge r-tx-c">
                    <small class="r-opacity-09 r-fw-bold">&copy; Copyright {{date('Y')}} GTISMA.</small>
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
                        <div class="r-hidden-xl-up"><a href="/" class="r-logo r-d-flex r-al-i-c">
{{--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="375pt" height="374.999991pt" viewBox="0 0 375 374.999991" version="1.2">--}}
{{--                                    <defs>--}}
{{--                                        <clipPath id="clip1">--}}
{{--                                            <path d="M 57.75 37.5 L 317.25 37.5 L 317.25 337.5 L 57.75 337.5 Z M 57.75 37.5 "/>--}}
{{--                                        </clipPath>--}}
{{--                                        <clipPath id="clip2">--}}
{{--                                            <path d="M 112.5 113 L 262.5 113 L 262.5 262 L 112.5 262 Z M 112.5 113 "/>--}}
{{--                                        </clipPath>--}}
{{--                                    </defs>--}}
{{--                                    <g id="surface1">--}}
{{--                                        <g clip-path="url(#clip1)" clip-rule="nonzero">--}}
{{--                                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(32.159424%,8.239746%,30.589294%);fill-opacity:1;" d="M 296.976562 58.140625 L 296.976562 206.308594 C 297.054688 210.902344 296.136719 215.480469 294.285156 219.695312 C 268.402344 276.207031 202.785156 310.433594 189.417969 316.925781 C 176.046875 310.640625 107.800781 276.378906 80.875 219.695312 C 78.925781 215.386719 77.960938 210.695312 78.023438 205.960938 L 78.023438 58.140625 L 296.976562 58.140625 M 309.140625 37.867188 L 65.875 37.867188 C 61.394531 37.867188 57.75 41.507812 57.75 45.992188 L 57.75 205.960938 C 57.671875 213.707031 59.316406 221.355469 62.566406 228.390625 C 96.109375 299.027344 183.699219 336.597656 183.699219 336.597656 C 184.933594 336.980469 186.21875 337.183594 187.5 337.199219 L 191.554688 337.199219 C 192.804688 337.183594 194.058594 336.980469 195.246094 336.597656 C 195.246094 336.597656 280.296875 298.933594 312.71875 228.136719 C 315.777344 221.261719 317.328125 213.816406 317.25 206.308594 L 317.25 45.992188 C 317.25 41.507812 313.621094 37.867188 309.140625 37.867188 "/>--}}
{{--                                        </g>--}}
{{--                                        <g clip-path="url(#clip2)" clip-rule="nonzero">--}}
{{--                                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(32.159424%,8.239746%,30.589294%);fill-opacity:1;" d="M 186.925781 113.074219 C 145.957031 113.074219 112.5 146.527344 112.5 187.5 C 112.5 228.472656 145.957031 261.925781 186.925781 261.925781 C 225.617188 261.925781 257.597656 232.136719 260.996094 194.253906 L 262.117188 181.773438 L 192.652344 181.773438 L 192.652344 204.675781 L 234.695312 204.675781 C 227.539062 224.535156 209.335938 239.027344 186.925781 239.027344 C 158.347656 239.027344 135.402344 216.082031 135.402344 187.5 C 135.402344 158.917969 158.347656 135.972656 186.925781 135.972656 C 200.570312 135.972656 212.871094 141.25 222.082031 149.839844 L 237.738281 133.109375 C 224.410156 120.675781 206.519531 113.074219 186.925781 113.074219 Z M 186.925781 113.074219 "/>--}}
{{--                                        </g>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}


                                <span class="r-logo_text r-fw-medium r-suffix r-visible-sm-up">

         Admin Dashboard
    </span>
                            </a></div></div>
                </div><div class="r-gutter--height-adjust r-d-flex r-al-i-c">
                    <a href="{{url('/admin/report/add')}}" class="r-d-flex r-al-i-c r-btn r-btn--primary">
        <span class="r-prefix r-d-flex r-al-i-c r-co-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-plus">
        <line x1="12" y1="5" x2="12" y2="19" />
        <line x1="5" y1="12" x2="19" y2="12" />
    </svg></span>
                        <span class="r-fw-medium r-btn_icon-adjust">New Report</span>
                    </a>
                    <div class="r-dropdown r-suffix--wider">
                        <button role="list" class="r-d-flex r-al-i-c dropdown-trigger r-will-flip-icon" data-target="user_actions">
                            <img src="{{$user->picture_url ?? asset('assets/images/userprofile.png') }}" alt="User image" class="r-avatar r-avatar--border--white">
                        </button>
                        <ul id="user_actions" class="r-dropdown_list r-none r-list dropdown-content">
                            <li>
                                <a href="{{url('/admin/user/profile')}}" class="r-list-item r-co-brown"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sliders">
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

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('logout') }}" class="r-list-item r-co-brown"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                          ><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                            <polyline points="16 17 21 12 16 7" />
                                            <line x1="21" y1="12" x2="9" y2="12" />
                                        </svg><span class="r-suffix--wider r-list-item_text">{{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

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
