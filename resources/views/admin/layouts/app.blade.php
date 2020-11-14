<!doctype html><html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="is-home"><head>
    <title>{{ config('app.name', 'GTISMA') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://adx-usr.now.sh/">
    <link href="{{ asset('assets/css/datatable.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/datatable.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"><!-- Begin Jekyll SEO tag v2.6.1 -->
    <meta name="generator" content="Jekyll v4.0.0" />
    <meta property="og:title" content="Overview" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <link rel="canonical" href="https://gtiscm.org/" />
    <meta property="og:url" content="https://gtiscm.org/" />
    <meta property="og:site_name" content="GTISMA" />
    <script type="application/ld+json">
{"url":"https://gtiscm.org/","name":"GTISMA ADMIN Interface","headline":"Overview","@type":"WebSite","@context":"https://schema.org"}</script>

</head>
@yield('bodysection')
@include('admin.layouts.footerscript')
</body>
</html>
