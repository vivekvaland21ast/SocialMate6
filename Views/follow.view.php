<div class="p-3 flex items-center bg-white dark:bg-gray-900 justify-between border-t cursor-pointer hover:bg-gray-700">
    <div class="flex items-center">
        <img class="rounded-full h-10 w-10" src="https://loremflickr.com/g/600/600/girl">
        <div class="ml-2 flex flex-col">
            <div class="leading-snug text-sm text-gray-200 font-bold">
                <? $users["full_name"] ?>
            </div>
            <div class="leading-snug text-xs text-gray-600">
                <? echo "@" . $users["username"] ?>
            </div>
        </div>
    </div>
    <button
        class="h-8 px-3 text-sm font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100 hover:text-black">Follow</button>
</div>