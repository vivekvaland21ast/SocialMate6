<?php require ('Particals/header.php') ?>
<?php require ('Particals/nav.php') ?>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform shadow-lg shadow-gray-600 bg-base-100 -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">

    <?php
    //dd($user);
    foreach ($user as $user_side) {
        include 'Views/friend.side.view.php';
    }
    ?>
</aside>
<div class="p-4 sm:ml-64">
    <div class="p-10 mt-14">
        <section class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                //dd($user);
                foreach ($user as $user_post) {
                    include 'Views/friend.photos.view.php';
                }
                ?>
            </div>
        </section>
    </div>
</div>


<?php require ('Particals/footer.php') ?>