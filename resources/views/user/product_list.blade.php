<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from deothemes.com/envato/xhibiter/html/collections-wide-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2023 14:45:52 GMT -->

<head>
    <title>Xhibiter | NFT Marketplace HTML Template</title>

    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

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

    <main class="mt-24">
        <!-- Collections -->
        <section class="relative pt-16 pb-24">
            <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                <img src='{{ asset('img/gradient_light.jpg') }}' alt="gradient" class="h-full w-full" />
            </picture>
            <div class="px-6 xl:px-24">
                <div class="lg:flex mt-6">
                    <!-- Sidebar -->
                    <div
                        class="lg:w-1/5 mb-10 js-collections-sidebar lg:h-[calc(100vh_-_232px)] lg:overflow-auto lg:sticky lg:top-32 lg:mr-12 pr-4 scrollbar-custom divide-y divide-jacarta-100 dark:divide-jacarta-600">

                        <!-- Collections filter -->
                        <div>
                            <h2 id="filters-collections-heading">
                                <button
                                    class="accordion-button relative flex w-full items-center justify-between py-3 text-left font-display text-xl text-jacarta-700 dark:text-white"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#filters-collections"
                                    aria-expanded="true" aria-controls="filters-collections">
                                    <span>Collections</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24"
                                        class="accordion-arrow h-5 w-5 shrink-0 fill-jacarta-700 transition-transform dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z">
                                        </path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="filters-collections" class="mt-3 collapse show"
                                aria-labelledby="filters-collections-heading">
                                <form action="https://deothemes.com/envato/xhibiter/html/search" class="relative mb-6">
                                    <input type="search"
                                        class="w-full rounded-lg border border-jacarta-100 py-[0.6875rem] px-4 pl-10 text-jacarta-700 placeholder-jacarta-500 focus:ring-accent dark:border-transparent dark:bg-white/[.15] dark:text-white dark:placeholder-white"
                                        placeholder="Search" />
                                    <span
                                        class="absolute left-0 top-0 flex h-full w-12 items-center justify-center rounded-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24" class="h-4 w-4 fill-jacarta-500 dark:fill-white">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z">
                                            </path>
                                        </svg>
                                    </span>
                                </form>
                                <ul class="space-y-6 mb-8">
                                    <li>
                                        <label class="flex items-center cursor-pointer w-full">
                                            <input type="checkbox" id="terms"
                                                class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                            <figure class="relative mr-2 w-8 shrink-0 lg:mr-4 lg:w-10">
                                                <img src={{ asset('img/nft-aggregator/item-14.jpg') }} alt="avatar 1"
                                                    class="rounded-2lg" loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Suki #4017
                                            </span>
                                            <span class="ml-auto text-sm dark:text-jacarta-300">10,000</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="flex items-center cursor-pointer w-full">
                                            <input type="checkbox" id="terms"
                                                class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                            <figure class="relative mr-2 w-8 shrink-0 lg:mr-4 lg:w-10">
                                                <img src={{ asset('img/nft-aggregator/item-2.jpg') }} alt="avatar 1"
                                                    class="rounded-2lg" loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Azuki #4017
                                            </span>
                                            <span class="ml-auto text-sm dark:text-jacarta-300">10,000</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end sidebar -->

                    <!-- Content -->
                    <div class="lg:w-4/5 js-collections-content">
                        <div class="mb-8 pb-px">
                            <h1 class="pt-3 mb-2 font-display text-2xl font-medium text-jacarta-700 dark:text-white">
                                Explore Collections</h1>
                            <p class="dark:text-jacarta-400 font-medium text-2xs">156,893 items</p>
                        </div>

                        <div class="tab-content">

                            <!-- Grid -->
                            <div class="tab-pane fade show active" id="view-grid" role="tabpanel"
                                aria-labelledby="view-grid-tab">
                                <div
                                    class="grid grid-cols-1 gap-[1.875rem] md:grid-cols-3 lg:grid-cols-4 js-collections-grid">
                                    <article>
                                        <div
                                            class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                            <a href={{ url('/product_detail') }}>
                                                <img src={{ asset('img/collections/collection_square_1.jpg') }}
                                                    alt="item 1" class="w-full rounded-[0.625rem]" loading="lazy" />
                                            </a>
                                            <a href={{ url('/product_detail') }}
                                                class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                                Art Me Outside
                                            </a>
                                            <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">
                                                <span class="text-jacarta-700 dark:text-white">Rs. 199 <del>Rs.
                                                        250</del> (20% OFF)</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article>
                                        <div
                                            class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                            <a href={{ url('/product_detail') }}>
                                                <img src={{ asset('img/collections/collection_square_1.jpg') }}
                                                    alt="item 1" class="w-full rounded-[0.625rem]"
                                                    loading="lazy" />
                                            </a>
                                            <a href={{ url('/product_detail') }}
                                                class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                                Art Me Outside
                                            </a>
                                            <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">
                                                <span class="text-jacarta-700 dark:text-white">Rs. 199 <del>Rs.
                                                        250</del> (20% OFF)</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article>
                                        <div
                                            class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                            <a href={{ url('/product_detail') }}>
                                                <img src={{ asset('img/collections/collection_square_1.jpg') }}
                                                    alt="item 1" class="w-full rounded-[0.625rem]"
                                                    loading="lazy" />
                                            </a>
                                            <a href={{ url('/product_detail') }}
                                                class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                                Art Me Outside
                                            </a>
                                            <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">
                                                <span class="text-jacarta-700 dark:text-white">Rs. 199 <del>Rs.
                                                        250</del> (20% OFF)</span>
                                            </div>
                                        </div>
                                    </article>
                                    <article>
                                        <div
                                            class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                            <a href={{ url('/product_detail') }}>
                                                <img src={{ asset('img/collections/collection_square_1.jpg') }}
                                                    alt="item 1" class="w-full rounded-[0.625rem]"
                                                    loading="lazy" />
                                            </a>
                                            <a href={{ url('/product_detail') }}
                                                class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                                Art Me Outside
                                            </a>
                                            <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">
                                                <span class="text-jacarta-700 dark:text-white">Rs. 199 <del>Rs.
                                                        250</del> (20% OFF)</span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                            <!-- List -->
                            <div class="tab-pane fade" id="view-list" role="tabpanel"
                                aria-labelledby="view-list-tab">
                                <div class="scrollbar-custom overflow-x-auto">
                                    <div role="table"
                                        class="w-full min-w-[736px] border border-jacarta-100 bg-white text-sm dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white rounded-2lg">
                                        <div class="flex rounded-t-2lg bg-jacarta-50 dark:bg-jacarta-600"
                                            role="row">
                                            <div class="md:w-2/5 w-1/4 py-3 px-4" role="columnheader">
                                                <span
                                                    class="w-full overflow-hidden text-ellipsis text-jacarta-700 dark:text-jacarta-100">Collection</span>
                                            </div>
                                            <div class="md:w-[12%] w-[15%] py-3 px-4 text-right" role="columnheader">
                                                <span
                                                    class="w-full overflow-hidden text-ellipsis text-jacarta-700 dark:text-jacarta-100">Floor
                                                    Price</span>
                                            </div>
                                            <div class="md:w-[12%] w-[15%] py-3 px-4 text-right" role="columnheader">
                                                <span
                                                    class="w-full overflow-hidden text-ellipsis text-jacarta-700 dark:text-jacarta-100">Volume</span>
                                            </div>
                                            <div class="md:w-[12%] w-[15%] py-3 px-4 text-right" role="columnheader">
                                                <span
                                                    class="w-full overflow-hidden text-ellipsis text-jacarta-700 dark:text-jacarta-100">Volume
                                                    Change</span>
                                            </div>
                                            <div class="md:w-[12%] w-[15%] py-3 px-4 text-right" role="columnheader">
                                                <span
                                                    class="w-full overflow-hidden text-ellipsis text-jacarta-700 dark:text-jacarta-100">Items</span>
                                            </div>
                                            <div class="md:w-[12%] w-[15%] py-3 px-4 text-right" role="columnheader">
                                                <span
                                                    class="w-full overflow-hidden text-ellipsis text-jacarta-700 dark:text-jacarta-100">Owners</span>
                                            </div>
                                        </div>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">1</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_1.jpg" alt="avatar 1"
                                                        class="rounded-2lg" loading="lazy">
                                                    <div class="absolute -right-2 -bottom-1 flex h-[1.125rem] w-[1.125rem] items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                        data-tippy-content="Verified Collection">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="24" height="24"
                                                            class="h-[.875rem] w-[.875rem] fill-white">
                                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                                            <path
                                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    NFT Funny Cat
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.12</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">3.265</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-red">-49.99%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                10.0K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                3.5K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">2</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_2.jpg" alt="avatar 2"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Cryptopank
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.017</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">5.344</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+531.8%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                9.8K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                868
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">3</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_5.jpg" alt="avatar 5"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Bored Bunny
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.39</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">12.503</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+384.2%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                3K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                1.2K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">4</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_9.jpg" alt="avatar 9"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    NFT stars
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.002</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">6.098</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-red">-79.3%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                987
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                226
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">5</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_13.jpg" alt="avatar 13"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Arcahorizons
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.05</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.149</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-red">-63.6%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                8.9K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                1.2K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">6</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_6.jpg" alt="avatar 6"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Wow Frens
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.047</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.31</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+2,127.6%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                86
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                8.4K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">7</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_10.jpg" alt="avatar 10"
                                                        class="rounded-2lg" loading="lazy">
                                                    <div class="absolute -right-2 -bottom-1 flex h-[1.125rem] w-[1.125rem] items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                        data-tippy-content="Verified Collection">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="24" height="24"
                                                            class="h-[.875rem] w-[.875rem] fill-white">
                                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                                            <path
                                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Asumitsu
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.095</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">481.8</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+82.1%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                8.1K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                910
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">8</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_17.jpg" alt="avatar 17"
                                                        class="rounded-2lg" loading="lazy">
                                                    <div class="absolute -right-2 -bottom-1 flex h-[1.125rem] w-[1.125rem] items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                        data-tippy-content="Verified Collection">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="24" height="24"
                                                            class="h-[.875rem] w-[.875rem] fill-white">
                                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                                            <path
                                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Metasmorf
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">13.34</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">692.2</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+7.9%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                19.5K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                1.8K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">9</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_18.jpg" alt="avatar 18"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    PankySkal
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.58</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">547.9</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-jacarta-400">—</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                3.5K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                2.1K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">10</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_19.jpg" alt="avatar 19"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    The Overseers
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">63.5</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">1,607</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+47.5%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                100K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                33K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">11</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_20.jpg" alt="avatar 20"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Dope Shibas
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">3.14</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">241.5</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+718.3%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                16K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                5.5K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">12</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_21.jpg" alt="avatar 21"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    #1 Crush Editions
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">4.794</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">227</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+46.9%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                9.6K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                5.8K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">13</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_22.jpg" alt="avatar 22"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Camp Cosmos
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">13.95</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                        </path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">205.3</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-red">-44.3%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                10K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                5K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">14</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_23.jpg" alt="avatar 23"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Land Of Whimsy
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">2.84</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">105.6</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-red">-53.8%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                10K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                3.3K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">15</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_24.jpg" alt="avatar 24"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Audio Galleries
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.02</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">77.95</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+60.9%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                19.9K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                7.8K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">16</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_25.jpg" alt="avatar 25"
                                                        class="rounded-2lg" loading="lazy">
                                                    <div class="absolute -right-2 -bottom-1 flex h-[1.125rem] w-[1.125rem] items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                        data-tippy-content="Verified Collection">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="24" height="24"
                                                            class="h-[.875rem] w-[.875rem] fill-white">
                                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                                            <path
                                                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    Art Me Outside
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.047</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">91.76</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-red">-28.5%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                9.6K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                4.2K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">17</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_26.jpg" alt="avatar 26"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    VR Space_287
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">0.015</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">72.86</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+73.61%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                4.3K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                9K
                                            </div>
                                        </a>
                                        <a href="user.html" class="flex transition-shadow hover:shadow-lg"
                                            role="row">
                                            <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="mr-3 lg:mr-5">18</span>
                                                <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                    <img src="img/avatars/avatar_27.jpg" alt="avatar 27"
                                                        class="rounded-2lg" loading="lazy">
                                                </figure>
                                                <span
                                                    class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                    SlimHoods
                                                </span>
                                            </div>
                                            <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">1.739</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="-ml-1" data-tippy-content="ETH">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 1920 1920"
                                                        xml:space="preserve" class="mr-1 h-4 w-4">
                                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z">
                                                        </path>
                                                        <path fill="#62688F"
                                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                        </path>
                                                        <path fill="#454A75"
                                                            d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z">
                                                        </path>
                                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium tracking-tight">72.81</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                <span class="text-green">+151.3%</span>
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                9K
                                            </div>
                                            <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                                role="cell">
                                                3.7K
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div> <!-- end content -->
                </div>
            </div>
        </section>
        <!-- end collections -->
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
                            <a href={{ url('/product_detail') }} class="text-sm text-accent">Elon Musk #709</a>
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
                        <span class="font-display font-semibold text-jacarta-700 dark:text-white">Total</span>
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

    <!-- Footer -->
    @include('include.footer')

    <!-- JS Scripts -->
    <script src={{ asset('js/app.bundle.js') }}></script>
</body>

<!-- Mirrored from deothemes.com/envato/xhibiter/html/collections-wide-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2023 14:45:59 GMT -->

</html>
