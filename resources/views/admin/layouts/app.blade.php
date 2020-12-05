<!doctype html><html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="is-home"><head>
    <title>{{ config('app.name', 'GTISMA') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}" >
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest"  href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon"  href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="canonical" href="https://geotiscm.org/">
    <link href="{{ asset('assets/css/datatable.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/datatable.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"><!-- Begin Jekyll SEO tag v2.6.1 -->
    <meta name="generator" content="Jekyll v4.0.0" />
    <meta property="og:title" content="GTISMA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <link rel="canonical" href="https://www.geotiscm.org/" />
    <meta property="og:url" content="https://www.geotiscm.org/" />
    <meta property="og:site_name" content="GTISMA" />
    <script type="application/ld+json">
{"url":"https://geotiscm.org/","name":"GTISMA ADMIN Interface","headline":"Overview","@type":"WebSite","@context":"https://schema.org"}</script>

</head>
@yield('bodysection')
@include('admin.layouts.footerscript')
</body>
</html>
