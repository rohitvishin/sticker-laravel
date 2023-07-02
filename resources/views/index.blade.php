<!DOCTYPE html>
<html lang="en" dir="ltr" data-scheme="light">

<!-- Mirrored from deothemes.com/envato/xhibiter/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2023 14:45:09 GMT -->

<head>
    <title>HOME | NFT Marketplace HTML Template</title>

    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />

    <!-- Css -->
    <link rel="stylesheet" href={{ asset('css/style.css') }} />

    <!-- Dark Mode JS -->
    <script src="{{ asset('js/darkMode.bundle.js') }}"></script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.html" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
</head>

<body class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900" itemscope
    itemtype="http://schema.org/WebPage">
    <!-- Header -->
    @include('include.header')

    <main>
        <!-- Hero -->
        <section class="relative pb-10 pt-20 md:pt-32 lg:h-[88vh]">
            <picture class="pointer-events-none absolute inset-x-0 top-0 -z-10 dark:hidden">
                <img src="{{ asset('img/gradient.jpg') }}" alt="gradient" class="w-full" />
            </picture>
            <picture class="pointer-events-none absolute inset-x-0 top-0 -z-10 hidden dark:block">
                <img src="{{ asset('img/gradient_dark.jpg') }}" alt="gradient dark" class="w-full" />
            </picture>

            <div class="container h-full">
                <div class="grid h-full items-center gap-4 md:grid-cols-12">
                    <div
                        class="col-span-6 flex h-full flex-col items-center justify-center py-10 md:items-start md:py-20 xl:col-span-4">
                        <h1
                            class="mb-6 text-center font-display text-5xl text-jacarta-700 dark:text-white md:text-left lg:text-6xl xl:text-7xl">
                            Buy, sell and collect NFTs.
                        </h1>
                        <p class="mb-8 text-center text-lg dark:text-jacarta-200 md:text-left">
                            The world's largest digital marketplace for crypto collectibles and non-fungible tokens
                        </p>
                        <div class="flex space-x-4">
                            <a href="create.html"
                                class="w-36 rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">
                                Upload
                            </a>
                            <a href="collections.html"
                                class="w-36 rounded-full bg-white py-3 px-8 text-center font-semibold text-accent shadow-white-volume transition-all hover:bg-accent-dark hover:text-white hover:shadow-accent-volume">
                                Explore
                            </a>
                        </div>
                    </div>

                    <!-- Hero image -->
                    <div class="col-span-6 xl:col-span-8">
                        <div class="relative text-center md:pl-8 md:text-right">
                            <svg viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                class="mt-8 inline-block w-72 rotate-[8deg] sm:w-full lg:w-[24rem] xl:w-[35rem]">
                                <defs>
                                    <clipPath id="clipping" clipPathUnits="userSpaceOnUse">
                                        <path
                                            d="
                    M 0, 100
                    C 0, 17.000000000000004 17.000000000000004, 0 100, 0
                    S 200, 17.000000000000004 200, 100
                        183, 200 100, 200
                        0, 183 0, 100
                "
                                            fill="#9446ED"></path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#clipping)">
                                    <!-- Bg image -->
                                    <image href="{{ asset('img/hero/hero.jpg') }}" width="200" height="200"
                                        clip-path="url(#clipping)" />
                                </g>
                            </svg>
                            <img src="{{ asset('img/hero/3D_elements.png') }}" alt=""
                                class="absolute top-0 animate-fly md:-right-[10%]" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero -->

        <!-- Hot Bids -->
        <section class="pt-10 pb-24">
            <div class="container">
                <h2 class="mb-8 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                    <span class="mr-1 inline-block h-6 w-6 bg-contain bg-center text-xl"
                        style="
                background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/1f525.png);
              "></span>
                    Hot Bids
                </h2>

                <div class="relative">
                    <!-- Slider -->
                    <div class="swiper card-slider-4-columns !py-5">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <article>
                                    <div
                                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <figure>
                                            <a href="item.html">
                                                <img src="{{ asset('img/products/item_1.jpg') }}" alt="item 1"
                                                    width="230" height="230" class="w-full rounded-[0.625rem]"
                                                    loading="lazy" />
                                            </a>
                                        </figure>
                                        <div class="mt-4 flex items-center justify-between">
                                            <a href="item.html">
                                                <span
                                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">ETH
                                                    Me Outside</span>
                                            </a>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                                <span data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight text-green">1.55
                                                    ETH</span>
                                            </span>
                                        </div>
                                        <div class="mt-2 text-sm">
                                            <span class="dark:text-jacarta-300">Current Bid</span>
                                            <span class="text-jacarta-700 dark:text-jacarta-100">1.3 ETH</span>
                                        </div>

                                        <div class="mt-8 flex items-center justify-between">
                                            <button type="button"
                                                class="font-display text-sm font-semibold text-accent"
                                                data-bs-toggle="modal" data-bs-target="#placeBidModal">
                                                Place bid
                                            </button>

                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                                    data-tippy-content="Favorite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24"
                                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                                        <path fill="none" d="M0 0H24V24H0z" />
                                                        <path
                                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm dark:text-jacarta-200">159</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <div
                                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <figure>
                                            <a href="item.html">
                                                <img src="img/products/item_2.jpg" alt="item 2" width="230"
                                                    height="230" class="w-full rounded-[0.625rem]"
                                                    loading="lazy" />
                                            </a>
                                        </figure>
                                        <div class="mt-4 flex items-center justify-between">
                                            <a href="item.html">
                                                <span
                                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Lazyone
                                                    Panda</span>
                                            </a>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                                <span data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight text-green">2
                                                    ETH</span>
                                            </span>
                                        </div>
                                        <div class="mt-2 text-sm">
                                            <span class="dark:text-jacarta-300">Current Bid</span>
                                            <span class="text-jacarta-700 dark:text-jacarta-100">0.001 ETH</span>
                                        </div>

                                        <div class="mt-8 flex items-center justify-between">
                                            <button type="button"
                                                class="font-display text-sm font-semibold text-accent"
                                                data-bs-toggle="modal" data-bs-target="#placeBidModal">
                                                Place bid
                                            </button>
                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                                    data-tippy-content="Favorite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24"
                                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                                        <path fill="none" d="M0 0H24V24H0z" />
                                                        <path
                                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm dark:text-jacarta-200">75</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <div
                                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <figure>
                                            <a href="item.html">
                                                <img src="img/products/item_6.jpg" alt="item 6" width="230"
                                                    height="230" class="w-full rounded-[0.625rem]"
                                                    loading="lazy" />
                                            </a>
                                        </figure>
                                        <div class="mt-4 flex items-center justify-between">
                                            <a href="item.html">
                                                <span
                                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Splendid
                                                    Girl</span>
                                            </a>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                                <span data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight text-green">5.1
                                                    ETH</span>
                                            </span>
                                        </div>
                                        <div class="mt-2 text-sm">
                                            <span class="dark:text-jacarta-300">Current Bid</span>
                                            <span class="text-jacarta-700 dark:text-jacarta-100">4.7 ETH</span>
                                        </div>

                                        <div class="mt-8 flex items-center justify-between">
                                            <button type="button"
                                                class="font-display text-sm font-semibold text-accent"
                                                data-bs-toggle="modal" data-bs-target="#placeBidModal">
                                                Place bid
                                            </button>
                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                                    data-tippy-content="Favorite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24"
                                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                                        <path fill="none" d="M0 0H24V24H0z" />
                                                        <path
                                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm dark:text-jacarta-200">253</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <div
                                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <figure>
                                            <a href="item.html">
                                                <img src="img/products/item_4.jpg" alt="item 4" width="230"
                                                    height="230" class="w-full rounded-[0.625rem]"
                                                    loading="lazy" />
                                            </a>
                                        </figure>
                                        <div class="mt-4 flex items-center justify-between">
                                            <a href="item.html">
                                                <span
                                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Amazing
                                                    NFT art</span>
                                            </a>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                                <span data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight text-green">7
                                                    ETH</span>
                                            </span>
                                        </div>
                                        <div class="mt-2 text-sm">
                                            <span class="dark:text-jacarta-300">Current Bid</span>
                                            <span class="text-jacarta-700 dark:text-jacarta-100">1.2 ETH</span>
                                        </div>

                                        <div class="mt-8 flex items-center justify-between">
                                            <button type="button"
                                                class="font-display text-sm font-semibold text-accent"
                                                data-bs-toggle="modal" data-bs-target="#placeBidModal">
                                                Place bid
                                            </button>
                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                                    data-tippy-content="Favorite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24"
                                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                                        <path fill="none" d="M0 0H24V24H0z" />
                                                        <path
                                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm dark:text-jacarta-200">324</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <div
                                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <figure class="relative">
                                            <a href="item.html">
                                                <img src="img/pixel.jpg" data-src="img/products/item_3.gif"
                                                    alt="item 3" width="230" height="230"
                                                    class="swiper-lazy w-full rounded-[0.625rem]" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </a>
                                        </figure>
                                        <div class="mt-4 flex items-center justify-between">
                                            <a href="item.html">
                                                <span
                                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Portrait
                                                    Gallery</span>
                                            </a>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                                <span data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight text-green">0.7
                                                    ETH</span>
                                            </span>
                                        </div>
                                        <div class="mt-2 text-sm">
                                            <span class="dark:text-jacarta-300">Current Bid</span>
                                            <span class="text-jacarta-700 dark:text-jacarta-100">0.05 ETH</span>
                                        </div>

                                        <div class="mt-8 flex items-center justify-between">
                                            <button type="button"
                                                class="font-display text-sm font-semibold text-accent"
                                                data-bs-toggle="modal" data-bs-target="#placeBidModal">
                                                Place bid
                                            </button>
                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                                    data-tippy-content="Favorite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24"
                                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                                        <path fill="none" d="M0 0H24V24H0z" />
                                                        <path
                                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm dark:text-jacarta-200">54</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article>
                                    <div
                                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <figure class="relative">
                                            <a href="item.html">
                                                <img src="img/pixel.jpg" data-src="img/products/item_5.jpg"
                                                    alt="item 5" width="230" height="230"
                                                    class="swiper-lazy w-full rounded-[0.625rem]" />
                                                <div class="swiper-lazy-preloader"></div>
                                            </a>
                                        </figure>
                                        <div class="mt-4 flex items-center justify-between">
                                            <a href="item.html">
                                                <span
                                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Flourishing
                                                    Cat #180</span>
                                            </a>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                                <span data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight text-green">3
                                                    ETH</span>
                                            </span>
                                        </div>
                                        <div class="mt-2 text-sm">
                                            <span class="dark:text-jacarta-300">Current Bid</span>
                                            <span class="text-jacarta-700 dark:text-jacarta-100">0.25 ETH</span>
                                        </div>

                                        <div class="mt-8 flex items-center justify-between">
                                            <button type="button"
                                                class="font-display text-sm font-semibold text-accent"
                                                data-bs-toggle="modal" data-bs-target="#placeBidModal">
                                                Place bid
                                            </button>
                                            <div class="flex items-center space-x-1">
                                                <span
                                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                                    data-tippy-content="Favorite">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24"
                                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                                        <path fill="none" d="M0 0H24V24H0z" />
                                                        <path
                                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm dark:text-jacarta-200">125</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Navigation -->
                    <div
                        class="swiper-button-prev swiper-button-prev-1 group absolute top-1/2 -left-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume sm:-left-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="fill-jacarta-700 group-hover:fill-accent">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
                        </svg>
                    </div>
                    <div
                        class="swiper-button-next swiper-button-next-1 group absolute top-1/2 -right-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume sm:-right-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="fill-jacarta-700 group-hover:fill-accent">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hot bids -->

        <!-- Top Collections -->
        <section class="relative py-24 dark:bg-jacarta-800">
            <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
            </picture>
            <div class="container">
                <div class="mb-12 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                    <h2 class="inline">Top collections over</h2>
                    <div class="dropdown inline cursor-pointer">
                        <button class="dropdown-toggle inline-flex items-center text-accent" type="button"
                            id="collectionSort" data-bs-toggle="dropdown" aria-expanded="false">
                            last 7 days
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24" class="h-8 w-8 fill-accent">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                            aria-labelledby="collectionSort">
                            <a class="dropdown-item block rounded-xl px-5 py-2 text-sm transition-colors hover:bg-jacarta-50 dark:hover:bg-jacarta-600"
                                href="#">Last 24 Hours</a>
                            <a class="dropdown-item block rounded-xl px-5 py-2 text-sm transition-colors hover:bg-jacarta-50 dark:hover:bg-jacarta-600"
                                href="#">Last 7 Days</a>
                            <a class="dropdown-item block rounded-xl px-5 py-2 text-sm transition-colors hover:bg-jacarta-50 dark:hover:bg-jacarta-600"
                                href="#">Last 30 Days</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-3 md:grid-cols-2 md:gap-[1.875rem] lg:grid-cols-4">
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_1.jpg" alt="avatar 1" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    1
                                </div>
                                <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                    data-tippy-content="Verified Collection">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">NFT
                                    Funny Cat</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">7,080.95 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_2.jpg" alt="avatar 2" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-sm text-white dark:border-jacarta-600">
                                    2
                                </div>
                                <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                    data-tippy-content="Verified Collection">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Cryptopank</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">6,548,133 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_3.jpg" alt="avatar 3" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    3
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Prince
                                    Ape Planet</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">4,823,927 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_4.jpg" alt="avatar 4" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    4
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Hey
                                    Mrsmeseks</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">3,186 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_5.jpg" alt="avatar 5" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    5
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Bored
                                    Bunny</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">3,027 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_6.gif" alt="avatar 6" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    6
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Wow
                                    Frens</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">2,586 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_7.jpg" alt="avatar 7" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    7
                                </div>
                                <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                    data-tippy-content="Verified Collection">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Origin
                                    Morish</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">2,347.85 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_8.jpg" alt="avatar 8" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    8
                                </div>
                                <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                    data-tippy-content="Verified Collection">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Superdo</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">2,115.71 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_9.jpg" alt="avatar 9" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    9
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">NFT
                                    stars</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">2,027 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_10.jpg" alt="avatar 10" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    10
                                </div>
                                <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                    data-tippy-content="Verified Collection">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Asumitsu</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">1,989.70 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_11.jpg" alt="avatar 11" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    11
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Pank
                                    Skull</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">1,726.70 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_12.jpg" alt="avatar 12" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    12
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Lazy
                                    Panda</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">1,589.03 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_13.jpg" alt="avatar 13" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    13
                                </div>
                                <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                    data-tippy-content="Verified Collection">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Arcahorizons</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">1,157 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_14.jpg" alt="avatar 14" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    14
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Sussygirl</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">1,030 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_15.jpg" alt="avatar 15" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    15
                                </div>
                                <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                    data-tippy-content="Verified Collection">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                    </svg>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Smilebin</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">999.51 ETH</span>
                        </div>
                    </div>
                    <div
                        class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                        <figure class="mr-4 shrink-0">
                            <a href="collection.html" class="relative block">
                                <img src="img/avatars/avatar_16.jpg" alt="avatar 16" class="rounded-2lg"
                                    loading="lazy" />
                                <div
                                    class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                    16
                                </div>
                            </a>
                        </figure>
                        <div>
                            <a href="collection.html" class="block">
                                <span
                                    class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Pankysmoke</span>
                            </a>
                            <span class="text-sm dark:text-jacarta-300">875.65 ETH</span>
                        </div>
                    </div>
                </div>
                <div class="mt-10 text-center">
                    <a href="rankings.html"
                        class="inline-block rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">Go
                        to Rankings</a>
                </div>
            </div>
        </section>
        <!-- end top collections -->

        <!-- Trending Categories -->
        <section class="py-24">
            <div class="container">
                <h2 class="mb-8 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                    <span class="mr-1 inline-block h-6 w-6 bg-contain bg-center text-xl"
                        style="
                background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/26a1.png);
              "></span>
                    Trending categories
                </h2>

                <!-- Filter -->
                <div class="mb-8 flex flex-wrap items-center justify-between">
                    <ul class="flex flex-wrap items-center">
                        <li class="my-1 mr-2.5">
                            <a href="#"
                                class="group flex h-9 items-center justify-center rounded-lg bg-jacarta-100 px-4 font-display text-sm font-semibold text-jacarta-700 transition-colors hover:border-transparent hover:bg-accent hover:text-white dark:bg-jacarta-700 dark:text-white dark:hover:bg-accent">All</a>
                        </li>
                        <li class="my-1 mr-2.5">
                            <a href="#"
                                class="group flex h-9 items-center rounded-lg border border-jacarta-100 bg-white px-4 font-display text-sm font-semibold text-jacarta-500 transition-colors hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-900 dark:text-white dark:hover:border-transparent dark:hover:bg-accent dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24"
                                    class="mr-1 h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white dark:fill-jacarta-100">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M12 2c5.522 0 10 3.978 10 8.889a5.558 5.558 0 0 1-5.556 5.555h-1.966c-.922 0-1.667.745-1.667 1.667 0 .422.167.811.422 1.1.267.3.434.689.434 1.122C13.667 21.256 12.9 22 12 22 6.478 22 2 17.522 2 12S6.478 2 12 2zm-1.189 16.111a3.664 3.664 0 0 1 3.667-3.667h1.966A3.558 3.558 0 0 0 20 10.89C20 7.139 16.468 4 12 4a8 8 0 0 0-.676 15.972 3.648 3.648 0 0 1-.513-1.86zM7.5 12a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm9 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM12 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <span>Art</span>
                            </a>
                        </li>
                        <li class="my-1 mr-2.5">
                            <a href="#"
                                class="group flex h-9 items-center rounded-lg border border-jacarta-100 bg-white px-4 font-display text-sm font-semibold text-jacarta-500 transition-colors hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-900 dark:text-white dark:hover:border-transparent dark:hover:bg-accent dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24"
                                    class="mr-1 h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white dark:fill-jacarta-100">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M2 4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v5.5a2.5 2.5 0 1 0 0 5V20a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4zm6.085 15a1.5 1.5 0 0 1 2.83 0H20v-2.968a4.5 4.5 0 0 1 0-8.064V5h-9.085a1.5 1.5 0 0 1-2.83 0H4v14h4.085zM9.5 11a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                                <span>Collectibles</span>
                            </a>
                        </li>
                        <li class="my-1 mr-2.5">
                            <a href="#"
                                class="group flex h-9 items-center rounded-lg border border-jacarta-100 bg-white px-4 font-display text-sm font-semibold text-jacarta-500 transition-colors hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-900 dark:text-white dark:hover:border-transparent dark:hover:bg-accent dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24"
                                    class="mr-1 h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white dark:fill-jacarta-100">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M5 15v4h4v2H3v-6h2zm16 0v6h-6v-2h4v-4h2zm-8.001-9l4.4 11h-2.155l-1.201-3h-4.09l-1.199 3H6.6l4.399-11h2zm-1 2.885L10.752 12h2.492l-1.245-3.115zM9 3v2H5v4H3V3h6zm12 0v6h-2V5h-4V3h6z" />
                                </svg>
                                <span>Domain</span>
                            </a>
                        </li>
                        <li class="my-1 mr-2.5">
                            <a href="#"
                                class="group flex h-9 items-center rounded-lg border border-jacarta-100 bg-white px-4 font-display text-sm font-semibold text-jacarta-500 transition-colors hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-900 dark:text-white dark:hover:border-transparent dark:hover:bg-accent dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24"
                                    class="mr-1 h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white dark:fill-jacarta-100">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M12 13.535V3h8v3h-6v11a4 4 0 1 1-2-3.465z" />
                                </svg>
                                <span>Music</span>
                            </a>
                        </li>
                        <li class="my-1 mr-2.5">
                            <a href="#"
                                class="group flex h-9 items-center rounded-lg border border-jacarta-100 bg-white px-4 font-display text-sm font-semibold text-jacarta-500 transition-colors hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-900 dark:text-white dark:hover:border-transparent dark:hover:bg-accent dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24"
                                    class="mr-1 h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white dark:fill-jacarta-100">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M2 6c0-.552.455-1 .992-1h18.016c.548 0 .992.445.992 1v14c0 .552-.455 1-.992 1H2.992A.994.994 0 0 1 2 20V6zm2 1v12h16V7H4zm10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2a5 5 0 1 1 0-10 5 5 0 0 1 0 10zM4 2h6v2H4V2z" />
                                </svg>
                                <span>Photography</span>
                            </a>
                        </li>
                        <li class="my-1 mr-2.5">
                            <a href="#"
                                class="group flex h-9 items-center rounded-lg border border-jacarta-100 bg-white px-4 font-display text-sm font-semibold text-jacarta-500 transition-colors hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-900 dark:text-white dark:hover:border-transparent dark:hover:bg-accent dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24"
                                    class="mr-1 h-4 w-4 fill-jacarta-700 transition-colors group-hover:fill-white dark:fill-jacarta-100">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-2.29-2.333A17.9 17.9 0 0 1 8.027 13H4.062a8.008 8.008 0 0 0 5.648 6.667zM10.03 13c.151 2.439.848 4.73 1.97 6.752A15.905 15.905 0 0 0 13.97 13h-3.94zm9.908 0h-3.965a17.9 17.9 0 0 1-1.683 6.667A8.008 8.008 0 0 0 19.938 13zM4.062 11h3.965A17.9 17.9 0 0 1 9.71 4.333 8.008 8.008 0 0 0 4.062 11zm5.969 0h3.938A15.905 15.905 0 0 0 12 4.248 15.905 15.905 0 0 0 10.03 11zm4.259-6.667A17.9 17.9 0 0 1 15.973 11h3.965a8.008 8.008 0 0 0-5.648-6.667z" />
                                </svg>
                                <span>Virtual World</span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown my-1 cursor-pointer">
                        <div class="dropdown-toggle inline-flex w-48 items-center justify-between rounded-lg border border-jacarta-100 bg-white py-2 px-3 text-sm dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white"
                            role="button" id="categoriesSort" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="font-display">Recently Added</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24" class="h-4 w-4 fill-jacarta-500 dark:fill-white">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                            </svg>
                        </div>

                        <div class="dropdown-menu z-10 hidden min-w-[220px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                            aria-labelledby="categoriesSort">
                            <span class="block px-5 py-2 font-display text-sm font-semibold text-jacarta-300">Sort
                                By</span>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm text-jacarta-700 transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Recently Added
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="mb-[3px] h-4 w-4 fill-accent">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                </svg>
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Price: Low to High
                            </button>

                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Price: High to Low
                            </button>

                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Auction ending soon
                            </button>
                            <span
                                class="block px-5 py-2 font-display text-sm font-semibold text-jacarta-300">Options</span>
                            <div
                                class="dropdown-item block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <span class="flex items-center justify-between">
                                    <span>Verified Only</span>
                                    <input type="checkbox" value="checkbox" name="check" checked
                                        class="relative h-4 w-7 cursor-pointer appearance-none rounded-lg border-none bg-jacarta-100 shadow-none after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-jacarta-400 after:transition-all checked:bg-accent checked:bg-none checked:after:left-3.5 checked:after:bg-white checked:hover:bg-accent focus:ring-transparent focus:ring-offset-0 checked:focus:bg-accent" />
                                </span>
                            </div>
                            <div
                                class="dropdown-item block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <span class="flex items-center justify-between">
                                    <span>NFSW Only</span>
                                    <input type="checkbox" value="checkbox" name="check"
                                        class="relative h-4 w-7 cursor-pointer appearance-none rounded-lg border-none bg-jacarta-100 shadow-none after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-jacarta-400 after:transition-all checked:bg-accent checked:bg-none checked:after:left-3.5 checked:after:bg-white checked:hover:bg-accent focus:ring-transparent focus:ring-offset-0 checked:focus:bg-accent" />
                                </span>
                            </div>
                            <div
                                class="dropdown-item block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <span class="flex items-center justify-between">
                                    <span>Show Lazy Minted</span>
                                    <input type="checkbox" value="checkbox" name="check"
                                        class="relative h-4 w-7 cursor-pointer appearance-none rounded-lg border-none bg-jacarta-100 shadow-none after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-jacarta-400 after:transition-all checked:bg-accent checked:bg-none checked:after:left-3.5 checked:after:bg-white checked:hover:bg-accent focus:ring-transparent focus:ring-offset-0 checked:focus:bg-accent" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 gap-[1.875rem] md:grid-cols-2 lg:grid-cols-4">
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_5.jpg" alt="item 5"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">15</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_1.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_1.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Flourishing
                                        Cat #180</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">From 8.49 ETH</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">2/8</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                    data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_4.jpg" alt="item 4"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">188</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_2.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_2.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Amazing
                                        NFT art</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions2" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions2">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">From 5.9 ETH</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">1/7</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                    data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_7.jpg" alt="item 7"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">160</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_3.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_3.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">SwagFox#133</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions3" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions3">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">0.078 ETH</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">1/3</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent"
                                    data-bs-toggle="modal" data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_6.jpg" alt="item 6"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">159</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_4.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_4.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Splendid
                                        Girl</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions4" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions4">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">10 ETH</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">2/3</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent"
                                    data-bs-toggle="modal" data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_8.jpg" alt="item 8"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">32</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_3.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_5.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Monkeyme#155</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions5" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions5">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">From 5 FLOW</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">1/1</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent"
                                    data-bs-toggle="modal" data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_9.jpg" alt="item 9"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">25</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_6.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_4.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Jedidia#149</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions6" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions6">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">0.16 ETH</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">1/1</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent"
                                    data-bs-toggle="modal" data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_10.jpg" alt="item 10"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">55</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_2.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_7.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Artof
                                        Eve</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions7" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions7">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">0.13 FLOW</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">1/1</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent"
                                    data-bs-toggle="modal" data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div
                            class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="img/products/item_11.gif" alt="item 11"
                                        class="w-full rounded-[0.625rem]" loading="lazy" />
                                </a>
                                <div
                                    class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z" />
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">70</span>
                                </div>
                                <div class="absolute left-3 -bottom-3">
                                    <div class="flex -space-x-2">
                                        <a href="#">
                                            <img src="img/avatars/creator_8.png" alt="creator"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Creator: Sussygirl" />
                                        </a>
                                        <a href="#">
                                            <img src="img/avatars/owner_5.png" alt="owner"
                                                class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-600 dark:hover:border-accent"
                                                data-tippy-content="Owner: Sussygirl" />
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="mt-7 flex items-center justify-between">
                                <a href="item.html">
                                    <span
                                        class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Asuna
                                        #1649</span>
                                </a>
                                <div class="dropup rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                    <a href="#"
                                        class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                        role="button" id="itemActions8" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="fill-jacarta-500 dark:fill-jacarta-200">
                                            <circle cx="2" cy="2" r="2" />
                                            <circle cx="8" cy="2" r="2" />
                                            <circle cx="14" cy="2" r="2" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                        aria-labelledby="itemActions8">
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            New bid
                                        </button>
                                        <hr class="my-2 mx-4 h-px border-0 bg-jacarta-100 dark:bg-jacarta-600" />
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Refresh Metadata
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Share
                                        </button>
                                        <button
                                            class="block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                            Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-sm">
                                <span class="mr-1 text-jacarta-700 dark:text-jacarta-200">0.8 ETH</span>
                                <span class="text-jacarta-500 dark:text-jacarta-300">1/1</span>
                            </div>

                            <div class="mt-8 flex items-center justify-between">
                                <button class="font-display text-sm font-semibold text-accent"
                                    data-bs-toggle="modal" data-bs-target="#buyNowModal">
                                    Buy now
                                </button>
                                <a href="item.html" class="group flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="mr-1 mb-[3px] h-4 w-4 fill-jacarta-500 group-hover:fill-accent dark:fill-jacarta-200">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12h2c0 4.418 3.582 8 8 8s8-3.582 8-8-3.582-8-8-8C9.25 4 6.824 5.387 5.385 7.5H8v2H2v-6h2V6c1.824-2.43 4.729-4 8-4zm1 5v4.585l3.243 3.243-1.415 1.415L11 12.413V7h2z" />
                                    </svg>
                                    <span
                                        class="font-display text-sm font-semibold group-hover:text-accent dark:text-jacarta-200">View
                                        History</span>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end trending categories -->

        <!-- Process / Newsletter -->
        <section class="relative py-24 dark:bg-jacarta-800">
            <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
            </picture>
            <div class="container">
                <h2 class="mb-16 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                    Create and sell your NFTs
                </h2>
                <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <div class="mb-6 inline-flex rounded-full bg-[#CDBCFF] p-3">
                            <div class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="h-5 w-5 fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M22 6h-7a6 6 0 1 0 0 12h7v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2zm-7 2h8v8h-8a4 4 0 1 1 0-8zm0 3v2h3v-2h-3z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-4 font-display text-lg text-jacarta-700 dark:text-white">1. Set up your wallet
                        </h3>
                        <p class="dark:text-jacarta-300">
                            Once you've set up your wallet of choice, connect it to OpenSeaby clicking the NFT
                            Marketplacein the top
                            right corner.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="mb-6 inline-flex rounded-full bg-[#C4F2E3] p-3">
                            <div class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-green">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="h-5 w-5 fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-4 font-display text-lg text-jacarta-700 dark:text-white">2. Create Your
                            Collection</h3>
                        <p class="dark:text-jacarta-300">
                            Click Create and set up your collection. Add social links, a description, profile & banner
                            images, and
                            set a secondary sales fee.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="mb-6 inline-flex rounded-full bg-[#CDDFFB] p-3">
                            <div class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="h-5 w-5 fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M17.409 19c-.776-2.399-2.277-3.885-4.266-5.602A10.954 10.954 0 0 1 20 11V3h1.008c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3H6V1h2v4H4v7c5.22 0 9.662 2.462 11.313 7h2.096zM18 1v4h-8V3h6V1h2zm-1.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-4 font-display text-lg text-jacarta-700 dark:text-white">3. Add Your NFTs</h3>
                        <p class="dark:text-jacarta-300">
                            Upload your work (image, video, audio, or 3D art), add a title and description, and
                            customize your NFTs
                            with properties, stats.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="mb-6 inline-flex rounded-full bg-[#FFD0D0] p-3">
                            <div class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-red">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="h-5 w-5 fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm2.828 8.486a2 2 0 1 0 2.828-2.829 2 2 0 0 0-2.828 2.829z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-4 font-display text-lg text-jacarta-700 dark:text-white">4. List Them For Sale
                        </h3>
                        <p class="dark:text-jacarta-300">
                            Choose between auctions, fixed-price listings, and declining-price listings. You choose how
                            you want to
                            sell your NFTs!
                        </p>
                    </div>
                </div>

                <p class="mx-auto mt-20 max-w-2xl text-center text-lg text-jacarta-700 dark:text-white">
                    Join our mailing list to stay in the loop with our newest feature releases, NFT drops, and tips and
                    tricks
                    for navigating Xhibiter
                </p>

                <div class="mx-auto mt-7 max-w-md text-center">
                    <form class="relative">
                        <input type="email" placeholder="Email address"
                            class="w-full rounded-full border border-jacarta-100 py-3 px-4 focus:ring-accent dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder-white" />
                        <button
                            class="absolute top-2 right-2 rounded-full bg-accent px-6 py-2 font-display text-sm text-white hover:bg-accent-dark">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end process / newsletter -->
    </main>

    <!-- Wallet Modal -->
    <div class="modal fade" id="walletModal" tabindex="-1" aria-labelledby="walletModalLabel"
        aria-hidden="true">
        <div class="modal-dialog max-w-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="walletModalLabel">Connect your wallet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" class="h-6 w-6 fill-jacarta-700 dark:fill-white">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button>
                </div>

                <!-- Body -->
                <div class="modal-body p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                        viewBox="0 0 318.6 318.6" xml:space="preserve" class="mb-4 inline-block h-8 w-8">
                        <style>
                            .st1,
                            .st6 {
                                fill: #e4761b;
                                stroke: #e4761b;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                            }

                            .st6 {
                                fill: #f6851b;
                                stroke: #f6851b;
                            }
                        </style>
                        <path fill="#e2761b" stroke="#e2761b" stroke-linecap="round" stroke-linejoin="round"
                            d="M274.1 35.5l-99.5 73.9L193 65.8z" />
                        <path class="st1"
                            d="M44.4 35.5l98.7 74.6-17.5-44.3zm193.9 171.3l-26.5 40.6 56.7 15.6 16.3-55.3zm-204.4.9L50.1 263l56.7-15.6-26.5-40.6z" />
                        <path class="st1"
                            d="M103.6 138.2l-15.8 23.9 56.3 2.5-2-60.5zm111.3 0l-39-34.8-1.3 61.2 56.2-2.5zM106.8 247.4l33.8-16.5-29.2-22.8zm71.1-16.5l33.9 16.5-4.7-39.3z" />
                        <path d="M211.8 247.4l-33.9-16.5 2.7 22.1-.3 9.3zm-105 0l31.5 14.9-.2-9.3 2.5-22.1z"
                            fill="#d7c1b3" stroke="#d7c1b3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M138.8 193.5l-28.2-8.3 19.9-9.1zm40.9 0l8.3-17.4 20 9.1z" fill="#233447"
                            stroke="#233447" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M106.8 247.4l4.8-40.6-31.3.9zM207 206.8l4.8 40.6 26.5-39.7zm23.8-44.7l-56.2 2.5 5.2 28.9 8.3-17.4 20 9.1zm-120.2 23.1l20-9.1 8.2 17.4 5.3-28.9-56.3-2.5z"
                            fill="#cd6116" stroke="#cd6116" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M87.8 162.1l23.6 46-.8-22.9zm120.3 23.1l-1 22.9 23.7-46zm-64-20.6l-5.3 28.9 6.6 34.1 1.5-44.9zm30.5 0l-2.7 18 1.2 45 6.7-34.1z"
                            fill="#e4751f" stroke="#e4751f" stroke-linecap="round" stroke-linejoin="round" />
                        <path class="st6"
                            d="M179.8 193.5l-6.7 34.1 4.8 3.3 29.2-22.8 1-22.9zm-69.2-8.3l.8 22.9 29.2 22.8 4.8-3.3-6.6-34.1z" />
                        <path fill="#c0ad9e" stroke="#c0ad9e" stroke-linecap="round" stroke-linejoin="round"
                            d="M180.3 262.3l.3-9.3-2.5-2.2h-37.7l-2.3 2.2.2 9.3-31.5-14.9 11 9 22.3 15.5h38.3l22.4-15.5 11-9z" />
                        <path fill="#161616" stroke="#161616" stroke-linecap="round" stroke-linejoin="round"
                            d="M177.9 230.9l-4.8-3.3h-27.7l-4.8 3.3-2.5 22.1 2.3-2.2h37.7l2.5 2.2z" />
                        <path
                            d="M278.3 114.2l8.5-40.8-12.7-37.9-96.2 71.4 37 31.3 52.3 15.3 11.6-13.5-5-3.6 8-7.3-6.2-4.8 8-6.1zM31.8 73.4l8.5 40.8-5.4 4 8 6.1-6.1 4.8 8 7.3-5 3.6 11.5 13.5 52.3-15.3 37-31.3-96.2-71.4z"
                            fill="#763d16" stroke="#763d16" stroke-linecap="round" stroke-linejoin="round" />
                        <path class="st6"
                            d="M267.2 153.5l-52.3-15.3 15.9 23.9-23.7 46 31.2-.4h46.5zm-163.6-15.3l-52.3 15.3-17.4 54.2h46.4l31.1.4-23.6-46zm71 26.4l3.3-57.7 15.2-41.1h-67.5l15 41.1 3.5 57.7 1.2 18.2.1 44.8h27.7l.2-44.8z" />
                    </svg>
                    <p class="text-center dark:text-white">
                        You don't have MetaMask in your browser, please download it from
                        <a href="https://metamask.io/" class="text-accent" target="_blank"
                            rel="noreferrer noopener">MetaMask</a>
                    </p>
                </div>
                <!-- end body -->

                <div class="modal-footer">
                    <div class="flex items-center justify-center space-x-4">
                        <a href="https://metamask.io/" target="_blank" rel="noreferrer noopener"
                            class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">
                            Get Metamask
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Buy Now Modal -->
    <div class="modal fade" id="buyNowModal" tabindex="-1" aria-labelledby="buyNowModalLabel"
        aria-hidden="true">
        <div class="modal-dialog max-w-2xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyNowModalLabel">Complete checkout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" class="h-6 w-6 fill-jacarta-700 dark:fill-white">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button>
                </div>

                <!-- Body -->
                <div class="modal-body p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <span class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">Item</span>
                        <span
                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">Subtotal</span>
                    </div>

                    <div
                        class="relative flex items-center border-t border-b border-jacarta-100 py-4 dark:border-jacarta-600">
                        <figure class="mr-5 self-start">
                            <img src="img/avatars/avatar_2.jpg" alt="avatar 2" class="rounded-2lg"
                                loading="lazy" />
                        </figure>

                        <div>
                            <a href="collection.html" class="text-sm text-accent">Elon Musk #709</a>
                            <h3 class="mb-1 font-display text-base font-semibold text-jacarta-700 dark:text-white">
                                Lazyone Panda
                            </h3>
                            <div class="flex flex-wrap items-center">
                                <span class="mr-1 block text-sm text-jacarta-500 dark:text-jacarta-300">Creator
                                    Earnings: 5%</span>
                                <span
                                    data-tippy-content="The creator of this collection will receive 5% of the sale total from future sales of this item.">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="h-4 w-4 fill-jacarta-700 dark:fill-jacarta-300">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM11 7h2v2h-2V7zm0 4h2v6h-2v-6z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <span class="mb-1 flex items-center whitespace-nowrap">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0"
                                        y="0" viewBox="0 0 1920 1920" xml:space="preserve"
                                        class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                        </path>
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                    </svg>
                                </span>
                                <span class="text-sm font-medium tracking-tight dark:text-jacarta-100">1.55 ETH</span>
                            </span>
                            <div class="text-right text-sm dark:text-jacarta-300">$130.82</div>
                        </div>
                    </div>

                    <!-- Total -->
                    <div
                        class="mb-2 flex items-center justify-between border-b border-jacarta-100 py-2.5 dark:border-jacarta-600">
                        <span
                            class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Total</span>
                        <div class="ml-auto">
                            <span class="flex items-center whitespace-nowrap">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0"
                                        y="0" viewBox="0 0 1920 1920" xml:space="preserve"
                                        class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                        </path>
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                    </svg>
                                </span>
                                <span class="font-medium tracking-tight text-green">1.55 ETH</span>
                            </span>
                            <div class="text-right dark:text-jacarta-300">$130.82</div>
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="mt-4 flex items-center space-x-2">
                        <input type="checkbox" id="buyNowTerms"
                            class="h-5 w-5 self-start rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600" />
                        <label for="buyNowTerms" class="text-sm dark:text-jacarta-200">By checking this box, I agree
                            to Xhibiter's <a href="#" class="text-accent">Terms of Service</a></label>
                    </div>
                </div>
                <!-- end body -->

                <div class="modal-footer">
                    <div class="flex items-center justify-center space-x-4">
                        <button type="button"
                            class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">
                            Confirm Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Place Bid Modal -->
    <div class="modal fade" id="placeBidModal" tabindex="-1" aria-labelledby="placeBidLabel"
        aria-hidden="true">
        <div class="modal-dialog max-w-2xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="placeBidLabel">Place a bid</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" class="h-6 w-6 fill-jacarta-700 dark:fill-white">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button>
                </div>

                <!-- Body -->
                <div class="modal-body p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <span class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">Price</span>
                    </div>

                    <div
                        class="relative mb-2 flex items-center overflow-hidden rounded-lg border border-jacarta-100 dark:border-jacarta-600">
                        <div
                            class="flex flex-1 items-center self-stretch border-r border-jacarta-100 bg-jacarta-50 px-2">
                            <span>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0"
                                    y="0" viewBox="0 0 1920 1920" xml:space="preserve"
                                    class="mr-1 h-5 w-5">
                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                    <path fill="#62688F"
                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z"></path>
                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                </svg>
                            </span>
                            <span class="font-display text-sm text-jacarta-700">ETH</span>
                        </div>

                        <input type="text"
                            class="h-12 w-full flex-[3] border-0 focus:ring-inset focus:ring-accent"
                            placeholder="Amount" value="0.05" />

                        <div class="flex flex-1 justify-end self-stretch border-l border-jacarta-100 bg-jacarta-50">
                            <span class="self-center px-2 text-sm">$130.82</span>
                        </div>
                    </div>

                    <div class="text-right">
                        <span class="text-sm dark:text-jacarta-400">Balance: 0.0000 WETH</span>
                    </div>

                    <!-- Terms -->
                    <div class="mt-4 flex items-center space-x-2">
                        <input type="checkbox" id="terms"
                            class="h-5 w-5 self-start rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600" />
                        <label for="terms" class="text-sm dark:text-jacarta-200">By checking this box, I agree to
                            Xhibiter's <a href="#" class="text-accent">Terms of Service</a></label>
                    </div>
                </div>
                <!-- end body -->

                <div class="modal-footer">
                    <div class="flex items-center justify-center space-x-4">
                        <button type="button"
                            class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">
                            Place Bid
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('include.footer')

    <!-- JS Scripts -->
    <script src={{ asset('js/app.bundle.js') }}></script>
</body>

<!-- Mirrored from deothemes.com/envato/xhibiter/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2023 14:45:12 GMT -->

</html>
