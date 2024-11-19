<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/peskin.ico') }}" type="image/x-icon">

    @if (Route::currentRouteName() === 'articlebyTittle')
        <title>{{ $meta_title ?? 'PESkin Pro Indonesia Official' }}</title>
        <meta name="description" content="{{ $meta_description ?? 'Default description for PESkin Pro Indonesia.' }}">
        <meta name="keywords" content="{{ $meta_keywords ?? 'default, peskin, pro, indonesia' }}">
        <meta name="author" content="PESkin Pro Indonesia">

        <meta property="og:title" content="{{ $meta_title ?? 'PESkin Pro Indonesia Official' }}">
        <meta property="og:description" content="{{ $meta_description ?? 'Default description for PESkin Pro Indonesia.' }}">
        <meta property="og:image" content="{{ $articles->images ? asset('storage/' . $articles->images) : asset('frontend/assets/images/logo/peskin.png') }}">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:type" content="article">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $meta_title ?? 'PESkin Pro Indonesia Official' }}">
        <meta name="twitter:description" content="{{ $meta_description ?? 'Default description for PESkin Pro Indonesia.' }}">
        <meta name="twitter:image" content="{{ $articles->images ? asset('storage/' . $articles->images) : asset('frontend/assets/images/default-twitter-image.jpg') }}">
    @elseif (Route::currentRouteName() === 'shop.detail')
        <title>{{ $meta_title ?? 'PESkin Pro Indonesia Official' }}</title>
        <meta name="description" content="{{ $meta_description ?? 'Explore the best products on PESkin Pro Indonesia.' }}">
        <meta name="keywords" content="{{ $meta_keywords ?? 'default, peskin, products, shop, indonesia' }}">
        <meta name="author" content="PESkin Pro Indonesia">

        <meta property="og:title" content="{{ $meta_title }}">
        <meta property="og:description" content="{{ $meta_description }}">
        <meta property="og:image" content="{{ $products->front_image ? asset('storage/' . $products->front_image) : asset('frontend/assets/images/default-og-image.jpg') }}">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:type" content="product">

        @if ($meta_price)
            <meta property="product:price:amount" content="{{ $meta_price }}">
            <meta property="product:price:currency" content="IDR"> 
        @endif

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $meta_title }}">
        <meta name="twitter:description" content="{{ $meta_description }}">
        <meta name="twitter:image" content="{{ $products->front_image ? asset('storage/' . $products->front_image) : asset('frontend/assets/images/default-twitter-image.jpg') }}">

    @else
        <title>PESkin Pro Indonesia Official</title>
        <meta name="description" content="Welcome to PESkin Pro Indonesia Official website. Your source for high-quality PES skins and resources.">
        <meta name="keywords" content="PESkin, PES, Pro Evolution Soccer, skins, Indonesia">
        <meta name="author" content="PESkin Pro Indonesia">

        <meta property="og:title" content="PESkin Pro Indonesia Official">
        <meta property="og:description" content="Your source for high-quality PES skins and resources.">
        <meta property="og:image" content="{{ asset('frontend/assets/images/logo/peskin.png') }}">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:type" content="website">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="PESkin Pro Indonesia Official">
        <meta name="twitter:description" content="Your source for high-quality PES skins and resources.">
        <meta name="twitter:image" content="{{ asset('frontend/assets/images/logo/peskin.png') }}">
    @endif
</head>
