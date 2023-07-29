@extends('frontend.layout.default')

@section('content')

<main>
    <!-- Hero -->
    <section class="hero relative py-20 md:pt-32">
        <div class="container">
            <div class="mx-auto max-w-2xl pt-24 text-center">
                <h1 class="mb-10 font-display text-5xl text-jacarta-700 dark:text-white lg:text-6xl xl:text-7xl">

                    <span class="animate-gradient">Grab Your Favorite Premium Stickers</span>
                </h1>
                <!-- Search -->
                <form action="https://deothemes.com/envato/xhibiter/html/search" class="relative mb-4">
                    <input type="search"
                        class="w-full rounded-2xl border border-jacarta-100 py-4 px-4 pl-10 text-md text-jacarta-700 placeholder-jacarta-300 focus:ring-accent dark:border-transparent dark:bg-white/[.15] dark:text-white dark:placeholder-white"
                        placeholder="Search by Collection, NFT or user" />
                    <span class="absolute left-0 top-0 flex h-full w-12 items-center justify-center rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="h-4 w-4 fill-jacarta-500 dark:fill-white">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
                        </svg>
                    </span>
                </form>

                <span class="dark:text-jacarta-300">Popular searches:</span>
                <a href="#"
                    class="text-accent hover:text-jacarta-700 dark:hover:text-white">cryptopunks</a><span>,</span>
                <a href="#" class="text-accent hover:text-jacarta-700 dark:hover:text-white">bored ape yacht
                    club</a><span>,</span>
                <a href="#" class="text-accent hover:text-jacarta-700 dark:hover:text-white">moonbirds</a>
            </div>
        </div>
    </section>
    <!-- end hero -->

    <!-- Coverflow Slider -->
    <div class="relative px-6 pb-16 sm:px-0">
        <!-- Slider -->
        <div class="swiper coverflow-slider !py-5">
            <h2 class="mb-8 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                Our Best Sellers
            </h2>
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <article>
                        <div
                            class="block overflow-hidden rounded-2.5xl bg-white shadow-md transition-shadow hover:shadow-lg dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="New/Anime_Collection/11.jpeg" alt="item 1"
                                        class="swiper-lazy h-[430px] w-full object-cover" height="430" width="379" />
                                    <div class="swiper-lazy-preloader"></div>
                                </a>
                            </figure>
                            <div class="p-6">
                                <div class="flex">
                                    <div>
                                        <a href="item.html" class="block">
                                            <span
                                                class="font-display text-lg leading-none text-jacarta-700 hover:text-accent dark:text-white">Anime
                                                Stickers</span>
                                        </a>
                                        <a href="#" class="text-2xs text-accent">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article>
                        <div
                            class="block overflow-hidden rounded-2.5xl bg-white shadow-md transition-shadow hover:shadow-lg dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="New/Developer_New_Collection/13.jpeg" alt="item 1"
                                        class="swiper-lazy h-[430px] w-full object-cover" height="430" width="379" />
                                    <div class="swiper-lazy-preloader"></div>
                                </a>
                            </figure>
                            <div class="p-6">
                                <div class="flex">
                                    <div>
                                        <a href="item.html" class="block">
                                            <span
                                                class="font-display text-lg leading-none text-jacarta-700 hover:text-accent dark:text-white">Developer
                                                Stickers</span>
                                        </a>
                                        <a href="#" class="text-2xs text-accent">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article>
                        <div
                            class="block overflow-hidden rounded-2.5xl bg-white shadow-md transition-shadow hover:shadow-lg dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="New/Gamer_Colection/12.jpeg" alt="item 1"
                                        class="swiper-lazy h-[430px] w-full object-cover" height="430" width="379" />
                                    <div class="swiper-lazy-preloader"></div>
                                </a>
                            </figure>
                            <div class="p-6">
                                <div class="flex">
                                    <div>
                                        <a href="item.html" class="block">
                                            <span
                                                class="font-display text-lg leading-none text-jacarta-700 hover:text-accent dark:text-white">Gamer
                                                Stickers</span>
                                        </a>
                                        <a href="#" class="text-2xs text-accent">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article>
                        <div
                            class="block overflow-hidden rounded-2.5xl bg-white shadow-md transition-shadow hover:shadow-lg dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="New/astethic_Collection/7.jpeg" alt="item 1"
                                        class="swiper-lazy h-[430px] w-full object-cover" height="430" width="379" />
                                    <div class="swiper-lazy-preloader"></div>
                                </a>
                            </figure>
                            <div class="p-6">
                                <div class="flex">
                                    <div>
                                        <a href="item.html" class="block">
                                            <span
                                                class="font-display text-lg leading-none text-jacarta-700 hover:text-accent dark:text-white">Aesthetic
                                                Stickers</span>
                                        </a>
                                        <a href="#" class="text-2xs text-accent">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article>
                        <div
                            class="block overflow-hidden rounded-2.5xl bg-white shadow-md transition-shadow hover:shadow-lg dark:bg-jacarta-700">
                            <figure class="relative">
                                <a href="item.html">
                                    <img src="New/Superhero_Collection/2.jpg" alt="item 1"
                                        class="swiper-lazy h-[430px] w-full object-cover" height="430" width="379" />
                                    <div class="swiper-lazy-preloader"></div>
                                </a>
                            </figure>
                            <div class="p-6">
                                <div class="flex">
                                    <div>
                                        <a href="item.html" class="block">
                                            <span
                                                class="font-display text-lg leading-none text-jacarta-700 hover:text-accent dark:text-white">Super
                                                Hero
                                                Stickers</span>
                                        </a>
                                        <a href="#" class="text-2xs text-accent">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div
            class="swiper-button-prev swiper-button-prev-4 group absolute top-1/2 left-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                class="fill-jacarta-700 group-hover:fill-accent">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
            </svg>
        </div>
        <div
            class="swiper-button-next swiper-button-next-4 group absolute top-1/2 right-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                class="fill-jacarta-700 group-hover:fill-accent">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
            </svg>
        </div>
    </div>
    <!-- end coverflow slider -->

    <!-- Top Collections -->
    <section class="relative py-24 dark:bg-jacarta-800">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
            <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
            <div class="mb-12 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                <h2 class="inline">Our Top Collections</h2>
            </div>

            <div class="grid grid-cols-1 gap-3 md:grid-cols-2 md:gap-[1.875rem] lg:grid-cols-4">
                <div
                    class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                    <figure class="mr-4 shrink-0">
                        <a href="collection.html" class="relative block">
                            <img src="New/Anime_Collection/1.jpeg" alt="avatar 1" class="rounded-2lg" loading="lazy" />
                            <div
                                class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                1
                            </div>
                            <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                data-tippy-content="Verified Collection">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-[.875rem] w-[.875rem] fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <div>
                        <a href="collection.html" class="block">
                            <span
                                class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Anime
                                Collection</span>
                        </a>
                        <span class="text-sm dark:text-jacarta-300">7 stickers</span>
                    </div>
                </div>
                <div
                    class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                    <figure class="mr-4 shrink-0">
                        <a href="collection.html" class="relative block">
                            <img src="New/astethic_Collection/1.jpeg" alt="avatar 1" class="rounded-2lg"
                                loading="lazy" />
                            <div
                                class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                1
                            </div>
                            <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                data-tippy-content="Verified Collection">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-[.875rem] w-[.875rem] fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <div>
                        <a href="collection.html" class="block">
                            <span
                                class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Astethic
                                Collection </span>
                        </a>
                        <span class="text-sm dark:text-jacarta-300">19 stickers</span>
                    </div>
                </div>
                <div
                    class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                    <figure class="mr-4 shrink-0">
                        <a href="collection.html" class="relative block">
                            <img src="New/Developer_New_Collection/1.jpeg" alt="avatar 1" class="rounded-2lg"
                                loading="lazy" />
                            <div
                                class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                1
                            </div>
                            <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                data-tippy-content="Verified Collection">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-[.875rem] w-[.875rem] fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <div>
                        <a href="collection.html" class="block">
                            <span
                                class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Developer
                                Collecction </span>
                        </a>
                        <span class="text-sm dark:text-jacarta-300">89 Stickers</span>
                    </div>
                </div>
                <div
                    class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                    <figure class="mr-4 shrink-0">
                        <a href="collection.html" class="relative block">
                            <img src="New/Gamer_Colection/1.jpeg" alt="avatar 1" class="rounded-2lg" loading="lazy" />
                            <div
                                class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                1
                            </div>
                            <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                data-tippy-content="Verified Collection">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-[.875rem] w-[.875rem] fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <div>
                        <a href="collection.html" class="block">
                            <span
                                class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Gamer
                                Collection
                            </span>
                        </a>
                        <span class="text-sm dark:text-jacarta-300">117 Stickers</span>
                    </div>
                </div>
                <div
                    class="flex rounded-2.5xl border border-jacarta-100 bg-white py-4 px-7 transition-shadow hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                    <figure class="mr-4 shrink-0">
                        <a href="collection.html" class="relative block">
                            <img src="New/Superhero_Collection/1.jpeg" alt="avatar 1" class="rounded-2lg"
                                loading="lazy" />
                            <div
                                class="absolute -left-3 top-1/2 flex h-6 w-6 -translate-y-2/4 items-center justify-center rounded-full border-2 border-white bg-jacarta-700 text-xs text-white dark:border-jacarta-600">
                                1
                            </div>
                            <div class="absolute -left-3 top-[60%] flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                data-tippy-content="Verified Collection">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-[.875rem] w-[.875rem] fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <div>
                        <a href="collection.html" class="block">
                            <span
                                class="font-display font-semibold text-jacarta-700 hover:text-accent dark:text-white">Super
                                Hero
                                Collection
                            </span>
                        </a>
                        <span class="text-sm dark:text-jacarta-300">78 Stickers</span>
                    </div>
                </div>

            </div>
            <div class="mt-10 text-center">
                <a href="rankings.html"
                    class="inline-block rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">View
                    all Collections</a>
            </div>
        </div>
    </section>
    <!-- end top collections -->

    <!-- Live Auctions -->
    <section class="py-24">
        <div class="container">
            <h2 class="mb-8 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                New Products
            </h2>
            <div class="New-collection-container grid grid-cols-1 gap-[1.875rem] md:grid-cols-2 lg:grid-cols-4">
                <article class="article_new_collection">
                    <div
                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                        <div class="mb-4 flex items-center justify-between">

                            <div class="dropdown rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                <a href="#"
                                    class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                    role="button" id="itemActions1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-jacarta-500 dark:fill-jacarta-200">
                                        <circle cx="2" cy="2" r="2" />
                                        <circle cx="8" cy="2" r="2" />
                                        <circle cx="14" cy="2" r="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <figure class="relative">
                            <a href="item.html">
                                <img src="/New/Anime_Collection/0.jpeg" alt="item 8" class="w-full rounded-[0.625rem]"
                                    loading="lazy" />
                            </a>
                            <div
                                class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center justify-center space-x-1 rounded-full bg-white py-2.5 px-6 text-2xs font-medium">
                                <span class="h-3.5 w-3.5 shrink-0 bg-contain bg-center" style="
                        background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/23f3.png);
                      "></span>
                                <span class="js-countdown-timer shrink-0 whitespace-nowrap text-jacarta-700"
                                    data-countdown="2023-04-07T11:32:30" data-expired="New"></span>
                                <span class="js-countdown-left" data-countdownLeft="left"></span>
                            </div>
                        </figure>
                        <div class="mt-7 flex items-center justify-between">
                            <a href="item.html">
                                <span
                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Monkeyme#15</span>
                            </a>
                            <span
                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                    </svg>
                                </span>
                            </span>
                        </div>

                        <div class="mt-8 flex items-center justify-between">
                            <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                data-bs-target="#placeBidModal">
                                Add to Chart
                            </button>
                            <div class="flex items-center space-x-1">
                                <span
                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                    data-tippy-content="Favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                </span>
                                <span class="text-sm dark:text-jacarta-200">25</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article_new_collection">
                    <div
                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                        <div class="mb-4 flex items-center justify-between">

                            <div class="dropdown rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                <a href="#"
                                    class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                    role="button" id="itemActions1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-jacarta-500 dark:fill-jacarta-200">
                                        <circle cx="2" cy="2" r="2" />
                                        <circle cx="8" cy="2" r="2" />
                                        <circle cx="14" cy="2" r="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <figure class="relative">
                            <a href="item.html">
                                <img src="/New/Anime_Collection/1.jpeg" alt="item 8" class="w-full rounded-[0.625rem]"
                                    loading="lazy" />
                            </a>
                            <div
                                class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center justify-center space-x-1 rounded-full bg-white py-2.5 px-6 text-2xs font-medium">
                                <span class="h-3.5 w-3.5 shrink-0 bg-contain bg-center" style="
                        background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/23f3.png);
                      "></span>
                                <span class="js-countdown-timer shrink-0 whitespace-nowrap text-jacarta-700"
                                    data-countdown="2023-04-07T11:32:30" data-expired="New"></span>
                                <span class="js-countdown-left" data-countdownLeft="left"></span>
                            </div>
                        </figure>
                        <div class="mt-7 flex items-center justify-between">
                            <a href="item.html">
                                <span
                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Monkeyme#155</span>
                            </a>
                            <span
                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                    </svg>
                                </span>
                            </span>
                        </div>

                        <div class="mt-8 flex items-center justify-between">
                            <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                data-bs-target="#placeBidModal">
                                Add to Chart
                            </button>
                            <div class="flex items-center space-x-1">
                                <span
                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                    data-tippy-content="Favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                </span>
                                <span class="text-sm dark:text-jacarta-200">25</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article_new_collection">
                    <div
                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                        <div class="mb-4 flex items-center justify-between">

                            <div class="dropdown rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                <a href="#"
                                    class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                    role="button" id="itemActions1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-jacarta-500 dark:fill-jacarta-200">
                                        <circle cx="2" cy="2" r="2" />
                                        <circle cx="8" cy="2" r="2" />
                                        <circle cx="14" cy="2" r="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <figure class="relative">
                            <a href="item.html">
                                <img src="/New/Anime_Collection/3.jpeg" alt="item 8" class="w-full rounded-[0.625rem]"
                                    loading="lazy" />
                            </a>
                            <div
                                class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center justify-center space-x-1 rounded-full bg-white py-2.5 px-6 text-2xs font-medium">
                                <span class="h-3.5 w-3.5 shrink-0 bg-contain bg-center" style="
                        background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/23f3.png);
                      "></span>
                                <span class="js-countdown-timer shrink-0 whitespace-nowrap text-jacarta-700"
                                    data-countdown="2023-04-07T11:32:30" data-expired="New"></span>
                                <span class="js-countdown-left" data-countdownLeft="left"></span>
                            </div>
                        </figure>
                        <div class="mt-7 flex items-center justify-between">
                            <a href="item.html">
                                <span
                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Monkeyme#155</span>
                            </a>
                            <span
                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                    </svg>
                                </span>
                            </span>
                        </div>

                        <div class="mt-8 flex items-center justify-between">
                            <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                data-bs-target="#placeBidModal">
                                Add to Chart
                            </button>
                            <div class="flex items-center space-x-1">
                                <span
                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                    data-tippy-content="Favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                </span>
                                <span class="text-sm dark:text-jacarta-200">25</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article_new_collection">
                    <div
                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                        <div class="mb-4 flex items-center justify-between">

                            <div class="dropdown rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                <a href="#"
                                    class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                    role="button" id="itemActions1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-jacarta-500 dark:fill-jacarta-200">
                                        <circle cx="2" cy="2" r="2" />
                                        <circle cx="8" cy="2" r="2" />
                                        <circle cx="14" cy="2" r="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <figure class="relative">
                            <a href="item.html">
                                <img src="/New/Anime_Collection/4.jpeg" alt="item 8" class="w-full rounded-[0.625rem]"
                                    loading="lazy" />
                            </a>
                            <div
                                class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center justify-center space-x-1 rounded-full bg-white py-2.5 px-6 text-2xs font-medium">
                                <span class="h-3.5 w-3.5 shrink-0 bg-contain bg-center" style="
                        background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/23f3.png);
                      "></span>
                                <span class="js-countdown-timer shrink-0 whitespace-nowrap text-jacarta-700"
                                    data-countdown="2023-04-07T11:32:30" data-expired="New"></span>
                                <span class="js-countdown-left" data-countdownLeft="left"></span>
                            </div>
                        </figure>
                        <div class="mt-7 flex items-center justify-between">
                            <a href="item.html">
                                <span
                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Monkeyme#155</span>
                            </a>
                            <span
                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                    </svg>
                                </span>
                            </span>
                        </div>

                        <div class="mt-8 flex items-center justify-between">
                            <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                data-bs-target="#placeBidModal">
                                Add to Chart
                            </button>
                            <div class="flex items-center space-x-1">
                                <span
                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                    data-tippy-content="Favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                </span>
                                <span class="text-sm dark:text-jacarta-200">25</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article_new_collection">
                    <div
                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                        <div class="mb-4 flex items-center justify-between">

                            <div class="dropdown rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                <a href="#"
                                    class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                    role="button" id="itemActions1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-jacarta-500 dark:fill-jacarta-200">
                                        <circle cx="2" cy="2" r="2" />
                                        <circle cx="8" cy="2" r="2" />
                                        <circle cx="14" cy="2" r="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <figure class="relative">
                            <a href="item.html">
                                <img src="/New/Anime_Collection/5.jpeg" alt="item 8" class="w-full rounded-[0.625rem]"
                                    loading="lazy" />
                            </a>
                            <div
                                class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center justify-center space-x-1 rounded-full bg-white py-2.5 px-6 text-2xs font-medium">
                                <span class="h-3.5 w-3.5 shrink-0 bg-contain bg-center" style="
                        background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/23f3.png);
                      "></span>
                                <span class="js-countdown-timer shrink-0 whitespace-nowrap text-jacarta-700"
                                    data-countdown="2023-04-07T11:32:30" data-expired="New"></span>
                                <span class="js-countdown-left" data-countdownLeft="left"></span>
                            </div>
                        </figure>
                        <div class="mt-7 flex items-center justify-between">
                            <a href="item.html">
                                <span
                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Monkeyme#155</span>
                            </a>
                            <span
                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                    </svg>
                                </span>
                            </span>
                        </div>

                        <div class="mt-8 flex items-center justify-between">
                            <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                data-bs-target="#placeBidModal">
                                Add to Chart
                            </button>
                            <div class="flex items-center space-x-1">
                                <span
                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                    data-tippy-content="Favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                </span>
                                <span class="text-sm dark:text-jacarta-200">25</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article_new_collection">
                    <div
                        class="block rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                        <div class="mb-4 flex items-center justify-between">

                            <div class="dropdown rounded-full hover:bg-jacarta-100 dark:hover:bg-jacarta-600">
                                <a href="#"
                                    class="dropdown-toggle inline-flex h-8 w-8 items-center justify-center text-sm"
                                    role="button" id="itemActions1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-jacarta-500 dark:fill-jacarta-200">
                                        <circle cx="2" cy="2" r="2" />
                                        <circle cx="8" cy="2" r="2" />
                                        <circle cx="14" cy="2" r="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <figure class="relative">
                            <a href="item.html">
                                <img src="/New/Anime_Collection/6.jpeg" alt="item 8" class="w-full rounded-[0.625rem]"
                                    loading="lazy" />
                            </a>
                            <div
                                class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center justify-center space-x-1 rounded-full bg-white py-2.5 px-6 text-2xs font-medium">
                                <span class="h-3.5 w-3.5 shrink-0 bg-contain bg-center" style="
                        background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/23f3.png);
                      "></span>
                                <span class="js-countdown-timer shrink-0 whitespace-nowrap text-jacarta-700"
                                    data-countdown="2023-04-07T11:32:30" data-expired="New"></span>
                                <span class="js-countdown-left" data-countdownLeft="left"></span>
                            </div>
                        </figure>
                        <div class="mt-7 flex items-center justify-between">
                            <a href="item.html">
                                <span
                                    class="font-display text-base text-jacarta-700 hover:text-accent dark:text-white">Monkeyme#155</span>
                            </a>
                            <span
                                class="flex items-center whitespace-nowrap rounded-md border border-jacarta-100 py-1 px-2 dark:border-jacarta-600">
                                <span data-tippy-content="ETH">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
                                        <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z" />
                                        <path fill="#62688F"
                                            d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z" />
                                        <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z" />
                                        <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z" />
                                        <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z" />
                                    </svg>
                                </span>
                            </span>
                        </div>

                        <div class="mt-8 flex items-center justify-between">
                            <button class="font-display text-sm font-semibold text-accent" data-bs-toggle="modal"
                                data-bs-target="#placeBidModal">
                                Add to Chart
                            </button>
                            <div class="flex items-center space-x-1">
                                <span
                                    class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('https://deothemes.com/envato/xhibiter/img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                    data-tippy-content="Favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                </span>
                                <span class="text-sm dark:text-jacarta-200">25</span>
                            </div>
                        </div>
                    </div>
                </article>
                <button class="button-prev bttn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="fill-jacarta-700 group-hover:fill-accent">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z"></path>
                    </svg>
                </button>
                <button class="button-next bttn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="fill-jacarta-700 group-hover:fill-accent">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <!-- end live auctions -->

    <!-- Process / Newsletter -->
    <section class="relative py-24 dark:bg-jacarta-800">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
            <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
            <h2 class="mb-16 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                Why Buy Stickers from Sticker Majesty?
            </h2>
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-4">
                <div class="text-center">
                    <div class="mb-6 inline-flex rounded-full bg-[#00000] p-3">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full">
                            <img src="{{ asset('img/icons/waterproof.png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <h3 class="font-display text-lg text-jacarta-700 dark:text-white">Waterproof</h3>
                    <p class="dark:text-jacarta-300">
                        Make a splash with our water-resistant stickers - vibrant, durable, and ready to withstand any
                        wet adventure! 💦🌈
                    </p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex rounded-full bg-[#00000] p-3">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full ">
                            <img src="{{ asset('img/icons/scratchproof.png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <h3 class="font-display text-lg text-jacarta-700 dark:text-white">Scratchproof</h3>
                    <p class="dark:text-jacarta-300">
                        Indestructible charm awaits with our scratch-resistant stickers - resilient designs that stay
                        flawless, no matter what comes their way! ✨🛡️
                    </p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex rounded-full bg-[#00000] p-3">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full ">
                            <img src="{{ asset('img/icons/reusable.png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <h3 class="font-display text-lg text-jacarta-700 dark:text-white">Reusable</h3>
                    <p class="dark:text-jacarta-300">
                        Unleash your creativity with our eco-friendly reusable stickers - endless possibilities for
                        self-expression, while reducing waste and inspiring imagination! ♻️🎨
                    </p>
                </div>
                <div class="text-center">
                    <div class="mb-6 inline-flex rounded-full bg-[#00000] p-3">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full ">
                            <img src="{{ asset('img/icons/uv_protective.png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <h3 class="font-display text-lg text-jacarta-700 dark:text-white">UV Protective</h3>
                    <p class="dark:text-jacarta-300">
                        Sun-proof your world with UV protective stickers - vibrant designs that defy fading, while
                        giving your space a stylish and lasting touch! ☀️🌈
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
                        class="w-full rounded-full border border-jacarta-700 py-3 px-4 focus:ring-accent dark:text-dark dark:placeholder-dark" />
                    <button
                        class="absolute top-2 right-2 rounded-full bg-jacarta-600 px-6 py-2 font-display text-sm text-white hover:bg-accent">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- end process / newsletter -->

    <!-- Featured collections -->
    <section class="py-24">
        <div class="container">
            <h2 class="mb-8 text-center font-display text-3xl text-jacarta-700 dark:text-white">
                <span class="mr-1 inline-block h-6 w-6 bg-contain bg-center text-xl" style="
                background-image: url(../../../../cdn.jsdelivr.net/npm/emoji-datasource-apple%407.0.2/img/apple/64/1f4a5.png);
              "></span>
                Latest Packages
            </h2>

            <div class="relative">
                <!-- Slider -->
                <div class="swiper collections-slider !py-5">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <article>
                                <div
                                    class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                    <a href="collection.html" class="flex space-x-[0.625rem]">
                                        <span class="w-[74.5%]">
                                            <img src="img/collections/collection_1_1.jpg" alt="item 1"
                                                class="h-full w-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                        <span class="flex w-1/3 flex-col space-y-[0.625rem]">
                                            <img src="img/collections/collection_1_2.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_1_3.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_1_4.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                    </a>

                                    <a href="collection.html"
                                        class="mt-4 block font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                        Art Me Outside
                                    </a>

                                    <div
                                        class="mt-2 flex items-center justify-between text-sm font-medium tracking-tight">
                                        <div class="flex flex-wrap items-center">
                                            <a href="user.html" class="mr-2 shrink-0">
                                                <img src="img/avatars/owner_5.png" alt="owner"
                                                    class="h-5 w-5 rounded-full" />
                                            </a>
                                            <span class="mr-1 dark:text-jacarta-400">by</span>
                                            <a href="user.html" class="text-accent">
                                                <span>Wow Frens</span>
                                            </a>
                                        </div>
                                        <span class="text-sm dark:text-jacarta-300">10K Items</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article>
                                <div
                                    class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                    <a href="collection.html" class="flex space-x-[0.625rem]">
                                        <span class="w-[74.5%]">
                                            <img src="img/collections/collection_2_1.jpg" alt="item 1"
                                                class="h-full w-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                        <span class="flex w-1/3 flex-col space-y-[0.625rem]">
                                            <img src="img/collections/collection_2_2.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_2_3.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_2_4.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                    </a>

                                    <a href="collection.html"
                                        class="mt-4 block font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                        PankySkal
                                    </a>

                                    <div
                                        class="mt-2 flex items-center justify-between text-sm font-medium tracking-tight">
                                        <div class="flex flex-wrap items-center">
                                            <a href="user.html" class="mr-2 shrink-0">
                                                <img src="img/avatars/owner_9.png" alt="owner"
                                                    class="h-5 w-5 rounded-full" />
                                            </a>
                                            <span class="mr-1 dark:text-jacarta-400">by</span>
                                            <a href="user.html" class="text-accent">
                                                <span>NFT stars</span>
                                            </a>
                                        </div>
                                        <span class="text-sm dark:text-jacarta-300">2.8K Items</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article>
                                <div
                                    class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                    <a href="collection.html" class="flex space-x-[0.625rem]">
                                        <span class="w-[74.5%]">
                                            <img src="img/collections/collection_3_1.jpg" alt="item 1"
                                                class="h-full w-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                        <span class="flex w-1/3 flex-col space-y-[0.625rem]">
                                            <img src="img/collections/collection_3_2.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_3_3.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_3_4.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                    </a>

                                    <a href="collection.html"
                                        class="mt-4 block font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                        VR Space_287
                                    </a>

                                    <div
                                        class="mt-2 flex items-center justify-between text-sm font-medium tracking-tight">
                                        <div class="flex flex-wrap items-center">
                                            <a href="user.html" class="mr-2 shrink-0">
                                                <img src="img/avatars/owner_4.png" alt="owner"
                                                    class="h-5 w-5 rounded-full" />
                                            </a>
                                            <span class="mr-1 dark:text-jacarta-400">by</span>
                                            <a href="user.html" class="text-accent">
                                                <span>Origin Morish</span>
                                            </a>
                                        </div>
                                        <span class="text-sm dark:text-jacarta-300">8K Items</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article>
                                <div
                                    class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                    <a href="collection.html" class="flex space-x-[0.625rem]">
                                        <span class="w-[74.5%]">
                                            <img src="img/collections/collection_4_1.jpg" alt="item 1"
                                                class="h-full w-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                        <span class="flex w-1/3 flex-col space-y-[0.625rem]">
                                            <img src="img/collections/collection_4_2.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_4_3.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_4_4.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                    </a>

                                    <a href="collection.html"
                                        class="mt-4 block font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                        Metasmorf
                                    </a>

                                    <div
                                        class="mt-2 flex items-center justify-between text-sm font-medium tracking-tight">
                                        <div class="flex flex-wrap items-center">
                                            <a href="user.html" class="mr-2 shrink-0">
                                                <img src="img/avatars/owner_10.png" alt="owner"
                                                    class="h-5 w-5 rounded-full" />
                                            </a>
                                            <span class="mr-1 dark:text-jacarta-400">by</span>
                                            <a href="user.html" class="text-accent">
                                                <span>Lazy Panda</span>
                                            </a>
                                        </div>
                                        <span class="text-sm dark:text-jacarta-300">1.5K Items</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article>
                                <div
                                    class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                    <a href="collection.html" class="flex space-x-[0.625rem]">
                                        <span class="w-[74.5%]">
                                            <img src="img/collections/collection_5_1.jpg" alt="item 1"
                                                class="h-full w-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                        <span class="flex w-1/3 flex-col space-y-[0.625rem]">
                                            <img src="img/collections/collection_5_2.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_5_3.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                            <img src="img/collections/collection_5_4.jpg" alt="item 1"
                                                class="h-full rounded-[0.625rem] object-cover" loading="lazy" />
                                        </span>
                                    </a>

                                    <a href="collection.html"
                                        class="mt-4 block font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                        3Landers
                                    </a>

                                    <div
                                        class="mt-2 flex items-center justify-between text-sm font-medium tracking-tight">
                                        <div class="flex flex-wrap items-center">
                                            <a href="user.html" class="mr-2 shrink-0">
                                                <img src="img/avatars/owner_11.png" alt="owner"
                                                    class="h-5 w-5 rounded-full" />
                                            </a>
                                            <span class="mr-1 dark:text-jacarta-400">by</span>
                                            <a href="user.html" class="text-accent">
                                                <span>051_Hart</span>
                                            </a>
                                        </div>
                                        <span class="text-sm dark:text-jacarta-300">15K Items</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation -->
                <div
                    class="swiper-button-prev swiper-button-prev-2 group absolute top-1/2 -left-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume sm:-left-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="fill-jacarta-700 group-hover:fill-accent">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
                    </svg>
                </div>
                <div
                    class="swiper-button-next swiper-button-next-2 group absolute top-1/2 -right-4 z-10 -mt-6 flex h-12 w-12 cursor-pointer items-center justify-center rounded-full bg-white p-3 text-base shadow-white-volume sm:-right-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="fill-jacarta-700 group-hover:fill-accent">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- end featured collections -->

</main>

<!-- Wallet Modal -->
<div class="modal fade" id="walletModal" tabindex="-1" aria-labelledby="walletModalLabel" aria-hidden="true">
    <div class="modal-dialog max-w-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="walletModalLabel">Connect your wallet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="h-6 w-6 fill-jacarta-700 dark:fill-white">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg>
                </button>
            </div>

            <!-- Body -->
            <div class="modal-body p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 318.6 318.6" xml:space="preserve"
                    class="mb-4 inline-block h-8 w-8">
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
                    <path d="M211.8 247.4l-33.9-16.5 2.7 22.1-.3 9.3zm-105 0l31.5 14.9-.2-9.3 2.5-22.1z" fill="#d7c1b3"
                        stroke="#d7c1b3" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M138.8 193.5l-28.2-8.3 19.9-9.1zm40.9 0l8.3-17.4 20 9.1z" fill="#233447" stroke="#233447"
                        stroke-linecap="round" stroke-linejoin="round" />
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

<!-- Place Bid Modal -->
<div class="modal fade" id="placeBidModal" tabindex="-1" aria-labelledby="placeBidLabel" aria-hidden="true">
    <div class="modal-dialog max-w-2xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="placeBidLabel">Place a bid</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="h-6 w-6 fill-jacarta-700 dark:fill-white">
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
                    <div class="flex flex-1 items-center self-stretch border-r border-jacarta-100 bg-jacarta-50 px-2">
                        <span>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1920 1920"
                                xml:space="preserve" class="mr-1 h-5 w-5">
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

                    <input type="text" class="h-12 w-full flex-[3] border-0 focus:ring-inset focus:ring-accent"
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
                    <label for="terms" class="text-sm dark:text-jacarta-200">By checking this box, I agree to Xhibiter's
                        <a href="#" class="text-accent">Terms of Service</a></label>
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


@stop