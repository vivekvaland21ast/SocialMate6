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



// like dislike button

             // liked 
            <i <?php if (userLiked($mainPost['id'])): ?> class="fa fa-thumbs-up like-btn" <?php else: ?>
                    class="fa fa-thumbs-o-up like-btn" <?php endif ?> data-id="<?php echo $mainPost['id'] ?>">
            </i>
            <span>>
                <?php echo getLikes($mainPost['id']); ?>
            </span>

            <!-- disliked -->
            <i <?php if (userLiked($mainPost['id'])): ?> class="fa fa-thumbs-down like-btn" <?php else: ?>
                    class="fa fa-thumbs-o-down dislike-btn" <?php endif ?> data-id="<?php echo $mainPost['id'] ?>">
            </i>
            <span>>
                <?php echo getDislikes($mainPost['id']); ?>
            </span>

<!-- like.php -->

<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');

$user_id = $_SESSION['user_id'];

if (!$conn) {
    die("Error connecting to database : " . mysqli_connect_error($conn));
    exit();
}

if (isset($_POST['action'])) {
    $post_id = $_POST['post_id'];
    $action = $_POST['action'];
    switch ($action) {
        case 'like':
            $sql = "INSERT into post_likes(user_id,post_id,liked) VALUES ($user_id,$post_id,'like') ON DUPLICATE KEY UPDATE liked='like'";
            break;
        case 'dislike':
            $sql = "INSERT into post_likes(user_id,post_id,liked) VALUES ($user_id,$post_id,'dislike') ON DUPLICATE KEY UPDATE liked='dislike'";
            break;
        case 'unlike':
            $sql = "DELETE from post_likes where user_id=$user_id AND post_id=$post_id";
            break;
        case 'undislike':
            $sql = "DELETE from post_likes where user_id=$user_id AND post_id=$post_id";
            break;
        default:
            break;
    }
    mysqli_query($conn, $sql);
    echo getRating($post_id);
    exit(0);
}

//dd($post_id);
function userLiked($post_id)
{

    global $conn;
    global $post_id;
    $sql = "SELECT * from post_likes where user_id =$post_id AND post_id=$post_id AND liked='like'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }

}

function getLikes($id)
{
    global $conn;
    $sql = "SELECT COUNT(*) from post_likes WHERE post_id = $id AND liked = 'like'";
    $rs = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($rs);
    return $result[0];
}

function getDislikes($id)
{
    global $conn;
    $sql = "SELECT COUNT(*) from post_likes WHERE post_id = $id AND liked = 'dislike'";
    $rs = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($rs);
    return $result[0];
}

function getRating($id)
{
    global $conn;
    $likes_query = "SELECT COUNT(*) from post_likes WHERE post_id = $id AND liked = 'like'";
    $dislikes_query = "SELECT COUNT(*) from post_likes WHERE post_id = $id AND liked = 'dislike'";
    $likes_rs = mysqli_query($conn, $likes_query);
    $dislikes_rs = mysqli_query($conn, $dislikes_query);
    $likes = mysqli_fetch_array($likes_rs);
    $dislikes = mysqli_fetch_array($dislikes_rs);
    $rating = [
        'likes' => $likes[0],
        'dislikes' => $dislikes[0],
    ];
    return json_encode($rating);
}

$mainPosts = "SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id order by post.time DESC";
$result = mysqli_query($conn, $mainPosts);
$posts1 = mysqli_fetch_all($result, MYSQLI_ASSOC);

// like.js
<script>
    // let likeBtn = document.querySelector('.like-btn');

    // function toggleLike() {
    //     likeBtn.classList.toggle('active');

    //     // Toggle Font Awesome class for the 
    //     // thumbs-up and thumbs-down icons 
    //     if (likeBtn.classList.contains('active')) {
    //         likeBtn.innerHTML =
    //             '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ff0000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>';
    //     } else {
    //         likeBtn.innerHTML =
    //             '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ffffff" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>';
    //     }
    // } 
    $(document).ready(function () {
        $('.like-btn').on('click', function () {
            var post_id = $(this).data('id');
            $clicked_btn = $(this);

            if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
                action = 'like';
            } else if ($clicked_btn.hasClass('fa-thumbs-up')) {
                action = 'unlike';
            }
            $.ajax({
                url: 'index.php',
                type: 'post',
                data: {
                    'action': action,
                    'post_id': post_id
                },
                success: function (data) {
                    res = JSON.parse(data);
                    if (action == 'like') {
                        $clicked_btn.removeClass('fa-thumbs-o-up');
                        $clicked_btn.addClass('fa-thumbs-up');
                    }
                    else if (action == 'unlike') {
                        $clicked_btn.removeClass('fa-thumbs-up');
                        $clicked_btn.addClass('fa-thumbs-o-up');
                    }
                    $clicked_btn.siblings('span.likes').text(res.likes);
                    $clicked_btn.siblings('span.dislikes').text(res.dislikes);

                    $clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
                }
            });
        });
    });
</script>

<button class="like-button bg-primary" data-post-id="<?php echo $mainPost['id']; ?>"
                    data-user-id="<?php echo $mainPost['user_id']; ?>">Like</button>