<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="keywords"
    content="hotel Białka Tatrzańska, noclegi w górach, spa w Tatrach, resort narciarski, wypoczynek w górach, basen w hotelu, rodzinny hotel, atrakcje dla dzieci, konferencje w górach, luksusowy hotel">


<meta name="author" content="marketingmix.pl">

@if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="">