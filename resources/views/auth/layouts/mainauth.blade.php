@extends('admin.layouts.app')
@section('bodysection')
    <body class="r-blank r-bg-white">
    <a class="sr" href="#main">Skip to content</a>
    <h1 class="sr">Please log in</h1>
    <main class="r-blank_main">
        <div class="r-split-twin">
            <section class="r-split-twin_figure">
                <h2 class="r-sr">Decorative Image Header</h2>
                <div class="r-hidden-lg-up r-gutter--edges-half r-pos-a r-top-0 r-left-0"><a href="/" class="r-logo r-d-flex r-al-i-c"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000">
                            <title>GTISMA Logo Icon (Red on White Background)</title>
                            <rect fill="#fff" width="2000" height="2000" rx="1000"/>
                            <g fill="#ea4425">
                                <polygon points="556.34 1245.12 1013.01 280.07 1657.54 1627.43 995.66 653.14 556.34 1245.12"/>
                                <polygon points="342.46 1673.68 992.77 844.3 1178.66 1127.58 1018.79 1029.29 342.46 1673.68"/>
                            </g>
                        </svg><span class="r-logo_text r-fw-medium r-suffix r-co-white">
         GTISMA
    </span>
                    </a></div>

                <img src="{{ asset('assets/images/woman-sitting-in-front-of-a-computer-while-talking-on-the-phone.jpg') }}" alt="Woman sitting in front of a computer while talking on the phone">
            </section>
           @yield('content')
        </div>
    </main>
@endsection
