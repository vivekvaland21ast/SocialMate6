<div
    class="p-2 flex items-center bg-white dark:bg-gray-900 justify-between border-gray-700 border-t cursor-pointer hover:bg-gray-700">
    <div class="flex items-center">
        <!-- <img class="rounded-full h-10 w-10" src="https://loremflickr.com/g/600/600/boy"> -->
        <img class="h-10 w-10 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
            src="<?php echo ($user["profile"]) ? $user["profile"] : 'uploads/default.png' ?>" alt="Profile Image" />
        <div class="ml-2 flex flex-col">
            <div class="leading-snug text-sm text-gray-200 font-bold">
                <?= $user['full_name'];

                ?>
            </div>
            <div class="leading-snug text-xs text-gray-600">
                <?= "@" . $user['username'] ?>
            </div>
        </div>
    </div>
    <!-- <a href="/friend">
        <button
            class="h-8 px-3 text-sm font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100 hover:text-black">View</button>
    </a> -->
    <button
        class="view-btn h-8 px-5 mr-4 text-sm font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100 hover:text-black"
        data-user-id="<?php echo $user['user_id']; ?>">
        View
    </button>
</div>