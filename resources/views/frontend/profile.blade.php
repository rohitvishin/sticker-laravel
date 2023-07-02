@extends('frontend.layout.default')

@section('content')

<!--  Main Content -->
<main class="pt-[5.5rem] lg:pt-24">
    <!-- Banner -->
    <div class="relative">
        <img src="img/user/banner.jpg" alt="banner" class="h-[18.75rem] object-cover" />
    </div>
    <!-- end banner -->

    <!-- Profile -->
    <section class="relative bg-light-base pb-12 pt-28 dark:bg-jacarta-800">
        <!-- Avatar -->
        <div class="absolute left-1/2 top-0 z-10 flex -translate-x-1/2 -translate-y-1/2 items-center justify-center">
            <figure class="relative">
                <img src="img/user/user_avatar.gif" alt="collection avatar"
                    class="rounded-xl border-[5px] border-white dark:border-jacarta-800" />
                <div class="absolute -right-3 bottom-0 flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-green dark:border-jacarta-800"
                    data-tippy-content="Verified Collection">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        class="h-[.875rem] w-[.875rem] fill-white">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                    </svg>
                </div>
            </figure>
        </div>

        <div class="container">
            <div class="text-center">
                <h2 class="mb-2 font-display text-4xl font-medium text-jacarta-700 dark:text-white">Sad Ducks</h2>
                <div
                    class="mb-8 inline-flex items-center justify-center rounded-full border border-jacarta-100 bg-white py-1.5 px-4 dark:border-jacarta-800 dark:bg-jacarta-700">
                    <span data-tippy-content="ETH">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1920 1920"
                            xml:space="preserve" class="mr-1 h-4 w-4">
                            <path fill="#8A92B2" d="M959.8 80.7L420.1 976.3 959.8 731z"></path>
                            <path fill="#62688F" d="M959.8 731L420.1 976.3l539.7 319.1zm539.8 245.3L959.8 80.7V731z">
                            </path>
                            <path fill="#454A75" d="M959.8 1295.4l539.8-319.1L959.8 731z"></path>
                            <path fill="#8A92B2" d="M420.1 1078.7l539.7 760.6v-441.7z"></path>
                            <path fill="#62688F" d="M959.8 1397.6v441.7l540.1-760.6z"></path>
                        </svg>
                    </span>
                    <button
                        class="js-copy-clipboard max-w-[10rem] select-none overflow-hidden text-ellipsis whitespace-nowrap dark:text-jacarta-200"
                        data-tippy-content="Copy">
                        <span>0x7a86c0b064171007716bbd6af96676935799a63e</span>
                    </button>
                </div>

                <p class="mx-auto mb-2 max-w-xl text-lg dark:text-jacarta-300">
                    I make art with the simple goal of giving you something pleasing to look at for a few seconds.
                </p>
                <span class="text-jacarta-400">Joined December 2019</span>

                <div class="mt-6 flex items-center justify-center space-x-2.5">
                    <div
                        class="rounded-xl border border-jacarta-100 bg-white hover:bg-jacarta-100 dark:border-jacarta-800 dark:bg-jacarta-700 dark:hover:bg-jacarta-600">
                        <div class="js-likes relative inline-flex h-10 w-10 cursor-pointer items-center justify-center text-sm before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
                            role="button" data-tippy-content="Favorite">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-4 w-4 fill-jacarta-500 dark:fill-jacarta-200">
                                <path fill="none" d="M0 0H24V24H0z" />
                                <path
                                    d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="dropdown rounded-xl border border-jacarta-100 bg-white hover:bg-jacarta-100 dark:border-jacarta-800 dark:bg-jacarta-700 dark:hover:bg-jacarta-600">
                        <a href="#" class="dropdown-toggle inline-flex h-10 w-10 items-center justify-center text-sm"
                            role="button" id="collectionShare" data-bs-toggle="dropdown" aria-expanded="false"
                            data-tippy-content="Share">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="h-4 w-4 fill-jacarta-500 dark:fill-jacarta-200">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M13.576 17.271l-5.11-2.787a3.5 3.5 0 1 1 0-4.968l5.11-2.787a3.5 3.5 0 1 1 .958 1.755l-5.11 2.787a3.514 3.514 0 0 1 0 1.458l5.11 2.787a3.5 3.5 0 1 1-.958 1.755z" />
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                            aria-labelledby="collectionShare">
                            <a href="#"
                                class="flex w-full items-center rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook"
                                    class="mr-2 h-4 w-4 fill-jacarta-300 group-hover:fill-accent dark:group-hover:fill-white"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                    </path>
                                </svg>
                                <span class="mt-1 inline-block">Facebook</span>
                            </a>
                            <a href="#"
                                class="flex w-full items-center rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                                    class="mr-2 h-4 w-4 fill-jacarta-300 group-hover:fill-accent dark:group-hover:fill-white"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg>
                                <span class="mt-1 inline-block">Twitter</span>
                            </a>
                            <a href="#"
                                class="flex w-full items-center rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="discord"
                                    class="mr-2 h-4 w-4 fill-jacarta-300 group-hover:fill-accent dark:group-hover:fill-white"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path
                                        d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
                                    </path>
                                </svg>
                                <span class="mt-1 inline-block">Discord</span>
                            </a>
                            <a href="#"
                                class="flex w-full items-center rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="mr-2 h-4 w-4 fill-jacarta-300 group-hover:fill-accent dark:group-hover:fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm9.06 8.683L5.648 6.238 4.353 7.762l7.72 6.555 7.581-6.56-1.308-1.513-6.285 5.439z" />
                                </svg>
                                <span class="mt-1 inline-block">Email</span>
                            </a>
                            <a href="#"
                                class="flex w-full items-center rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="mr-2 h-4 w-4 fill-jacarta-300 group-hover:fill-accent dark:group-hover:fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.879 7.05 8.464 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.415 1.414zm-2.828 2.828l-1.415 1.414a7 7 0 0 1-9.9-9.9l1.415-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.415 1.414zm-.708-10.607l1.415 1.415-7.071 7.07-1.415-1.414 7.071-7.07z" />
                                </svg>
                                <span class="mt-1 inline-block">Copy</span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="dropdown rounded-xl border border-jacarta-100 bg-white hover:bg-jacarta-100 dark:border-jacarta-800 dark:bg-jacarta-700 dark:hover:bg-jacarta-600">
                        <a href="#" class="dropdown-toggle inline-flex h-10 w-10 items-center justify-center text-sm"
                            role="button" id="collectionActions" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="16" height="4" viewBox="0 0 16 4" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="fill-jacarta-500 dark:fill-jacarta-200">
                                <circle cx="2" cy="2" r="2" />
                                <circle cx="8" cy="2" r="2" />
                                <circle cx="14" cy="2" r="2" />
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end z-10 hidden min-w-[200px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                            aria-labelledby="collectionActions">
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
            </div>
        </div>
    </section>
    <!-- end profile -->

    <!-- Collection -->
    <section class="relative py-24 pt-20">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
            <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
            <!-- Tabs Nav -->
            <ul class="nav nav-tabs scrollbar-custom mb-12 flex items-center justify-start overflow-x-auto overflow-y-hidden border-b border-jacarta-100 pb-px dark:border-jacarta-800 md:justify-center"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                        id="my-profile-tab" data-bs-toggle="tab" data-bs-target="#my-profile" type="button" role="tab"
                        aria-controls="my-profile" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="mr-1 h-5 w-5 fill-current">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M5 5v3h14V5H5zM4 3h16a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm2 9h6a1 1 0 0 1 1 1v3h1v6h-4v-6h1v-2H5a1 1 0 0 1-1-1v-2h2v1zm11.732 1.732l1.768-1.768 1.768 1.768a2.5 2.5 0 1 1-3.536 0z" />
                        </svg>
                        <span class="font-display text-base font-medium">My Profile</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link  relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                        id="my-cart-tab" data-bs-toggle="tab" data-bs-target="#my-cart" type="button" role="tab"
                        aria-controls="my-cart" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="mr-1 h-5 w-5 fill-current">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v14h16V5H4zm4.5 9H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V6h2v2h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v2h-2v-2H8.5v-2z" />
                        </svg>
                        <span class="font-display text-base font-medium">My Cart</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link relative flex items-center whitespace-nowrap py-3 px-6 text-jacarta-400 hover:text-jacarta-700 dark:hover:text-white"
                        id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab"
                        aria-controls="activity" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="mr-1 h-5 w-5 fill-current">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M11.95 7.95l-1.414 1.414L8 6.828 8 20H6V6.828L3.465 9.364 2.05 7.95 7 3l4.95 4.95zm10 8.1L17 21l-4.95-4.95 1.414-1.414 2.537 2.536L16 4h2v13.172l2.536-2.536 1.414 1.414z" />
                        </svg>
                        <span class="font-display text-base font-medium">Wallet Activity</span>
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                <!-- My Profile Tab -->
                <div class="tab-pane fade show active" id="my-profile" role="tabpanel" aria-labelledby="my-profile">
                    <!-- Grid -->
                    <div class="grid grid-cols-1 gap-[1.875rem]">
                        <div class="container">
                            <div class="mx-auto max-w-[48.125rem] md:flex">
                                <!-- Form -->
                                <div class="mb-12 md:w-1/2 md:pr-8">
                                    <div class="mb-6">
                                        <label for="profile-username"
                                            class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">Username<span
                                                class="text-red">*</span></label>
                                        <input type="text" id="profile-username"
                                            class="w-full rounded-lg border-jacarta-800 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                            placeholder="Enter username" required />
                                    </div>
                                    <div class="mb-6">
                                        <label for="profile-bio"
                                            class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">Bio<span
                                                class="text-red">*</span></label>
                                        <textarea id="profile-bio"
                                            class="w-full rounded-lg border-jacarta-800 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                            required placeholder="Tell the world your story!"></textarea>
                                    </div>
                                    <div class="mb-6">
                                        <label for="profile-email"
                                            class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">Email
                                            address<span class="text-red">*</span></label>
                                        <input type="text" id="profile-email"
                                            class="w-full rounded-lg border-jacarta-800 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                            placeholder="Enter email" required />
                                    </div>
                                    <div class="mb-6">
                                        <label for="profile-twitter"
                                            class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">Links<span
                                                class="text-red">*</span></label>
                                        <div class="relative">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fab"
                                                data-icon="twitter"
                                                class="pointer-events-none absolute top-1/2 left-4 h-4 w-4 -translate-y-1/2 fill-jacarta-300 dark:fill-jacarta-400"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                </path>
                                            </svg>
                                            <input type="text" id="profile-twitter"
                                                class="w-full rounded-t-lg border-jacarta-800 py-3 pl-10 hover:ring-2 hover:ring-accent/10 focus:ring-inset focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                                placeholder="@twittername" />
                                        </div>
                                        <div class="relative">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fab"
                                                data-icon="instagram"
                                                class="pointer-events-none absolute top-1/2 left-4 h-4 w-4 -translate-y-1/2 fill-jacarta-300 dark:fill-jacarta-400"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                </path>
                                            </svg>
                                            <input type="text" id="profile-instagram"
                                                class="-mt-px w-full border-jacarta-800 py-3 pl-10 hover:ring-2 hover:ring-accent/10 focus:ring-inset focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                                placeholder="instagramname" />
                                        </div>
                                        <div class="relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24"
                                                class="pointer-events-none absolute top-1/2 left-4 h-4 w-4 -translate-y-1/2 fill-jacarta-300 dark:fill-jacarta-400">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-2.29-2.333A17.9 17.9 0 0 1 8.027 13H4.062a8.008 8.008 0 0 0 5.648 6.667zM10.03 13c.151 2.439.848 4.73 1.97 6.752A15.905 15.905 0 0 0 13.97 13h-3.94zm9.908 0h-3.965a17.9 17.9 0 0 1-1.683 6.667A8.008 8.008 0 0 0 19.938 13zM4.062 11h3.965A17.9 17.9 0 0 1 9.71 4.333 8.008 8.008 0 0 0 4.062 11zm5.969 0h3.938A15.905 15.905 0 0 0 12 4.248 15.905 15.905 0 0 0 10.03 11zm4.259-6.667A17.9 17.9 0 0 1 15.973 11h3.965a8.008 8.008 0 0 0-5.648-6.667z" />
                                            </svg>
                                            <input type="url" id="profile-website"
                                                class="-mt-px w-full rounded-b-lg border-jacarta-800 py-3 pl-10 hover:ring-2 hover:ring-accent/10 focus:ring-inset focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                                placeholder="yoursitename.com" />
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label
                                            class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">Wallet
                                            Address</label>
                                        <button
                                            class="js-copy-clipboard flex w-full select-none items-center rounded-lg border border-jacarta-800 bg-white py-3 px-4 hover:bg-jacarta-50 dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-jacarta-300"
                                            data-tippy-content="Copy">
                                            <span>0x7a9fe22691c811ea339401bbb2leb</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24"
                                                class="ml-auto mb-px h-4 w-4 fill-jacarta-500 dark:fill-jacarta-300">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M7 7V3a1 1 0 0 1 1-1h13a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-4v3.993c0 .556-.449 1.007-1.007 1.007H3.007A1.006 1.006 0 0 1 2 20.993l.003-12.986C2.003 7.451 2.452 7 3.01 7H7zm2 0h6.993C16.549 7 17 7.449 17 8.007V15h3V4H9v3zM4.003 9L4 20h11V9H4.003z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>

                                    <button
                                        class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">
                                        Update Profile
                                    </button>
                                </div>

                                <!-- Avatar -->
                                <div class="flex space-x-5 md:w-1/2 md:pl-8">
                                    <form class="shrink-0">
                                        <figure class="relative inline-block">
                                            <img src="img/user/user_avatar.gif" alt="collection avatar"
                                                class="rounded-xl border-[5px] border-white dark:border-jacarta-800" />
                                            <div
                                                class="group absolute -right-3 -bottom-2 h-8 w-8 overflow-hidden rounded-full border border-jacarta-800 bg-white text-center hover:border-transparent hover:bg-accent">
                                                <input type="file" accept="image/*"
                                                    class="absolute top-0 left-0 w-full cursor-pointer opacity-0" />
                                                <div class="flex h-full items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24"
                                                        class="h-4 w-4 fill-jacarta-400 group-hover:fill-white">
                                                        <path fill="none" d="M0 0h24v24H0z" />
                                                        <path
                                                            d="M15.728 9.686l-1.414-1.414L5 17.586V19h1.414l9.314-9.314zm1.414-1.414l1.414-1.414-1.414-1.414-1.414 1.414 1.414 1.414zM7.242 21H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 21z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </figure>
                                    </form>
                                    <div class="mt-4">
                                        <span
                                            class="mb-3 block font-display text-sm text-jacarta-700 dark:text-white">Profile
                                            Image</span>
                                        <p class="text-sm leading-normal dark:text-jacarta-300">
                                            We recommend an image of at least 300x300. Gifs work too. Max 5mb.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end grid -->
                </div>
                <!-- My Profile Tab -->


                <!-- My Cart Tab -->
                <div class="tab-pane fade " id="my-cart" role="tabpanel" aria-labelledby="my-cart-tab">
                    <!-- Filters -->
                    <div class="mb-8 flex flex-wrap items-center justify-between">


                        <!-- Sort -->
                        <div class="dropdown my-1 cursor-pointer">
                            <div class="dropdown-toggle inline-flex w-48 items-center justify-between rounded-lg border border-jacarta-100 bg-white py-2 px-3 text-sm dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white"
                                role="button" id="onSaleSort" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="font-display">Recently Added</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    class="h-4 w-4 fill-jacarta-500 dark:fill-white">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" />
                                </svg>
                            </div>

                            <div class="dropdown-menu z-10 hidden min-w-[220px] whitespace-nowrap rounded-xl bg-white py-4 px-2 text-left shadow-xl dark:bg-jacarta-800"
                                aria-labelledby="onSaleSort">
                                <span class="block px-5 py-2 font-display text-sm font-semibold text-jacarta-300">Sort
                                    By</span>
                                <button
                                    class="dropdown-item flex w-full items-center justify-between rounded-xl px-5 py-2 text-left font-display text-sm text-jacarta-700 transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                    Recently Added
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="mb-[3px] h-4 w-4 fill-accent">
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
                                            class="relative h-4 w-7 cursor-pointer appearance-none rounded-lg border-none bg-jacarta-100 after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-jacarta-400 after:transition-all checked:bg-accent checked:bg-none checked:after:left-3.5 checked:after:bg-white checked:hover:bg-accent focus:ring-transparent focus:ring-offset-0 checked:focus:bg-accent" />
                                    </span>
                                </div>
                                <div
                                    class="dropdown-item block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                    <span class="flex items-center justify-between">
                                        <span>NFSW Only</span>
                                        <input type="checkbox" value="checkbox" name="check"
                                            class="relative h-4 w-7 cursor-pointer appearance-none rounded-lg border-none bg-jacarta-100 after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-jacarta-400 after:transition-all checked:bg-accent checked:bg-none checked:after:left-3.5 checked:after:bg-white checked:hover:bg-accent focus:ring-transparent focus:ring-offset-0 checked:focus:bg-accent" />
                                    </span>
                                </div>
                                <div
                                    class="dropdown-item block w-full rounded-xl px-5 py-2 text-left font-display text-sm transition-colors hover:bg-jacarta-50 dark:text-white dark:hover:bg-jacarta-600">
                                    <span class="flex items-center justify-between">
                                        <span>Show Lazy Minted</span>
                                        <input type="checkbox" value="checkbox" name="check"
                                            class="relative h-4 w-7 cursor-pointer appearance-none rounded-lg border-none bg-jacarta-100 after:absolute after:top-0.5 after:left-0.5 after:h-3 after:w-3 after:rounded-full after:bg-jacarta-400 after:transition-all checked:bg-accent checked:bg-none checked:after:left-3.5 checked:after:bg-white checked:hover:bg-accent focus:ring-transparent focus:ring-offset-0 checked:focus:bg-accent" />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end filters -->

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
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_1.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                                        <img src="img/products/item_4.jpg" alt="item 4"
                                            class="w-full rounded-[0.625rem]" loading="lazy" />
                                    </a>
                                    <div
                                        class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                        <span
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_2.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                                        <img src="img/products/item_7.jpg" alt="item 7"
                                            class="w-full rounded-[0.625rem]" loading="lazy" />
                                    </a>
                                    <div
                                        class="absolute top-3 right-3 flex items-center space-x-1 rounded-md bg-white p-2 dark:bg-jacarta-700">
                                        <span
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_3.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_4.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_5.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_4.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_7.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                                            class="js-likes relative cursor-pointer before:absolute before:h-4 before:w-4 before:bg-[url('../img/heart-fill.svg')] before:bg-cover before:bg-center before:bg-no-repeat before:opacity-0"
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
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
                                                    data-tippy-content="Creator: Sussygirl" />
                                            </a>
                                            <a href="#">
                                                <img src="img/avatars/owner_5.png" alt="owner"
                                                    class="h-6 w-6 rounded-full border-2 border-white hover:border-accent dark:border-jacarta-800 dark:hover:border-accent"
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
                    <!-- end grid -->
                </div>
                <!-- My Cart tab -->

                <!-- Activity Tab -->
                <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                    <!-- Records / Filter -->
                    <div class="lg:flex">
                        <!-- Records -->
                        <div class="mb-10 shrink-0 basis-8/12 space-y-5 lg:mb-0 lg:pr-10">
                            <a href="item.html"
                                class="relative flex items-center rounded-2.5xl border border-jacarta-100 bg-white p-8 transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                <figure class="mr-5 self-start">
                                    <img src="img/avatars/avatar_2.jpg" alt="avatar 2" class="rounded-2lg"
                                        loading="lazy" />
                                </figure>

                                <div>
                                    <h3
                                        class="mb-1 font-display text-base font-semibold text-jacarta-700 dark:text-white">
                                        Lazyone Panda
                                    </h3>
                                    <span class="mb-3 block text-sm text-jacarta-500">sold for 1.515 ETH</span>
                                    <span class="block text-xs text-jacarta-300">30 minutes 45 seconds ago</span>
                                </div>

                                <div class="ml-auto rounded-full border border-jacarta-100 p-3 dark:border-jacarta-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="fill-jacarta-700 dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M6.5 2h11a1 1 0 0 1 .8.4L21 6v15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4zM19 8H5v12h14V8zm-.5-2L17 4H7L5.5 6h13zM9 10v2a3 3 0 0 0 6 0v-2h2v2a5 5 0 0 1-10 0v-2h2z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="item.html"
                                class="relative flex items-center rounded-2.5xl border border-jacarta-100 bg-white p-8 transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                <figure class="mr-5 self-start">
                                    <img src="img/products/item_21_sm.jpg" alt="item 2" class="rounded-2lg"
                                        loading="lazy" />
                                </figure>

                                <div>
                                    <h3
                                        class="mb-1 font-display text-base font-semibold text-jacarta-700 dark:text-white">
                                        NFT Funny Cat
                                    </h3>
                                    <span class="mb-3 block text-sm text-jacarta-500">listed by 051_Hart .08095
                                        ETH</span>
                                    <span class="block text-xs text-jacarta-300">40 minutes 36 seconds ago</span>
                                </div>

                                <div class="ml-auto rounded-full border border-jacarta-100 p-3 dark:border-jacarta-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="fill-jacarta-700 dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm.707 2.122L3.828 12l8.486 8.485 7.778-7.778-1.06-7.425-7.425-1.06zm2.12 6.364a2 2 0 1 1 2.83-2.829 2 2 0 0 1-2.83 2.829z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="item.html"
                                class="relative flex items-center rounded-2.5xl border border-jacarta-100 bg-white p-8 transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                <figure class="mr-5 self-start">
                                    <img src="img/products/item_22_sm.jpg" alt="item 3" class="rounded-2lg"
                                        loading="lazy" />
                                </figure>

                                <div>
                                    <h3
                                        class="mb-1 font-display text-base font-semibold text-jacarta-700 dark:text-white">
                                        Prince Ape Planet
                                    </h3>
                                    <span class="mb-3 block text-sm text-jacarta-500">tranferred from 027ab52</span>
                                    <span class="block text-xs text-jacarta-300">1 hour 15 minutes ago</span>
                                </div>

                                <div class="ml-auto rounded-full border border-jacarta-100 p-3 dark:border-jacarta-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="fill-jacarta-700 dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M16.05 12.05L21 17l-4.95 4.95-1.414-1.414 2.536-2.537L4 18v-2h13.172l-2.536-2.536 1.414-1.414zm-8.1-10l1.414 1.414L6.828 6 20 6v2H6.828l2.536 2.536L7.95 11.95 3 7l4.95-4.95z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="item.html"
                                class="relative flex items-center rounded-2.5xl border border-jacarta-100 bg-white p-8 transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                <figure class="mr-5 self-start">
                                    <img src="img/products/item_23_sm.jpg" alt="item 3" class="rounded-2lg"
                                        loading="lazy" />
                                </figure>

                                <div>
                                    <h3
                                        class="mb-1 font-display text-base font-semibold text-jacarta-700 dark:text-white">
                                        Origin Morish
                                    </h3>
                                    <span class="mb-3 block text-sm text-jacarta-500">bid cancelled by 0397fd</span>
                                    <span class="block text-xs text-jacarta-300">1 hour 55 minutes ago</span>
                                </div>

                                <div class="ml-auto rounded-full border border-jacarta-100 p-3 dark:border-jacarta-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="fill-jacarta-700 dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M14 20v2H2v-2h12zM14.586.686l7.778 7.778L20.95 9.88l-1.06-.354L17.413 12l5.657 5.657-1.414 1.414L16 13.414l-2.404 2.404.283 1.132-1.415 1.414-7.778-7.778 1.415-1.414 1.13.282 6.294-6.293-.353-1.06L14.586.686zm.707 3.536l-7.071 7.07 3.535 3.536 7.071-7.07-3.535-3.536z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="item.html"
                                class="relative flex items-center rounded-2.5xl border border-jacarta-100 bg-white p-8 transition-shadow hover:shadow-lg dark:border-jacarta-700 dark:bg-jacarta-700">
                                <figure class="mr-5 self-start">
                                    <img src="img/products/item_24_sm.jpg" alt="item 3" class="rounded-2lg"
                                        loading="lazy" />
                                </figure>

                                <div>
                                    <h3
                                        class="mb-1 font-display text-base font-semibold text-jacarta-700 dark:text-white">
                                        Portrait Gallery#029
                                    </h3>
                                    <span class="mb-3 block text-sm text-jacarta-500">liked by Trina_more</span>
                                    <span class="block text-xs text-jacarta-300">2 hours 24 minutes ago</span>
                                </div>

                                <div class="ml-auto rounded-full border border-jacarta-100 p-3 dark:border-jacarta-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="fill-jacarta-700 dark:fill-white">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <!-- Filters -->
                        <aside class="basis-4/12 lg:pl-5">
                            <form action="https://deothemes.com/envato/xhibiter/html/search"
                                class="relative mb-12 block">
                                <input type="search"
                                    class="w-full rounded-2xl border border-jacarta-100 py-[0.6875rem] px-4 pl-10 text-jacarta-700 placeholder-jacarta-500 focus:ring-accent dark:border-transparent dark:bg-white/[.15] dark:text-white dark:placeholder-white"
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

                            <h3 class="mb-4 font-display font-semibold text-jacarta-500 dark:text-white">Filters</h3>
                            <div class="flex flex-wrap">
                                <button
                                    class="group mr-2.5 mb-2.5 inline-flex items-center rounded-xl border border-jacarta-100 bg-white px-4 py-3 hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M10.9 2.1l9.899 1.415 1.414 9.9-9.192 9.192a1 1 0 0 1-1.414 0l-9.9-9.9a1 1 0 0 1 0-1.414L10.9 2.1zm.707 2.122L3.828 12l8.486 8.485 7.778-7.778-1.06-7.425-7.425-1.06zm2.12 6.364a2 2 0 1 1 2.83-2.829 2 2 0 0 1-2.83 2.829z" />
                                    </svg>
                                    <span class="text-2xs font-medium">Listing</span>
                                </button>
                                <button
                                    class="group mr-2.5 mb-2.5 inline-flex items-center rounded-xl border border-jacarta-100 bg-white px-4 py-3 hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M14 20v2H2v-2h12zM14.586.686l7.778 7.778L20.95 9.88l-1.06-.354L17.413 12l5.657 5.657-1.414 1.414L16 13.414l-2.404 2.404.283 1.132-1.415 1.414-7.778-7.778 1.415-1.414 1.13.282 6.294-6.293-.353-1.06L14.586.686zm.707 3.536l-7.071 7.07 3.535 3.536 7.071-7.07-3.535-3.536z" />
                                    </svg>
                                    <span class="text-2xs font-medium">Bids</span>
                                </button>
                                <button
                                    class="group mr-2.5 mb-2.5 inline-flex items-center rounded-xl border border-jacarta-100 bg-white px-4 py-3 hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M16.05 12.05L21 17l-4.95 4.95-1.414-1.414 2.536-2.537L4 18v-2h13.172l-2.536-2.536 1.414-1.414zm-8.1-10l1.414 1.414L6.828 6 20 6v2H6.828l2.536 2.536L7.95 11.95 3 7l4.95-4.95z" />
                                    </svg>
                                    <span class="text-2xs font-medium">Transfer</span>
                                </button>
                                <button
                                    class="group mr-2.5 mb-2.5 inline-flex items-center rounded-xl border border-jacarta-100 bg-white px-4 py-3 hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white">
                                        <path fill="none" d="M0 0H24V24H0z" />
                                        <path
                                            d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" />
                                    </svg>
                                    <span class="text-2xs font-medium">Likes</span>
                                </button>
                                <button
                                    class="group mr-2.5 mb-2.5 inline-flex items-center rounded-xl border border-jacarta-100 bg-white px-4 py-3 hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:hover:border-transparent dark:hover:bg-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                        class="mr-2 h-4 w-4 group-hover:fill-white dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M6.5 2h11a1 1 0 0 1 .8.4L21 6v15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4zM19 8H5v12h14V8zm-.5-2L17 4H7L5.5 6h13zM9 10v2a3 3 0 0 0 6 0v-2h2v2a5 5 0 0 1-10 0v-2h2z" />
                                    </svg>
                                    <span class="text-2xs font-medium">Purchases</span>
                                </button>
                            </div>
                        </aside>
                    </div>
                </div>
                <!-- end activity tab -->
            </div>
        </div>
    </section>
    <!-- end collection -->
</main>
<!--  Main Content -->

@stop