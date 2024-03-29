<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <!-- <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div> -->
        </div>
    </div>
</div>

<?php foreach ($friend_info as $friend_infos): ?>
    <a href="/friend?$friend_infos[user_id]=<?php echo $friend_infos['user_id']; ?>">
        <button
            class="h-8 px-3 text-sm font-bold text-blue-400 border border-blue-400 rounded-full hover:bg-blue-100 hover:text-black">View</button>
    </a>
<?php endforeach; ?>

<!-- option of edit delete -->
<ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
    <li>
        <a href="#my_modal_2<?php echo $mainPost['id'] ?>"
            class="flex items-center rounded-t  py-2 px-4 block whitespace-no-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M7 3a2 2 0 012 2v10a2 2 0 11-4 0V5a2 2 0 012-2zm7 0a2 2 0 012 2v10a2 2 0 11-4 0V5a2 2 0 012-2z" />
            </svg>
            Edit
        </a>
    </li>
    <li>
        <a href="/delete?id=<?php echo $post['id']; ?>" class="flex items-center py-2 px-4 block whitespace-no-wrap"
            onclick="return confirm('Are you sure you want to delete this post?')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M3 5a2 2 0 012-2h10a2 2 0 012 2v2h2a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h2V5zm4 2v10h8V7H7zm4 3a1 1 0 00-1 1v4a1 1 0 102 0v-4a1 1 0 00-1-1zm-2-2a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"
                    clip-rule="evenodd" />
            </svg>
            Delete
        </a>
    </li>
</ul>

<!-- update old modal -->
<dialog id="my_modal_2<?php echo $mainPost['id'] ?>" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <div class="modal-action">
                <a href="#" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</a>
            </div>
        </form>
        <h3 class="font-bold text-lg">Update your post</h3>
        <form class="p-4 md:p-5" method="POST" action="/update?id=<?php echo $mainPost['id']; ?>"
            enctype="multipart/form-data">
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <!-- <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label> -->
                    <input type="file" name="imageFile" value="<?php echo htmlspecialchars($mainPost['image']); ?>"
                        class="file-input file-input-bordered file-input-primary w-full file-input-sm max-w-xs" />
                </div>
                <div class="col-span-2">
                    <textarea id="description" rows="4" name="captionText"
                        class="textarea textarea-primary block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-blue-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="What's on your mind!!!"><?php echo htmlspecialchars($mainPost['caption']); ?></textarea>
                </div>
            </div>
            <button type="submit" name="update_post"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Update
            </button>
        </form>
    </div>
</dialog>

<!-- image post without blob -->
<?php

$config = require ('config.php');
$db = new Database($config['database']);

if (isset($_POST['post'])) {
    if (isset($_FILES["imageFile"]) && $_FILES["imageFile"]["error"] == 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["imageFile"]["name"]);
        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile)) {
            $caption = $_POST['captionText'];
            $imageData = $targetFile; // Store the path to the image file
            $db->query('INSERT INTO post (caption, image, user_id) VALUES (:caption, :image, :id)', [
                'caption' => $caption,
                'image' => $imageData,
                'id' => $_SESSION['user_id']
            ]);
            echo "
            <div class='toast toast-end toast-middle'>
                <div class='alert alert-success'>
                    <span>Post uploaded successfully.</span>
                </div>
            </div>
            ";
            exit(); // Exit after successful upload
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file uploaded or file upload error occurred.";
    }
} else {
    echo "Form not submitted.";
}