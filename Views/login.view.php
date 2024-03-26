<?php require ('Particals/header.php') ?>

<section class="bg-white dark:bg-gray-900">
    <div class="container flex items-center justify-center min-h-screen px-6 mx-auto">
        <!-- <div role="tablist" class="tabs tabs-bordered flex items-center justify-center mt-6"> -->
        <div class="w-full flex justify-center">
            <div class="w-1/2">
                <div class="relative right-0">
                    <ul class="relative flex flex-wrap p-1 list-none rounded-xl bg-blue-gray-50/60" data-tabs="tabs"
                        role="list">
                        <li class="z-30 flex-auto text-center">
                            <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target="" active="" role="tab" aria-selected="true" aria-controls="app">
                                <span class="ml-1 text-md font-semibold text-primary-400">Sign in</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target="" role="tab" aria-selected="false" aria-controls="message">
                                <span class="ml-1 text-md font-semibold text-primary-400">Sign up</span>
                            </a>
                        </li>
                    </ul>
                    <div data-tab-content="" class="p-5">
                        <div class="block opacity-100" id="app" role="tabpanel">
                            <!-- login -->
                            <div role="tabpanel"
                                class="tab-content p-10 block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                <form class="w-full max-w-md" action="login_register.php" method="POST">
                                    <div class="relative flex items-center">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>

                                        <input type="text" name="email_username"
                                            class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Username">
                                    </div>

                                    <!-- <label for="dropzone-file"
                        class="flex items-center px-3 py-3 mx-auto mt-6 text-center bg-white border-2 border-dashed rounded-lg cursor-pointer dark:border-gray-600 dark:bg-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>

                        <h2 class="mx-3 text-gray-400">Profile Photo</h2>

                        <input id="dropzone-file" type="file" class="hidden" />
                    </label> -->

                                    <!-- <div class="relative flex items-center mt-6">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>

                        <input type="email"
                            class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Email address">
                    </div> -->

                                    <div class="relative flex items-center mt-4">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </span>

                                        <input type="password" name="password"
                                            class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Password">
                                    </div>
                                    <div class="relative flex items-center mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="stroke-info shrink-0 w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span> First verify Your Email Then Login.</span>
                                        </div>
                                        <!-- <div class="relative flex items-center mt-4">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>

                        <input type="password"
                            class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Confirm Password">
                    </div> -->

                                        <div class="mt-6">
                                            <button name="login" type="submit"
                                                class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                                Log in
                                            </button>

                                            <!-- <div class="mt-6 text-center ">
                            <a href="#" class="text-sm text-blue-500 hover:underline dark:text-blue-400">
                                Already have an account?
                            </a>
                        </div> -->
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="hidden opacity-0" id="message" role="tabpanel">
                            <!-- sign up -->
                            <div role="tabpanel"
                                class="tab-content p-10 block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                <form class="w-full max-w-md" action="login_register.php" method="POST">
                                    <div class="relative flex items-center">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>

                                        <input type="text" name="fullname"
                                            class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Fullname">
                                    </div>
                                    <div class="relative flex items-center mt-6">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>

                                        <input type="text" name="username"
                                            class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Username">
                                    </div>
                                    <!-- <label for="dropzone-file"
                        class="flex items-center px-3 py-3 mx-auto mt-6 text-center bg-white border-2 border-dashed rounded-lg cursor-pointer dark:border-gray-600 dark:bg-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300 dark:text-gray-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>

                        <h2 class="mx-3 text-gray-400">Profile Photo</h2>

                        <input id="dropzone-file" type="file" class="hidden" />
                    </label> -->

                                    <div class="relative flex items-center mt-6">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </span>

                                        <input type="email" name="email"
                                            class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Email address">
                                    </div>

                                    <div class="relative flex items-center mt-4">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </span>

                                        <input type="password" name="password"
                                            class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Password">
                                    </div>

                                    <!-- <div class="relative flex items-center mt-4">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>

                        <input type="password"
                            class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Confirm Password">
                    </div> -->

                                    <div class="mt-6">
                                        <button name="register" type="submit"
                                            class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                            Sign Up
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="hidden opacity-0" id="settings" role="tabpanel">
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit text-blue-gray-500">
                        Comparing yourself to others is the thief of joy.
                    </p>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</section>

<?php require ('Particals/footer.php') ?>