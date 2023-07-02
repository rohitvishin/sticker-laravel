<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from deothemes.com/envato/xhibiter/html/item.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2023 14:45:51 GMT -->

<head>
    <title>Xhibiter | NFT Marketplace HTML Template</title>

    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />

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
        <!-- Item -->
        <section class="relative pt-12 pb-24 lg:py-24">
            <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                <img src={{ asset('img/gradient_light.jpg') }} alt="gradient" class="h-full w-full" />
            </picture>
            <div class="container">
                <!-- Item -->
                <div class="md:flex md:flex-wrap">
                    <!-- Image -->
                    <figure class="mb-8 md:w-2/5 md:flex-shrink-0 md:flex-grow-0 md:basis-auto lg:w-1/2">
                        <img src={{ asset('img/products/item_single_large.jpg') }} alt="item"
                            class="rounded-2.5xl" />
                        <!-- end modal -->
                    </figure>

                    <!-- Details -->
                    <div class="md:w-3/5 md:basis-auto md:pl-8 lg:w-1/2 lg:pl-[3.75rem]">
                        <!-- Collection / Likes / Actions -->
                        <div class="mb-3 flex">
                            <!-- Collection -->
                            <div class="flex items-center">
                                <h1 class="mb-4 font-display text-4xl font-semibold text-jacarta-700 dark:text-white">
                                    TSARÉVNA
                                </h1>
                            </div>

                            <!-- Likes / Actions -->
                            <div class="ml-auto flex space-x-2">
                                <div
                                    class="flex items-center space-x-1 rounded-xl border border-jacarta-100 bg-white py-2 px-4 dark:border-jacarta-600 dark:bg-jacarta-700">
                                    <span
                                        class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                                        data-tippy-content="Favorite">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24"
                                            class="h-4 w-4 fill-jacarta-500 hover:fill-red dark:fill-jacarta-200 dark:hover:fill-red">
                                            <path fill="none" d="M0 0H24V24H0z"></path>
                                            <path
                                                d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-sm dark:text-jacarta-200">188</span>
                                </div>
                            </div>
                        </div>



                        <div class="mb-8 flex items-center space-x-4 whitespace-nowrap">
                            <span class="text-jacarta-700 dark:text-white">Rs. 199 <del>Rs.
                                    250</del> (20% OFF)</span>
                        </div>

                        <p class="mb-10 dark:text-jacarta-300">
                            Neque aut veniam consectetur magnam libero, natus eius numquam reprehenderit hic at,
                            excepturi
                            repudiandae magni optio odio doloribus? Facilisi lobortisal morbi fringilla urna amet sed
                            ipsum.
                        </p>
                        <!-- Bid -->
                        <div
                            class="rounded-2lg border border-jacarta-100 bg-white p-8 dark:border-jacarta-600 dark:bg-jacarta-700">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#placeBidModal"
                                class="inline-block w-full rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">Add
                                To Cart</a>
                        </div>
                        <div class="tab-pane fade show active" id="properties" role="tabpanel"
                            aria-labelledby="properties-tab" style="margin-top: 10px">
                            <div
                                class="rounded-t-2lg rounded-b-2lg rounded-tl-none border border-jacarta-100 bg-white p-6 dark:border-jacarta-600 dark:bg-jacarta-700 md:p-10">
                                <div class="grid grid-cols-2 gap-5 sm:grid-cols-2 md:grid-cols-6">
                                    <a href="collection.html"
                                        class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                        <span class="text-sm uppercase text-accent">ACCESSORY</span>
                                        <span class="text-base text-jacarta-700 dark:text-white">Metal
                                            headband</span>
                                        <span class="text-sm text-jacarta-400">3% have this trait</span>
                                    </a>
                                    <a href="collection.html"
                                        class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                        <span class="text-sm uppercase text-accent">SKIN</span>
                                        <span class="text-base text-jacarta-700 dark:text-white">Dark Brown</span>
                                        <span class="text-sm text-jacarta-400">8% have this trait</span>
                                    </a>
                                    <a href="collection.html"
                                        class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                        <span class="text-sm uppercase text-accent">EYES</span>
                                        <span class="text-base text-jacarta-700 dark:text-white">Cyborg</span>
                                        <span class="text-sm text-jacarta-400">2% have this trait</span>
                                    </a>
                                    <a href="collection.html"
                                        class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                        <span class="text-sm uppercase text-accent">EYES</span>
                                        <span class="text-base text-jacarta-700 dark:text-white">Cyborg</span>
                                        <span class="text-sm text-jacarta-400">2% have this trait</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end bid -->
                    </div>
                    <!-- end details -->
                </div>

                <!-- Tabs -->
                <div class="scrollbar-custom mt-14 overflow-x-auto rounded-lg">
                    <div class="min-w-fit">
                        <!-- Tabs Nav -->
                        <ul class="nav nav-tabs flex items-center" role="tablist">
                            <!-- Offers -->
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                                    id="offers-tab" data-bs-toggle="tab" data-bs-target="#offers" type="button"
                                    role="tab" aria-controls="offers" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="mr-1 h-5 w-5 fill-current">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M8 4h13v2H8V4zm-5-.5h3v3H3v-3zm0 7h3v3H3v-3zm0 7h3v3H3v-3zM8 11h13v2H8v-2zm0 7h13v2H8v-2z" />
                                    </svg>
                                    <span class="font-display text-base font-medium">QUALITY</span>
                                </button>
                            </li>


                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <!-- Properties -->
                            <div class="tab-pane fade show active" id="properties" role="tabpanel"
                                aria-labelledby="properties-tab">
                                <div
                                    class="rounded-t-2lg rounded-b-2lg rounded-tl-none border border-jacarta-100 bg-white p-6 dark:border-jacarta-600 dark:bg-jacarta-700 md:p-10">
                                    <div class="grid grid-cols-2 gap-5 sm:grid-cols-3 md:grid-cols-4">
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">ACCESSORY</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">Metal
                                                headband</span>
                                            <span class="text-sm text-jacarta-400">3% have this trait</span>
                                        </a>
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">SKIN</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">Dark Brown</span>
                                            <span class="text-sm text-jacarta-400">8% have this trait</span>
                                        </a>
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">EYES</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">Cyborg</span>
                                            <span class="text-sm text-jacarta-400">2% have this trait</span>
                                        </a>
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">CLOTH</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">Adidas</span>
                                            <span class="text-sm text-jacarta-400">7% have this trait</span>
                                        </a>
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">HAIR</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">White Ash</span>
                                            <span class="text-sm text-jacarta-400">7% have this trait</span>
                                        </a>
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">CHARACTER</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">TSAREVNA</span>
                                            <span class="text-sm text-jacarta-400">1% have this trait</span>
                                        </a>
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">BACKGROUND</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">CyberPunk</span>
                                            <span class="text-sm text-jacarta-400">9% have this trait</span>
                                        </a>
                                        <a href="collection.html"
                                            class="flex flex-col space-y-2 rounded-2lg border border-jacarta-100 bg-light-base p-5 text-center transition-shadow hover:shadow-lg dark:border-jacarta-600 dark:bg-jacarta-800">
                                            <span class="text-sm uppercase text-accent">MOUTH</span>
                                            <span class="text-base text-jacarta-700 dark:text-white">Flower</span>
                                            <span class="text-sm text-jacarta-400">4% have this trait</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
                <!-- end tabs -->
            </div>
        </section>
        <!-- end item -->
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
                    <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 318.6 318.6"
                        xml:space="preserve" class="mb-4 inline-block h-8 w-8">
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
    <div class="modal fade" id="buyNowModal" tabindex="-1" aria-labelledby="buyNowModalLabel" aria-hidden="true">
        <div class="modal-dialog max-w-2xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyNowModalLabel">Complete checkout</h5>
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
                        <span class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">Item</span>
                        <span
                            class="font-display text-sm font-semibold text-jacarta-700 dark:text-white">Subtotal</span>
                    </div>

                    <div
                        class="relative flex items-center border-t border-b border-jacarta-100 py-4 dark:border-jacarta-600">
                        <figure class="mr-5 self-start">
                            <img src="img/avatars/avatar_2.jpg" alt="avatar 2" class="rounded-2lg" loading="lazy" />
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
                                        y="0" viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
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
                                        y="0" viewBox="0 0 1920 1920" xml:space="preserve" class="h-4 w-4">
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
                        <div
                            class="flex flex-1 items-center self-stretch border-r border-jacarta-100 bg-jacarta-50 px-2">
                            <span>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                    viewBox="0 0 1920 1920" xml:space="preserve" class="mr-1 h-5 w-5">
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
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src={{ asset('js/countdown.bundle.js') }}></script>
    <script src={{ asset('js/app.bundle.js') }}></script>
    <script src={{ asset('js/charts.bundle.js') }}></script>
</body>

<!-- Mirrored from deothemes.com/envato/xhibiter/html/item.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2023 14:45:52 GMT -->

</html>
