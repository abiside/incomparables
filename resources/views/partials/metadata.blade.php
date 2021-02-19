<!--  Essential META Tags -->
<meta property="og:title" content="{{ $pageMeta->title }}">
<meta property="og:description" content="{{ $pageMeta->description }}">
<meta property="og:image" content="{{ $pageMeta->image }}">
<meta property="og:url" content="{{ $pageMeta->url }}">
<meta name="twitter:card" content="{{ $pageMeta->twitterImage }}">

<!--  Non-Essential, But Recommended -->
<meta property="og:site_name" content="{{ $pageMeta->title }}">
<meta name="twitter:image:alt" content="{{ $pageMeta->description }}">

<title>{{ $pageMeta->title }}</title>
