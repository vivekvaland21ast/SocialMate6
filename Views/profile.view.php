<?php require ('Particals/header.php') ?>
<?php require ('Particals/nav.php') ?>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform shadow-lg shadow-gray-600 bg-base-100 -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto shadow-lg shadow-gray-600 bg-base-100">

        <div class="hero-content flex-row lg:flex-col">
            <img src="<?php echo ($profilePath[0]["profile"]) ? $profilePath[0]["profile"] : 'uploads/default.png' ?>"
                class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800" alt="Profile Image" />

            <div class="">
                <h3 class="font-semibold text-xl text-gray-800 dark:text-white mb-1">
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                        echo "                   
                                @$_SESSION[username]
                            ";
                    }
                    ?>
                </h3>
            </div>
            <div>
                <button
                    class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit
                    Profile</button>
            </div>
        </div>

        <div
            class="shadow max-w-sm mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg shadow-gray-800">

            <div class="stat">
                <div class="stat-figure text-primary">
                    <div class="stat-figure text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="stat-title font-semibold text-gray-200">Posts</div>
                <div class="text-primary">
                    <?php echo $count[0]["count(user_id)"]; ?>
                </div>
            </div>

            <div class="stat">
                <div class="stat-figure text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="stat-title font-semibold text-gray-200">Following</div>
                <div class="text-warning">2K</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <div class="stat-title font-semibold text-gray-200">Likes</div>
                <div class="text-secondary">86</div>
            </div>

        </div>


    </div>
</aside>
<div class="p-4 sm:ml-64">
    <div class="p-10 mt-14">
        <section class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                foreach ($user_post as $post) {
                    include 'Views/photos.view.php';
                }
                ?>
            </div>
        </section>
    </div>
</div>


<!-- <div class="hero mt-20 rounded-3xl shadow-lg bg-base-200 bg-white dark:bg-gray-900 gap-2 max-w-6xl mt-15 mb-5 mx-auto">
    <div class="hero-content flex-col lg:flex-row">
        <div class="hero-content flex-row lg:flex-col">
            <img src="<?php echo ($profilePath[0]["profile"]) ? $profilePath[0]["profile"] : 'uploads/default.png' ?>"
                class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800" alt="Profile Image" />

            <div class="">
                <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                        echo "                   
                                $_SESSION[username]
                            ";
                    }
                    ?>
                </h3>
            </div>
        </div>
        <div>
            <h1 class="text-5xl font-bold">Box Office News!</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </div>
</div> -->
<?php require ('Particals/footer.php') ?>