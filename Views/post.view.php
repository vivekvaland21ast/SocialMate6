<div class="max-w-xl mx-auto dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg mb-4">
    <div class="flex items-center justify-between px-4 py-3 border-b">
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full"
                src="<?php echo ($mainPost["profile"]) ? $mainPost["profile"] : 'uploads/default.png' ?>" />
            <div class="ml-3">
                <span class="text-md font-semibold antialiased block leading-tight">

                    <!-- if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                        echo "                   
                                    $_SESSION[username]
                            ";
                    } -->
                    <?= $mainPost['full_name'] ?>

                </span>
                <span class="text-gray-500 text-sm block">
                    <?= "@" . $mainPost['username'] ?>
                </span>
            </div>
        </div>
        <div class="relative">
            <div class="dropdown dropdown-bottom dropdown-end">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                    </svg>
                </button>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a href="" class="flex items-center rounded-t  py-2 px-4 block whitespace-no-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M7 3a2 2 0 012 2v10a2 2 0 11-4 0V5a2 2 0 012-2zm7 0a2 2 0 012 2v10a2 2 0 11-4 0V5a2 2 0 012-2z" />
                            </svg>
                            Edit
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center py-2 px-4 block whitespace-no-wrap"
                            onclick="return confirm('Are you sure you want to delete this post?')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 5a2 2 0 012-2h10a2 2 0 012 2v2h2a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h2V5zm4 2v10h8V7H7zm4 3a1 1 0 00-1 1v4a1 1 0 102 0v-4a1 1 0 00-1-1zm-2-2a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Delete
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="relative">
        <img src="data:image/jpeg;base64,<?= base64_encode($mainPost['image']) ?>" class="w-full" />
    </div>
    <div class="flex items-center justify-between mx-4 mt-3 mb-2">
        <div class="flex gap-5">
            <svg fill="#ffff" height="24" viewBox="0 0 48 48" width="24" class="like-btn" onclick="toggleLike()">
                <path
                    d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                </path>
            </svg>
            <svg fill="#ffff" height="24" viewBox="0 0 48 48" width="24">
                <path clip-rule="evenodd"
                    d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                    fill-rule="evenodd"></path>
            </svg>
            <svg fill="#ffff" height="24" viewBox="0 0 48 48" width="24">
                <path
                    d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                </path>
            </svg>
        </div>
        <div class="flex">
            <svg fill="#ffff" height="24" viewBox="0 0 48 48" width="24">
                <path
                    d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z">
                </path>
            </svg>
        </div>
    </div>
    <div class="font-semibold text-md mx-4 mt-3 text-primary">92,372 likes</div>
    <div class="font-semibold text-md mx-4 mb-3 text-red-500">
        <span class="font-semibold text-md text-warning">
            <?= $mainPost['username'] ?>
        </span>
        <span class="text-sm text-gray-300">
            <?= $mainPost['caption'] ?>
        </span>
        <span class="text-gray-500 text-sm block">
            <?= $mainPost['time'] ?>
        </span>
    </div>
</div>

<script>
    let likeBtn = document.querySelector('.like-btn');

    function toggleLike() {
        likeBtn.classList.toggle('active');

        // Toggle Font Awesome class for the 
        // thumbs-up and thumbs-down icons 
        if (likeBtn.classList.contains('active')) {
            likeBtn.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ff0000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>';
        } else {
            likeBtn.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ffffff" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>';
        }
    } 
</script>