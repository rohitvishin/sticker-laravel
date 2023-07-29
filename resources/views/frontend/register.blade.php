@extends('frontend.layout.default')

@section('content')

<!--  Main Content -->
<main class="pt-[5.5rem] lg:pt-24">
    <!-- Contact -->
    <section class="relative py-24 dark:bg-jacarta-800">
        <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
            <img src="img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
        </picture>
        <div class="container">
            <div class="lg:flex">
                <!-- Contact Form -->
                <div class="mb-12 lg:mb-0 lg:w-2/3 lg:pr-12">
                    <h2 class="mb-4 font-display text-xl text-jacarta-700 dark:text-white">Login Now!!!</h2>
                    <p class="mb-16 text-lg leading-normal dark:text-jacarta-300">
                        Have a question? Need help? Don't hesitate, drop us a line
                    </p>
                    <form id="contact-form" method="post">
                        <div class="flex space-x-7">
                            <div class="mb-6 w-1/2">
                                <label for="name"
                                    class="mb-1 block font-display text-sm text-jacarta-800 dark:text-white">FullName<span
                                        class="text-red">*</span></label>
                                <input name="name"
                                    class="contact-form-input w-full rounded-lg border-jacarta-800 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                    id="name" type="text" required />
                            </div>

                            <div class="mb-6 w-1/2">
                                <label for="email"
                                    class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">Mobile<span
                                        class="text-red">*</span></label>
                                <input name="email"
                                    class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                    id="email" type="email" required />
                            </div>
                        </div>
                        <div class="flex space-x-7">
                            <div class="mb-6 w-1/2">
                                <label for="name"
                                    class="mb-1 block font-display text-sm text-jacarta-800 dark:text-white">Email<span
                                        class="text-red">*</span></label>
                                <input name="name"
                                    class="contact-form-input w-full rounded-lg border-jacarta-800 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                    id="name" type="text" required />
                            </div>

                            <div class="mb-6 w-1/2">
                                <label for="email"
                                    class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">Password<span
                                        class="text-red">*</span></label>
                                <input name="email"
                                    class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-accent/10 focus:ring-accent dark:border-jacarta-800 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                    id="email" type="email" required />
                            </div>
                        </div>


                        <button type="submit"
                            class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
                            id="contact-form-submit">
                            Submit
                        </button>

                        <div id="contact-form-notice"
                            class="relative mt-4 hidden rounded-lg border border-transparent p-4"></div>
                    </form>
                </div>

                <!-- Info -->
                <div class="lg:w-1/3 lg:pl-5">
                    <h2 class="mb-7 font-display text-xl text-jacarta-800 dark:text-white">Welcome to Kingdom!</h2>
                    <p class="mb-6 text-lg leading-normal dark:text-jacarta-300">
                        Don't hesitaste, drop us a line Collaboratively administrate channels whereas virtual.
                        Objectively seize
                        scalable metrics whereas proactive e-services.
                    </p>

                    <div
                        class="rounded-2.5xl border border-jacarta-100 bg-white p-2 dark:border-jacarta-800 dark:bg-jacarta-700">
                        <div class="flex items-center space-x-5">
                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-jacarta-100 bg-light-base dark:border-jacarta-800 dark:bg-jacarta-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 193">
                                    <path fill="#4285F4"
                                        d="M58.182 192.05V93.14L27.507 65.077L0 49.504v125.091c0 9.658 7.825 17.455 17.455 17.455h40.727Z" />
                                    <path fill="#34A853"
                                        d="M197.818 192.05h40.727c9.659 0 17.455-7.826 17.455-17.455V49.505l-31.156 17.837l-27.026 25.798v98.91Z" />
                                    <path fill="#EA4335"
                                        d="m58.182 93.14l-4.174-38.647l4.174-36.989L128 69.868l69.818-52.364l4.669 34.992l-4.669 40.644L128 145.504z" />
                                    <path fill="#FBBC04"
                                        d="M197.818 17.504V93.14L256 49.504V26.231c0-21.585-24.64-33.89-41.89-20.945l-16.292 12.218Z" />
                                    <path fill="#C5221F"
                                        d="m0 49.504l26.759 20.07L58.182 93.14V17.504L41.89 5.286C24.61-7.66 0 4.646 0 26.23v23.273Z" />
                                </svg>

                            </span>

                            <div>
                                <span class="block font-display text-base text-jacarta-700 dark:text-white">Gmail
                                    Login</span>
                                <!-- <a href="tel:123-123-456" class="text-sm hover:text-accent dark:text-jacarta-300"></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
</main>
<!--  Main Content -->

@stop