@extends('frontend.layout.default')

@section('content')

<!--  Main Content -->
<main class="mt-24">
    <!-- Collections -->
    <section class="relative pt-16 pb-24">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
            <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="px-6 xl:px-24">

            <!-- Filters / Sorting -->
            <div class="flex flex-wrap justify-between">
                <div class="flex space-x-2 mb-2">
                    <button
                        class="js-collections-toggle-filters flex h-10 group flex-shrink-0 items-center justify-center space-x-1 rounded-lg border border-jacarta-100 bg-white py-1.5 px-4 font-display text-sm font-semibold text-jacarta-500 hover:bg-accent hover:border-accent dark:hover:bg-accent dark:border-jacarta-600 dark:bg-jacarta-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="h-4 w-4 fill-jacarta-700 dark:fill-white group-hover:fill-white">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path
                                d="M21 4v2h-1l-5 7.5V22H9v-8.5L4 6H3V4h18zM6.404 6L11 12.894V20h2v-7.106L17.596 6H6.404z">
                            </path>
                        </svg>
                        <span class="mt-0.5 dark:text-white group-hover:text-white">Filters</span>
                    </button>

                    <button
                        class="lex h-10 group flex-shrink-0 items-center justify-center space-x-1 rounded-lg border border-jacarta-100 bg-white py-1.5 px-4 font-medium text-2xs hover:bg-accent hover:border-accent dark:hover:bg-accent dark:border-jacarta-600 dark:bg-jacarta-700">
                        <span class="mt-0.5 dark:text-white group-hover:text-white">Clear All</span>
                    </button>
                </div>

                <!-- View / Sorting -->
                <div class="flex flex-wrap items-center space-x-3">
                    <ul class="nav nav-tabs flex items-center justify-center border border-jacarta-100 dark:border-jacarta-600 rounded-lg overflow-hidden"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link nav-link--style-5 active group relative flex items-center justify-center whitespace-nowrap h-[2.875rem] w-12 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                                id="view-grid-tab" data-bs-toggle="tab" data-bs-target="#view-grid" type="button"
                                role="tab" aria-controls="view-grid" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-5 w-5 fill-current">
                                    <path
                                        d="M3 3H11V11H3V3ZM3 13H11V21H3V13ZM13 3H21V11H13V3ZM13 13H21V21H13V13ZM15 5V9H19V5H15ZM15 15V19H19V15H15ZM5 5V9H9V5H5ZM5 15V19H9V15H5Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link nav-link--style-5 relative flex items-center justify-center whitespace-nowrap h-[2.875rem] w-12 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                                id="view-list-tab" data-bs-toggle="tab" data-bs-target="#view-list" type="button"
                                role="tab" aria-controls="view-list" aria-selected="false" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-5 w-5 fill-current">
                                    <path
                                        d="M11 4H21V6H11V4ZM11 8H17V10H11V8ZM11 14H21V16H11V14ZM11 18H17V20H11V18ZM3 4H9V10H3V4ZM5 6V8H7V6H5ZM3 14H9V20H3V14ZM5 16V18H7V16H5Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                    <div class="dropdown relative cursor-pointer">
                        <div class="dropdown-toggle inline-flex w-48 items-center justify-between rounded-lg border border-jacarta-100 bg-white h-12 py-3 px-4 dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white"
                            role="button" id="categoriesSort" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="">Sort by</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-5 w-5 fill-jacarta-500 dark:fill-white">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                            </svg>
                        </div>

                        <div class="dropdown-menu z-10 hidden w-full whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                            aria-labelledby="categoriesSort">
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm text-jacarta-700 transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Recently Listed
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-4 w-4 fill-accent">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                                </svg>
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Recently Created
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Recently Sold
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Recently Received
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Ending Soon
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Price Low to High
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Price High to Low
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Highest Last Sale
                            </button>
                            <button
                                class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                Oldest
                            </button>
                        </div>

                    </div>
                </div>
            </div><!-- end filters / sorting -->

            <div class="lg:flex mt-6">

                <!-- Sidebar -->
                <div
                    class="lg:w-1/5 mb-10 js-collections-sidebar lg:h-[calc(100vh_-_232px)] lg:overflow-auto lg:sticky lg:top-32 lg:mr-12 pr-4 scrollbar-custom divide-y divide-jacarta-100 dark:divide-jacarta-600">

                    <!-- Collections filter -->
                    <!-- <div>
                        <h2 id="filters-collections-heading">
                            <button
                                class="accordion-button relative flex w-full items-center justify-between py-3 text-left font-display text-xl text-jacarta-700 dark:text-white"
                                type="button" data-bs-toggle="collapse" data-bs-target="#filters-collections"
                                aria-expanded="true" aria-controls="filters-collections">
                                <span>Collections</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="accordion-arrow h-5 w-5 shrink-0 fill-jacarta-700 transition-transform dark:fill-white">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z"></path>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="h-4 w-4 fill-jacarta-500 dark:fill-white">
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
                                            <img src="img/nft-aggregator/item-14.jpg" alt="avatar 1" class="rounded-2lg"
                                                loading="lazy">
                                            <div class="absolute -right-2 -bottom-1 flex h-[1.125rem] w-[1.125rem] items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                data-tippy-content="Verified Collection">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                    height="24" class="h-[.875rem] w-[.875rem] fill-white">
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
                                        <span class="ml-auto text-sm dark:text-jacarta-300">30,643</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center cursor-pointer w-full">
                                        <input type="checkbox" id="terms"
                                            class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                        <figure class="relative mr-2 w-8 shrink-0 lg:mr-4 lg:w-10">
                                            <img src="img/nft-aggregator/item-2.jpg" alt="avatar 1" class="rounded-2lg"
                                                loading="lazy">
                                        </figure>
                                        <span
                                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                            Azuki #4017
                                        </span>
                                        <span class="ml-auto text-sm dark:text-jacarta-300">10,000</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center cursor-pointer w-full">
                                        <input type="checkbox" id="terms"
                                            class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                        <figure class="relative mr-2 w-8 shrink-0 lg:mr-4 lg:w-10">
                                            <img src="img/nft-aggregator/item-7.jpg" alt="avatar 1" class="rounded-2lg"
                                                loading="lazy">
                                        </figure>
                                        <span
                                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                            Crypto bull #6195
                                        </span>
                                        <span class="ml-auto text-sm dark:text-jacarta-300">8,899</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center cursor-pointer w-full">
                                        <input type="checkbox" id="terms"
                                            class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                        <figure class="relative mr-2 w-8 shrink-0 lg:mr-4 lg:w-10">
                                            <img src="img/nft-aggregator/item-1.jpg" alt="avatar 1" class="rounded-2lg"
                                                loading="lazy">
                                        </figure>
                                        <span
                                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                            Monkeyme#155
                                        </span>
                                        <span class="ml-auto text-sm dark:text-jacarta-300">25,671</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <!-- Categories filter -->
                    <div class="mt-4 pt-4">
                        <h2 id="filters-chains-heading">
                            <button
                                class="accordion-button collapsed relative flex w-full items-center justify-between py-3 text-left font-display text-xl text-jacarta-700 dark:text-white"
                                type="button" data-bs-toggle="collapse" data-bs-target="#filters-chains"
                                aria-expanded="false" aria-controls="filters-chains">
                                <span>Categories</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="accordion-arrow h-5 w-5 shrink-0 fill-jacarta-700 transition-transform dark:fill-white">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="filters-chains" class="mt-3 collapse" aria-labelledby="filters-chains-heading">
                            <ul class="space-y-6 mb-8">
                                <li>
                                    <label class="flex items-center cursor-pointer w-full">
                                        <input type="checkbox" id="terms"
                                            class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                        <figure class="relative mr-2 w-8 shrink-0">
                                            <img src="img/chains/eth-chain.png" alt="Ethereum" class="rounded-2lg"
                                                loading="lazy">
                                        </figure>
                                        <span
                                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                            Ethereum
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center cursor-pointer w-full">
                                        <input type="checkbox" id="terms"
                                            class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                        <figure class="relative mr-2 w-8 shrink-0">
                                            <img src="img/chains/polygon-chain.png" alt="Polygon" class="rounded-2lg"
                                                loading="lazy">
                                        </figure>
                                        <span
                                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                            Polygon
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center cursor-pointer w-full">
                                        <input type="checkbox" id="terms"
                                            class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                        <figure class="relative mr-2 w-8 shrink-0">
                                            <img src="img/chains/tezos-chain.png" alt="Tezos" class="rounded-2lg"
                                                loading="lazy">
                                        </figure>
                                        <span
                                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                            Tezos
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center cursor-pointer w-full">
                                        <input type="checkbox" id="terms"
                                            class="h-5 w-5 mr-3 rounded border-jacarta-200 text-accent checked:bg-accent focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600">
                                        <figure class="relative mr-2 w-8 shrink-0">
                                            <img src="img/chains/solana-chain.png" alt="Solana" class="rounded-2lg"
                                                loading="lazy">
                                        </figure>
                                        <span
                                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                            Solana
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div> <!-- end sidebar -->

                <!-- Content -->
                <div class="lg:w-4/5 js-collections-content">
                    <div class="mb-8 pb-px">
                        <h1 class="pt-3 mb-2 font-display text-2xl font-medium text-jacarta-700 dark:text-white">Explore
                            Collections</h1>
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
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_1.jpg" alt="item 1"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            Developer Stickers Collection
                                            <div class="flex h-[1.125rem] w-[1.125rem] ml-1 mb-px items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                data-tippy-content="Verified Collection">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                    height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">1.55 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">1.3 ETH</span></div>
                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_2.jpg" alt="item 2"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            Asthetic Sticker collection
                                            <div class="flex h-[1.125rem] w-[1.125rem] ml-1 mb-px items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                data-tippy-content="Verified Collection">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                    height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">2.3 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">0.5 ETH</span></div>
                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_3.jpg" alt="item 3"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            VR Space_287
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">5.6 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">3.4 ETH</span></div>
                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_4.jpg" alt="item 4"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            Metasmorf
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">1.4 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">0.7 ETH</span></div>
                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_5.jpg" alt="item 5"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            3Landers
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">8.2 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">1.3 ETH</span></div>

                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_6.jpg" alt="item 6"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            SlimHoods
                                            <div class="flex h-[1.125rem] w-[1.125rem] ml-1 mb-px items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                data-tippy-content="Verified Collection">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                    height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">3.2 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">2.2 ETH</span></div>

                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_7.jpg" alt="item 7"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            The Overseers
                                            <div class="flex h-[1.125rem] w-[1.125rem] ml-1 mb-px items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                data-tippy-content="Verified Collection">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                    height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">18.1 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">5.7 ETH</span></div>

                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_8.jpg" alt="item 8"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            Dope Shibas
                                            <div class="flex h-[1.125rem] w-[1.125rem] ml-1 mb-px items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                data-tippy-content="Verified Collection">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                    height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">12.6 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">8.3 ETH</span></div>

                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_9.jpg" alt="item 9"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            #1 Crush Editions
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">0.58 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">0.04 ETH</span></div>

                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_10.jpg" alt="item 10"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            Camp Cosmos
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">0.3 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">0.1 ETH</span></div>

                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_11.jpg" alt="item 11"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            Land Of Whimsy
                                            <div class="flex h-[1.125rem] w-[1.125rem] ml-1 mb-px items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-600"
                                                data-tippy-content="Verified Collection">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                    height="24" class="h-[.875rem] w-[.875rem] fill-white">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">7.4 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">2.4 ETH</span></div>

                                    </div>
                                </article>
                                <article>
                                    <div
                                        class="rounded-2.5xl border border-jacarta-100 bg-white p-[1.1875rem] transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                        <a href="collection.html">
                                            <img src="img/collections/collection_square_12.jpg" alt="item 12"
                                                class="w-full rounded-[0.625rem]" loading="lazy" />
                                        </a>

                                        <a href="collection.html"
                                            class="mt-5 mb-2 flex items-center font-display text-base text-jacarta-700 hover:text-accent dark:text-white dark:hover:text-accent">
                                            Audio Galleries
                                        </a>
                                        <div class="font-medium text-2xs text-jacarta-700 dark:text-white mb-2">3.3 ETH
                                        </div>
                                        <div class="font-medium text-2xs text-jacarta-500 dark:text-jacarta-300">Last
                                            Sale: <span class="text-jacarta-700 dark:text-white">1.6 ETH</span></div>

                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- List -->
                        <div class="tab-pane fade" id="view-list" role="tabpanel" aria-labelledby="view-list-tab">
                            <div class="scrollbar-custom overflow-x-auto">
                                <div role="table"
                                    class="w-full min-w-[736px] border border-jacarta-100 bg-white text-sm dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white rounded-2lg">
                                    <div class="flex rounded-t-2lg bg-jacarta-50 dark:bg-jacarta-600" role="row">
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">1</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_1.jpg" alt="avatar 1" class="rounded-2lg"
                                                    loading="lazy">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.12</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">2</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_2.jpg" alt="avatar 2" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Cryptopank
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.017</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">3</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_5.jpg" alt="avatar 5" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Bored Bunny
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.39</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">4</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_9.jpg" alt="avatar 9" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                NFT stars
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.002</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">5</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_13.jpg" alt="avatar 13" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Arcahorizons
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.05</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">6</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_6.jpg" alt="avatar 6" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Wow Frens
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.047</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">7</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_10.jpg" alt="avatar 10" class="rounded-2lg"
                                                    loading="lazy">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.095</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">8</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_17.jpg" alt="avatar 17" class="rounded-2lg"
                                                    loading="lazy">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">13.34</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">9</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_18.jpg" alt="avatar 18" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                PankySkal
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.58</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">10</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_19.jpg" alt="avatar 19" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                The Overseers
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">63.5</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">11</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_20.jpg" alt="avatar 20" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Dope Shibas
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">3.14</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">12</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_21.jpg" alt="avatar 21" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                #1 Crush Editions
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">4.794</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">13</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_22.jpg" alt="avatar 22" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Camp Cosmos
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">13.95</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">14</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_23.jpg" alt="avatar 23" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Land Of Whimsy
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">2.84</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">15</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_24.jpg" alt="avatar 24" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                Audio Galleries
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.02</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">16</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_25.jpg" alt="avatar 25" class="rounded-2lg"
                                                    loading="lazy">
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
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.047</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">17</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_26.jpg" alt="avatar 26" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                VR Space_287
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">0.015</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
                                    <a href="user.html" class="flex transition-shadow hover:shadow-lg" role="row">
                                        <div class="flex md:w-2/5 w-1/4 items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="mr-3 lg:mr-5">18</span>
                                            <figure class="relative mr-2 w-8 shrink-0 self-start lg:mr-5 lg:w-12">
                                                <img src="img/avatars/avatar_27.jpg" alt="avatar 27" class="rounded-2lg"
                                                    loading="lazy">
                                            </figure>
                                            <span
                                                class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">
                                                SlimHoods
                                            </span>
                                        </div>
                                        <div class="flex justify-end items-center md:w-[12%] w-[15%] whitespace-nowrap border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium tracking-tight">1.739</span>
                                        </div>
                                        <div class="flex justify-end md:w-[12%] w-[15%] items-center border-t border-jacarta-100 py-4 px-4 dark:border-jacarta-600"
                                            role="cell">
                                            <span class="-ml-1" data-tippy-content="ETH">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-4 w-4">
                                                    <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                                                    <path fill="#62688F"
                                                        d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                                                    </path>
                                                    <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z">
                                                    </path>
                                                    <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                                                    <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
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
<!--  Main Content -->

@stop