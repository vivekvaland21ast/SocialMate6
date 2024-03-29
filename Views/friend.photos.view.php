<div id="imagePopup" class="popup-overlay">
    <div class="popup bg-gray-800 modal-box dialog flex flex-col items-center">
        <div class="close-btn btn btn-md btn-circle btn-ghost absolute right-2 top-2" onclick="closeImagePopup()">✕
        </div>
        <img id="popupImage" class="popup-image" src="" alt="popup-image">
        <div class="font-semibold text-md mt-2 text-red-500">
            <span class="font-semibold text-md text-warning">
                <?= $user_post['username'] ?>
            </span>
            <span class="text-sm text-gray-300">
                <?= $user_post['caption'] ?>
            </span>
        </div>
    </div>
</div>


<div
    class="w-full border-2 bg-gray-900 rounded-lg shadow-xl shadow-gray-800 overflow-hidden flex flex-col justify-center items-center">
    <div class="relative">
        <img class="object-center object-cover h-40 p-5 w-full"
            src="data:image/jpeg;base64,<?= base64_encode($user_post['image']) ?>" alt="photo">
    </div>
    <div class="flex justify-center py-5">
        <!-- Eye icon -->
        <div class="text-center w-5 h-5 cursor-pointer mx-4"
            onclick="showImagePopup('<?= base64_encode($user_post['image']) ?>')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="#74C0FC"
                    d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
            </svg>
        </div>
    </div>
</div>



<script>
    function showImagePopup(imageSrc) {
        var popup = document.getElementById('imagePopup');
        var popupImage = document.getElementById('popupImage');

        popupImage.src = "data:image/jpeg;base64," + imageSrc;
        popup.style.display = "flex";
    }

    function closeImagePopup() {
        var popup = document.getElementById('imagePopup');
        popup.style.display = "none";
    }

</script>