<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('title')">
    <meta property="fb:page_id" content="257151282427891" />
    <meta name="og:type" content="{{og_type()}}">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:site_name" content="seedspace.shop">
    <meta name="og:image" content="@yield('fb_image')">
    <meta name="og:title" content="@yield('fb_title') - domain.com">
    <meta name="og:description" content="@yield('fb_description')">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('fb_title') - domain.com">
    <meta name="twitter:description" content="@yield('fb_description')" >
    <meta name="twitter:site" content="@domain.com">
    <meta name="twitter:image:src" content="@yield('fb_image')">
    <link rel="canonical" href="{{url()->full()}}">
    @include('layouts.css')
    @yield('css')
</head>
<body>
@if(request()->route()->getName() === 'register' || request()->route()->getName() === 'login'
|| request()->route()->getName() === 'activision_dialog' || request()->route()->getName() === "success.payment")

@else
    @include('layouts.header')
@endif

@yield('content')
@if(request()->route()->getName() === 'register' || request()->route()->getName() === 'login'
|| request()->route()->getName() === 'activision_dialog' || request()->route()->getName() === "success.payment")

@else
    @include('layouts.footer')
@endif
@include('layouts.js')
@yield('js')
@if (request()->route()->getName()==='home')
    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "WebSite",
      "name" : "Website Title",
      "alternateName" : "Website Alternate Title",
      "url" : "https://www.domain.com",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.domain.com/search?query={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
</script>
@endif
</body>
</html>
